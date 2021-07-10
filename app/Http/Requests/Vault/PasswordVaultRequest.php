<?php

namespace App\Http\Requests\Vault;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PasswordVaultRequest extends FormRequest
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
            'vault_type' => [
                'required', Rule::in([
                    'Password', 'Credit Card', 'Bank Account', 'Email Account',
                    'Database', 'Passport', 'License', 'Wifi', 'Server', 'Document',
                    'Misc'
            ])],
            'key_title' => 'required|string|max:100',
            'identifier' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'password2' => 'nullable|string|max:255',
            'description' => 'required|string|max:2000',
            'expired_at' => 'nullable|date',
        ];
    }
}
