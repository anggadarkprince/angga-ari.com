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

    /**
     * Get linked social account such as Facebook, Twitter or Google.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function linkedAccounts()
    {
        return $this->hasMany(LinkedAccount::class);
    }

    /**
     * Get user setting.
     *
     * @param $keys
     * @param $defaultValue
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Query\Builder|null|object
     * @throws \Exception
     */
    public function setting($keys, $defaultValue = '')
    {
        $setting = new Setting();

        if(!isset($this->id)) {
            throw new \Exception('No user setting available');
        }

        return $setting->getSetting($this->id, $keys, $defaultValue);
    }

    /**
     * Send password reset email.
     *
     * @param string $token
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
