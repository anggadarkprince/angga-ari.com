<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExperience extends FormRequest
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
            'experience' => 'required|max:100',
            'occupation' => 'required|max:100',
            'location' => 'required|max:300',
            'description' => 'nullable|max:500',
            'start' => 'required|date_format:Y',
            'end' => 'nullable|date_format:Y',
        ];
    }
}
