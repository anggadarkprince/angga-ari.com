<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property integer user_id
 * @property string field
 * @property string expertise
 * @property string description
 * @property integer proficiency_level
 * @property string created_at
 * @property string updated_at
 */
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
