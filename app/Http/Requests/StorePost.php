<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->isMethod('put') || $this->isMethod('patch')) {
            $post = $this->route('post');

            return $post && $this->user()->can('update', $post);
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
            'title' => 'required|max:200',
            'subtitle' => 'nullable|max:300',
            'slug' => 'required|max:500',
            'content' => 'required|string',
            'category' => 'required',
            'tags' => 'nullable|max:500',
            'cover' => 'nullable',
            'privacy' => 'required|in:public,private',
            'status' => 'required|in:published,draft',
        ];
    }
}
