<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivation extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the owner that owns the token.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
