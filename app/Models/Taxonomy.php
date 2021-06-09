<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    const TYPE_SHOWCASE = 'showcase';
    const TYPE_JOURNAL = 'journal';

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
     * @param Builder $query
     * @param $category
     * @return Builder
     */
    public function scopeCategory(Builder $query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Scope a query to sort latest post by published date.
     *
     * @param Builder $query
     * @param $type
     * @return Builder
     */
    public function scopeType(Builder $query, $type)
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
