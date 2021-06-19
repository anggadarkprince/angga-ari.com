<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Str;

class Slugger
{
    const MAX_TRIAL = 10;

    private $userId;

    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Create safe slug, generate new one if already exist, and add unique id if max tried reached.
     *
     * @param $class
     * @param $title
     * @param string $column
     * @param null $exceptId
     * @return string
     * @throws Exception
     */
    public function createSafeSlug($class, $title, $exceptId = null, $column = 'slug')
    {
        $tried = 0;
        while (true) {
            $slug = Str::slug($title);
            if ($tried > 0) {
                if ($tried >= self::MAX_TRIAL) {
                    $slug .= '-' . uniqid();
                } else {
                    $slug .= '-' . $tried;
                }
            }

            $record = $class::where($column, $slug);

            if ($exceptId) {
                $record->where((new $class)->getKeyName(), '!=', $exceptId);
            }

            if ($this->userId) {
                $record->where('user_id', $this->userId);
            }

            $record = $record->first();

            if (empty($record)) {
                return $slug;
            }

            if ($tried == self::MAX_TRIAL * 2) {
                throw new Exception("Slug generation exhausted in {$tried} trial");
            }

            $tried++;
        }
    }
}
