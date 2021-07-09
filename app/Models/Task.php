<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'type', 'day', 'date', 'hour', 'minute',
        'remind_before', 'priority', 'status'
    ];

    /**
     * Get the author that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
