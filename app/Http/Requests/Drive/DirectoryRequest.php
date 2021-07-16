<?php

namespace App\Http\Requests\Drive;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DirectoryRequest extends FormRequest
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
        $directoryId = optional($this->route('directory'))->id;

        return [
            'parent' => 'nullable|exists:uploads,id' . (empty($directoryId) ? '' : '|not_in:' . $directoryId),
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:200',
        ];
    }
}
