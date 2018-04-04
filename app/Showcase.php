<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    /**
     * Get the owner that owns the showcase.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the showcase's attachments.
     */
    public function screenshots()
    {
        return $this->morphMany(Upload::class, 'attachable');
    }

    /**
     * Get all of the tags for the showcase.
     */
    public function tags()
    {
        return $this->morphToMany(Taxonomy::class, 'taggable', 'taxonomy_relationships');
    }

    /**
     * Get all of the showcase's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
