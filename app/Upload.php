<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'parent', 'is_directory', 'path', 'file_name', 'size',
        'mime', 'caption', 'description'
    ];

    /**
     * Get the owner that owns the files.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the owning attachable models.
     */
    public function attachable()
    {
        return $this->morphTo();
    }
}
