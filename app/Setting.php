<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Setting extends Model
{
    /**
     * Bind setting query with keys.
     *
     * @param $query
     * @param $key
     * @throws \Exception
     */
    public function bindSettingKey(&$query, $key)
    {
        $keys = explode('.', $key);

        $query->where('setting_groups.group', $keys[0]);

        if (count($keys) > 1) {
            $query->where('settings.setting', $keys[1]);
        } else {
            throw new \Exception('Setting key is invalid, format should be [group_key.setting_key]');
        }
    }

    /**
     * Get initial default value of setting key.
     *
     * @param $key
     * @return mixed|null
     * @throws \Exception
     */
    public function getInitialValue($key)
    {
        $settings = DB::table('setting_groups')
            ->select('group', 'setting', 'initial_value')
            ->join('settings', 'setting_groups.id', '=', 'settings.setting_group_id');

        $this->bindSettingKey($settings, $key);

        $settingRow = $settings->first();

        if(empty($settingRow)) {
            return null;
        }

        return $settingRow->initial_value;
    }

    /**
     * Get application setting.
     *
     * @param $key
     * @param string $defaultValue
     * @return Model|\Illuminate\Database\Query\Builder|null|object
     * @throws \Exception
     */
    public function getAppSetting($key, $defaultValue = '')
    {
        return $this->getSetting(null, $key, $defaultValue);
    }

    /**
     * Get default user setting.
     *
     * @param integer $userId
     * @param string $key
     * @param string $defaultValue
     * @return Model|\Illuminate\Database\Query\Builder|null|object
     * @throws \Exception
     */
    public function getSetting($userId, $key, $defaultValue = '')
    {
        $settings = DB::table('setting_groups')
            ->select('group', 'setting', 'value', 'initial_value')
            ->join('settings', 'setting_groups.id', '=', 'settings.setting_group_id')
            ->leftJoin('user_settings', 'settings.id', '=', 'user_settings.setting_id')
            ->where('user_settings.user_id', $userId);

        $this->bindSettingKey($settings, $key);

        $settingRow = $settings->first();

        if (empty($settingRow) || is_null($settingRow->value) || $settingRow->value == '') {
            if(is_null($defaultValue) || $defaultValue == '') {
                return $this->getInitialValue($key);
            } else {
                return $defaultValue;
            }
        }

        return $settingRow->value;
    }

    /**
     * Set setting value by given key name.
     *
     * @param $userId
     * @param $keys
     * @param string $value
     * @return mixed|void
     * @throws \Exception
     */
    public function setSetting($userId, $keys, $value = '')
    {
        if (is_array($keys)) {
            DB::transaction(function () use ($userId, $keys) {
                foreach ($keys as $key => $val) {
                    $this->updateSetting($userId, $key, $val);
                }
            }, 5);
            return true;
        }
        return $this->updateSetting($userId, $keys, $value);
    }

    /**
     * Update setting value.
     *
     * @param $userId
     * @param $key
     * @param string $value
     * @return mixed
     * @throws \Exception
     */
    private function updateSetting($userId, $key, $value = '')
    {
        $keys = explode('.', $key);

        if (count($keys) < 2) {
            throw new \Exception('Invalid user setting key, format must formatted as [group_key.setting_key]');
        }

        $setting = DB::table('setting_groups')
            ->select('setting_groups.id AS setting_group_id', 'group', 'setting', 'settings.id AS setting_id')
            ->join('settings', 'setting_groups.id', '=', 'settings.setting_group_id')
            ->where([
                ['setting_groups.group', '=', $keys[0]],
                ['settings.setting', '=', $keys[1]],
            ])->first();

        if (empty($setting)) {
            throw new \Exception("Setting key [{$key}] is not found");
        }

        $userSetting = UserSetting::updateOrCreate(
            ['user_id' => $userId, 'setting_id' => $setting->setting_id],
            ['value' => $value]
        );

        return $userSetting;
    }
}
