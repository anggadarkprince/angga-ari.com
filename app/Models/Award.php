<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'category', 'description', 'location', 'awarded_in'
    ];

    /**
     * Get the author that owns the award.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
