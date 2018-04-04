<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * Get the owner that owns the skill.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
