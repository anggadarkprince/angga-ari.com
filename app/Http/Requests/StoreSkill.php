<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkill extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->isMethod('put') || $this->isMethod('patch')) {
            $skill = $this->route('skill');

            return $skill && $this->user()->can('update', $skill);
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
            'expertise' => 'required|max:100',
            'proficiency_level' => 'required|integer|between:20,100',
            'description' => 'nullable|max:500',
        ];
    }
}
