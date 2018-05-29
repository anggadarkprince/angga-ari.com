<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property integer user_id
 * @property string degree
 * @property string major
 * @property string location
 * @property string enter
 * @property string graduate
 */
class Education extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'educations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'degree', 'institution', 'major', 'location', 'enter', 'graduate'
    ];

    const DEGREES = [
        'PhD', 'Master', 'Bachelor', 'High School',
        'Junior High School', 'Elementary School',
        'Special Course', 'Other',
    ];
}
