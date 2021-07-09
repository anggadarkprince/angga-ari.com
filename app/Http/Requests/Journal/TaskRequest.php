<?php

namespace App\Http\Requests\Journal;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'description' => 'required|max:2000',
            'type' => 'required|in:todo,routine',
            'day' => 'required|integer|max:7',
            'date' => 'required|date',
            'hour' => 'required|integer|max:23',
            'minute' => 'required|integer|max:59',
            'remind_before' => 'required|integer|max:180',
            'priority' => 'required|in:normal,high,low',
            'status' => 'required|in:listed,done,on progress',
        ];
    }
}
