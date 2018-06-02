<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'term', 'slug', 'type', 'description'
    ];

    /**
     * Get the owner that owns the taxonomy.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable', 'taxonomy_relationship')->withTimestamps();
    }

    /**
     * Get all of the showcase that are assigned this tag.
     */
    public function showcases()
    {
        return $this->morphedByMany(Portfolio::class, 'taggable', 'taxonomy_relationship')->withTimestamps();
    }
}
