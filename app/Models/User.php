<?php

namespace App\Models;

use App\Exceptions\InvalidUserSetting;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email',
        'password', 'location', 'contact', 'website',
        'about', 'avatar', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'username';
    }

    /**
     * Get the activation token that owned by user.
     *
     * @return HasOne
     */
    public function userActivation()
    {
        return $this->hasOne(UserActivation::class);
    }

    /**
     * Get the posts that owned by author.
     *
     * @return HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the passwords that owned by user.
     *
     * @return HasMany
     */
    public function passwordVaults()
    {
        return $this->hasMany(PasswordVault::class);
    }

    /**
     * Get the educations that owner by user.
     *
     * @return HasMany
     */
    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    /**
     * Get the experiences that owner by user.
     *
     * @return HasMany
     */
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    /**
     * Get the experiences that owner by user.
     *
     * @return HasMany
     */
    public function awards()
    {
        return $this->hasMany(Award::class);
    }

    /**
     * Get the skills that owned by user.
     *
     * @return HasMany
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    /**
     * Get the showcases that owned by user.
     *
     * @return HasMany
     */
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    /**
     * Get the tags that owned by user.
     *
     * @return HasMany
     */
    public function taxonomies()
    {
        return $this->hasMany(Taxonomy::class);
    }

    /**
     * Get the comments that owned by user.
     *
     * @return HasMany
     */
    public function comments()
    {
        return $this->hasMany(Taxonomy::class);
    }

    /**
     * Get the uploaded files that owned by user.
     *
     * @return HasMany
     */
    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }

    /**
     * Get the notebooks that owned by user.
     *
     * @return HasMany
     */
    public function notebooks()
    {
        return $this->hasMany(Notebook::class);
    }

    /**
     * Get the task that owned by user.
     *
     * @return HasMany
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * Get linked social account such as Facebook, Twitter or Google.
     *
     * @return HasMany
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
     * @return Model|Builder|null|object
     * @throws \Exception
     */
    public function setting($keys, $defaultValue = '')
    {
        $setting = new Setting();

        if (!isset($this->id)) {
            throw new InvalidUserSetting('No user setting available');
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
        ResetPassword::$createUrlCallback = function($notifiable, $token) {
            return url(env('APP_ACCOUNT_URL').route('password.reset', [
                'token' => $token,
                'email' => $notifiable->getEmailForPasswordReset(),
            ], false));
        };

        $this->notify(new ResetPassword($token));
    }
}
