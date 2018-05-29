<?php

namespace App;

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
}
