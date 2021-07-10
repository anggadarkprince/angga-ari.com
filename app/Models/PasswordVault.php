<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\Crypt;

class PasswordVault extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'vault_type', 'key_title', 'identifier', 'password', 'password2',
        'description', 'expired_at'
    ];

    /**
     * Bootstrap the model and its traits.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            self::encryptVault($model);
        });

        static::updating(function ($model) {
            self::encryptVault($model);
        });
    }

    /**
     * Encrypt vault value.
     *
     * @param $model
     */
    public static function encryptVault($model)
    {
        //new Encrypter($this->parseKey($config), $config['cipher']);

        $model->identifier = Crypt::encryptString($model->identifier);
        $model->password = Crypt::encryptString($model->password);
        if (!empty($model->password2)) {
            $model->password2 = Crypt::encryptString($model->password2);
        }
    }

    /**
     * Get the decrypted of identifier attribute.
     *
     * @param $identifier
     * @return string
     */
    public function getIdentifierAttribute($identifier)
    {
        if ($this->isDirty('identifier')) {
            return $identifier;
        }
        return Crypt::decryptString($identifier);
    }

    /**
     * Get the decrypted of password attribute.
     *
     * @param $password
     * @return string
     */
    public function getPasswordAttribute($password)
    {
        if ($this->isDirty('password')) {
            return $password;
        }
        return Crypt::decryptString($password);
    }

    /**
     * Get the decrypted of password2 attribute.
     *
     * @param $password2
     * @return string
     */
    public function getPassword2Attribute($password2)
    {
        if (empty($password2) || $this->isDirty('password2')) {
            return $password2;
        }
        return Crypt::decryptString($password2);
    }
}
