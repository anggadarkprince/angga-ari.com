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
        $keySize = $this->input('cipher') == 'AES-256-CBC' ? 32 : 16;

        return [
            'master_password' => 'nullable|string|max:100',
            'secret_key' => 'nullable|string|size:' . $keySize,
            'cipher' => 'required|in:AES-256-CBC,AES-128-CBC',
            'entropy' => 'required|in:strong,normal',
            'reveal_method' => 'required|in:steganography,plain-text',
        ];
    }
}
