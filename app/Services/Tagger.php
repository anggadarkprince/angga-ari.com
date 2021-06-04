<?php

namespace App\Services;

use App\Contracts\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tagger extends Model
{
    const TAXONOMY_TAG = 'tag';
    const TAXONOMY_CATEGORY = 'category';

    /**
     * Tag keywords into a model.
     * @param Taggable $model
     * @param array|string $terms
     * @param string $type
     * @param null $userId
     * @param bool $withoutDetach
     * @return array
     */
    public function tagging(Taggable $model, $terms = null, $type = self::TAXONOMY_TAG, $userId = null, $withoutDetach = false)
    {
        $termIds = [];
        if(empty($terms)) {
            $terms = [];
        } else {
            $terms = is_array($terms) ? $terms : explode(',', $terms);
        }

        foreach ($terms as $term) {
            if ($type == self::TAXONOMY_CATEGORY) {
                $category = Taxonomy::find($term);
                if (empty($category)) {
                    $termIds[] = $this->storeTerm($term, $type, $userId)->id;
                } else {
                    $termIds[] = $category->id;
                }
            } else {
                $termIds[] = $this->storeTerm($term, $type)->id;
            }
        }

        $tags = $model->tags();

        if ($withoutDetach) {
            return $tags->syncWithoutDetaching($termIds);
        }

        return $tags->sync($termIds);
    }

    /**
     * Get or create term.
     *
     * @param $term
     * @param $type
     * @param null $userId
     * @return mixed
     */
    public function storeTerm($term, $type, $userId = null)
    {
        $slug = Str::slug($term);

        $termData = Taxonomy::firstOrCreate([
            'slug' => $slug, 'term' => $term, 'type' => $type, 'user_id' => $userId
        ]);

        return $termData;
    }
}
