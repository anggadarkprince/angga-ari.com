<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAward extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $award = $this->route('award');

            return $award && $this->user()->can('update', $award);
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
            'title' => 'required|max:100',
            'category' => 'required|max:100',
            'description' => 'required|max:500',
            'location' => 'required|max:300',
            'awarded_in' => 'required|date_format:Y',
        ];
    }
}
