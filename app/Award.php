<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property integer user_id
 * @property string title
 * @property string category
 * @property string description
 * @property string location
 * @property string awarded_in
 * @property string created_at
 * @property string updated_at
 */
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
