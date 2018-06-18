<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer user_id
 */
class Taxonomy extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'term', 'slug', 'type', 'category', 'description'
    ];

    /**
     * Scope a query to sort latest post by published date.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $category
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Scope a query to sort latest post by published date.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

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
        return $this->morphedByMany(Post::class, 'taggable', 'taxonomy_relationships')->withTimestamps();
    }

    /**
     * Get all of the showcase that are assigned this tag.
     */
    public function showcases()
    {
        return $this->morphedByMany(Portfolio::class, 'taggable', 'taxonomy_relationships')->withTimestamps();
    }

    /**
     * Get categories by user id and type.
     *
     * @param $userId
     * @param $type
     * @return mixed
     */
    public function categories($userId, $type)
    {
        return $this->where('user_id', $userId)
            ->orWhere('slug', 'uncategories')
            ->category($type)
            ->get();
    }
}
