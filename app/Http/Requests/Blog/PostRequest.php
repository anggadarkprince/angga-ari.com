<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
        $postId = optional($this->route('post'))->id;

        return [
            'title' => 'required|max:200',
            'subtitle' => 'nullable|max:300',
            'slug' => [
                'required',
                'max:300',
                'regex:/^[A-Za-z0-9_-]+$/',
                Rule::unique('posts', 'slug')->ignore($postId)
            ],
            'content' => 'required|string|max:10000',
            'category' => 'required',
            'tags' => 'nullable|max:500',
            'cover' => 'nullable',
            'privacy' => 'required|in:public,private',
            'status' => 'required|in:published,draft',
        ];
    }
}
