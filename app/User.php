<?php

namespace App;

use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'location', 'contact', 'website', 'about', 'avatar', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the activation token that owned by user.
     */
    public function userActivation()
    {
        return $this->hasOne(UserActivation::class);
    }

    /**
     * Get the posts that owned by author.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the events that owner by user.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    /**
     * Get the skills that owned by user.
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    /**
     * Get the showcases that owned by user.
     */
    public function showcases()
    {
        return $this->hasMany(Showcase::class);
    }

    /**
     * Get the tags that owned by user.
     */
    public function taxonomies()
    {
        return $this->hasMany(Taxonomy::class);
    }

    /**
     * Get the comments that owned by user.
     */
    public function comments()
    {
        return $this->hasMany(Taxonomy::class);
    }

    /**
     * Get the uploaded files that owned by user.
     */
    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
