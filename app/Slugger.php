<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slugger extends Model
{
    const MAX_TRIAL = 10;

    /**
     * Create safe slug, generate new one if already exist, and add unique id if max tried reached.
     *
     * @param $class
     * @param $title
     * @param string $column
     * @return string
     * @throws \Exception
     */
    public function createSafeSlug($class, $title, $column = 'slug')
    {
        $tried = 0;
        while (true) {
            $slug = str_slug($title);
            if ($tried > 0) {
                if ($tried >= self::MAX_TRIAL) {
                    $slug .= '-' . uniqid();
                } else {
                    $slug .= '-' . $tried;
                }
            }

            $record = $class::where($column, $slug)->first();
            if (empty($record)) {
                return $slug;
            }

            if ($tried == self::MAX_TRIAL * 2) {
                throw new \Exception("Slug generation exhausted in {$tried} trial");
            }

            $tried++;
        }
    }
}
