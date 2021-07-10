<?php

namespace App\Http\Requests\Vault;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'master_password' => 'nullable|string|max:100',
            'secret_key' => 'nullable|string|max:100',
            'cipher' => 'required|in:AES-256-CBC,AES-128-CBC',
            'entropy' => 'required|in:strong,normal',
            'reveal_method' => 'required|in:steganography,plain-text',
        ];
    }
}
