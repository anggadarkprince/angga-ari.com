<?php

namespace App;

use App\Contracts\Taggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $cover
 */
class Portfolio extends Model implements Taggable
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'field', 'title', 'tagline', 'description', 'cover', 'company',
        'team', 'url', 'date', 'layout', 'privacy'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the portfolio's cover small version.
     *
     * @return string
     */
    public function getCoverSmallAttribute()
    {
        return get_small_version($this->cover);
    }

    /**
     * Scope a query to sort portfolio by working date.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeLatest($query)
    {
        return $query
            ->orderBy('date', 'desc')
            ->orderBy('created_at', 'desc');
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopePopular($query)
    {
        return $query->orderBy('views', 'desc');
    }

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
        return $this->morphToMany(Taxonomy::class, 'taggable', 'taxonomy_relationships')->withTimestamps();
    }

    /**
     * Get all of the showcase's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
