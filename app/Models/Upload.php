<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Upload extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'parent', 'is_directory', 'path', 'source', 'name', 'size',
        'mime', 'caption', 'description'
    ];

    /**
     * Bootstrap the model and its traits.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        // before delete() method call this to delete related children data
        static::deleting(function ($upload) {
            if ($upload->contents()->exists()) {
                $files = $upload->contents->filter(function($upload) {
                    $upload->delete();
                    return !$upload->is_directory;
                });

                $files->each(function ($file) {
                    if (Storage::exists($file->source)) {
                        Storage::delete($file->source);
                    }
                });
            }
        });

        // delete file after model deleted
        static::deleted(function ($upload) {
            if (!$upload->is_directory && Storage::exists($upload->source)) {
                Storage::delete($upload->source);
            }
        });
    }

    /**
     * Get the owner that owns the files.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all content of the directory.
     */
    public function contents()
    {
        return $this->hasMany(Upload::class, 'parent');
    }

    /**
     * Get all of the owning attachable models.
     */
    public function attachable()
    {
        return $this->morphTo();
    }
}
