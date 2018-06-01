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
        if($this->isMethod('put') || $this->isMethod('patch')) {
            $portfolio = $this->route('portfolio');

            return $portfolio && $this->user()->can('update', $portfolio);
        }
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
            'field' => 'required|max:100',
            'title' => 'required|max:100',
            'tagline' => 'required|max:200',
            'description' => 'required|max:2000',
            'year' => 'required|integer|between:1975,' . date('Y'),
            'month' => 'required|date_format:m',
            'cover' => 'required',
            'team' => 'nullable|max:50',
            'company' => 'nullable|max:50',
            'url' => 'nullable|url|max:300',
            'keywords' => 'required|max:300',
            'layout' => 'required|in:default,flow,masonry',
        ];
    }
}
