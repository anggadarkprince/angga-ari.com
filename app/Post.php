<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property integer id
 * @property integer user_id
 * @property string slug
 * @property string title
 * @property Carbon published_at
 * @property string content
 * @property string cover
 */
class Post extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'views' => 'integer', 'comments' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'published_at', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * Get the route key for post.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the post's url.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        $params = [
            'year' => $this->published_at->format('Y'),
            'month' => $this->published_at->format('m'),
            'slug' => $this->slug
        ];
        return route('blog.article', $params);
    }

    /**
     * Get the post's url of cover.
     *
     * @return string
     */
    public function getCoverUrlAttribute()
    {
        return asset('storage/' . $this->cover);
    }

    /**
     * Get the post's url of cover.
     *
     * @return string
     */
    public function getCoverSmallUrlAttribute()
    {
        return asset('storage/' . get_small_version($this->cover));
    }

    /**
     * Get the post's preview text.
     *
     * @param int $words
     * @return string
     */
    public function getPreview($words = 20)
    {
        return Str::words(strip_tags($this->content), $words);
    }

    /**
     * Scope a query to sort latest post by published date.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    /**
     * Get the author that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the tags for the showcase.
     */
    public function tags()
    {
        return $this->morphToMany(Taxonomy::class, 'taggable', 'taxonomy_relationships')->withTimestamps();
    }

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
