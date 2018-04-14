<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivation extends Model
{
    protected $guarded = [];

    /**
     * Get the owner that owns the token.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
