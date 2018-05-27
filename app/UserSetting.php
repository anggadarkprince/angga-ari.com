<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'setting_id', 'value'
    ];
}
