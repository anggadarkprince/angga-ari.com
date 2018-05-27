<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkedAccount extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider_name', 'provider_id', 'token', 'secret', 'expired_at'
    ];

    /**
     * Get the linked user account with.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
