<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'field', 'expertise', 'description', 'proficiency_level'
    ];

    const FIELDS = [
        'Communication', 'Design', 'Engineering', 'Finance',
        'Medical', 'Music', 'Law', 'Government', 'Social', 'Science',
        'Programming', 'Sport', 'Economy', 'Military', 'Education', 'Other'
    ];

    /**
     * Get the owner that owns the skill.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
