<?php

namespace App\Http\Requests;

use App\Education;
use Illuminate\Foundation\Http\FormRequest;

class StoreEducation extends FormRequest
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
            'degree' => 'required|max:100',
            'institution' => 'required|max:100',
            'major' => 'required|max:100',
            'location' => 'required|max:300',
            'enter' => 'required|date_format:Y',
            'graduate' => 'nullable|date_format:Y',
        ];
    }
}
