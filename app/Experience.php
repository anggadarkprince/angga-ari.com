<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property integer user_id
 * @property string experience
 * @property string occupation
 * @property string description
 * @property string location
 * @property string start
 * @property string end
 */
class Experience extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'experience', 'occupation', 'description', 'location', 'start', 'end'
    ];
}
