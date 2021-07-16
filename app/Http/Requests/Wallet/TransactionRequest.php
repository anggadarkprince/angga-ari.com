<?php

namespace App\Http\Requests\Wallet;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransactionRequest extends FormRequest
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
            'category' => ['required', Rule::in([
                'food', 'gas', 'snack', 'shopping', 'coffee', 'beverages',
                'hobby', 'salary', 'uncategorized', 'baby', 'transportation', 'pet',
                'gadget', 'hangout', 'event'
            ])],
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:50',
            'type' => 'required|in:debit,credit',
            'amount' => 'required'
        ];
    }
}
