<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Get the owner that owns the event.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
