<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
