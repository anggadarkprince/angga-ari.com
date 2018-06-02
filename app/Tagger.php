<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagger extends Model
{
    const TAXONOMY_TAG = 'tag';
    const TAXONOMY_CATEGORY = 'category';

    /**
     * Tag keywords into a model.
     * @param Model $model
     * @param array $tags
     * @param $type
     * @return boolean
     */
    public function tagging(Model $model, $tags = [], $type = self::TAXONOMY_TAG)
    {
        $tagIds = [];
        $tags = is_array($tags) ? $tags : explode(',', $tags);
        foreach ($tags as $tag) {
            $tagSlug = str_slug($tag);
            $tagData = Taxonomy::firstOrCreate(['slug' => $tagSlug, 'term' => $tag, 'type' => $type]);
            $tagIds[] = $tagData->id;
        }
        return $model->tags()->sync($tagIds);
    }
}
