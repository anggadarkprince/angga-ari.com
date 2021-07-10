<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\Auth;
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
            static::encryptVault($model);
        });

        static::updating(function ($model) {
            static::encryptVault($model);
        });
    }

    /**
     * Get instance of encrypter with custom key and cipher.
     *
     * @return Encrypter
     */
    public static function getEncrypter()
    {
        $user = Auth::user();
        $secretKey = $user->setting('vault.secret_key');
        $cipher = $user->setting('vault.cipher');
        return new Encrypter($secretKey, $cipher);
    }

    /**
     * Encrypt vault value.
     *
     * @param $model
     */
    public static function encryptVault($model)
    {
        if (Auth::check()) {
            $encrypter = static::getEncrypter();
            $model->identifier = $encrypter->encryptString($model->identifier);
            $model->password = $encrypter->encryptString($model->password);
            if (!empty($model->password2)) {
                $model->password2 = $encrypter->encryptString($model->password2);
            }
        }
    }

    /**
     * Decrypt vault value.
     *
     * @param $value
     * @return string
     */
    public static function decryptVault($value)
    {
        if (Auth::check()) {
            $encrypter = static::getEncrypter();
            return $encrypter->decryptString($value);
        }
        return Crypt::decryptString($value);
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
        return static::decryptVault($identifier);
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
        return static::decryptVault($password);
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
        return static::decryptVault($password2);
    }
}
