<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolio extends FormRequest
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
            'title' => 'required|max:100',
            'tagline' => 'required|max:200',
            'description' => 'required|max:2000',
            'year' => 'required|integer|between:1975,' . date('Y'),
            'month' => 'required|date_format:m',
            'cover' => 'required|image|mimes:jpg,jpeg,png|max:3000',
            'team' => 'nullable|max:50',
            'company' => 'nullable|max:50',
            'url' => 'nullable|url|max:300',
            'tags' => 'required|max:500',
            'layout' => 'required|in:default,flow,masonry',
        ];
    }
}
