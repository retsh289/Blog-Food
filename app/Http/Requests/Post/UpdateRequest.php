<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|unique:post,title,'.$this->id,
            'description'=>'required',
            'content'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter your name!',
            'title.unique' => 'Username already exites!',
            'description.required'=>'Please enter description!',
            'content.required'=>'Please enter content!'
        ];
    }
}
