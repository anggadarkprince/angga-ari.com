<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaxonomy extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->isMethod('put') || $this->isMethod('patch')) {
            $taxonomy = $this->route('taxonomy');

            return $taxonomy && $this->user()->can('update', $taxonomy);
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
            'term' => 'required|max:100',
            'description' => 'nullable|max:500',
        ];
    }
}
