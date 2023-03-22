<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'image'=>'required',
            'name'=>'required|unique:category,name',
            'intro'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter your name!',
            'name.unique' => 'Username already exites!',
            'image.required' => 'Please upload your image!',
            'intro.required'=>'Please enter intro!'
        ];
    }
}
