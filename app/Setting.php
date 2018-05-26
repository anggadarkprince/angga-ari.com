<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Setting extends Model
{
    /**
     * Get application setting.
     *
     * @param $key
     * @param string $defaultValue
     * @return Model|\Illuminate\Database\Query\Builder|null|object
     */
    public function getSettingApp($key, $defaultValue = '')
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
     */
    public function getSetting($userId, $key, $defaultValue = '')
    {
        $settings = DB::table('setting_groups')
            ->select('group', 'setting', 'value')
            ->join('settings', 'setting_groups.id', '=', 'settings.setting_group_id')
            ->join('user_settings', 'settings.id', '=', 'user_settings.setting_id')
            ->where('user_settings.user_id', $userId);

        $keys = explode('.', $key);

        $settings->where('setting_groups.group', $keys[0]);

        if (count($keys) > 1) {
            $settings->where('settings.setting', $keys[1]);
        }

        $settingRow = $settings->first();

        if (empty($settingRow)) {
            return $defaultValue;
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
            throw new \Exception('Invalid user setting key, format must contain group and setting');
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
