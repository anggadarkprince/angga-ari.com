<?php

namespace App\Http\Requests\Blog;

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
            'heading' => 'required|string|max:50',
            'subheading' => 'nullable|string|max:100',
            'keywords' => 'required|string|max:200',
            'category' => 'required|string|max:100',
            'language' => 'required|string|max:50',
        ];
    }
}
