<?php

namespace App;

use App\Observers\PostObserver;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

/**
 * @property integer id
 * @property integer user_id
 * @property string slug
 * @property string title
 * @property Carbon published_at
 * @property string content
 * @property string cover
 * @property mixed status
 * @property User user
 * @method static findOrFail($id, $columns = ['*'])
 */
class Post extends Model
{
    use SoftDeletes;

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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'title', 'subtitle', 'content', 'cover', 'privacy', 'status',
        'views', 'comments', 'published_at'
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
        if ($this->status == 'published') {
            $params = [
                'year' => $this->published_at->format('Y'),
                'month' => $this->published_at->format('m'),
                'slug' => $this->slug
            ];
            return route('blog.article', $params);
        } else {
            return route('blog.post.preview', ['id' => $this->id]);
        }
    }

    /**
     * Get the post's category.
     *
     * @return string
     */
    public function getCategoryIdAttribute()
    {
        $category = $this->tags()->type(Tagger::TAXONOMY_CATEGORY)->first();
        if (empty($category)) {
            return null;
        }
        return $category->id;
    }

    /**
     * Get the post's tags.
     *
     * @return string
     */
    public function getTagAttribute()
    {
        $tags = $this->tags()->type(Tagger::TAXONOMY_TAG)->pluck('term')->implode(',');

        return $tags;
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
     * Get the post's url of cover.
     *
     * @return string
     */
    public function getCoverMediumUrlAttribute()
    {
        return asset('storage/' . get_small_version($this->cover, '_medium'));
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
        return $query->orderBy('updated_at', 'desc');
    }

    /**
     * Scope a query to sort latest post by published date.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
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

    /**
     * Model events
     */
    protected static function boot() {
        parent::boot();
        parent::observe(PostObserver::class);
    }
}
