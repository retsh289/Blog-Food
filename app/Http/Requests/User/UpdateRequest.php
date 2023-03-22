<?php

namespace App\Http\Requests\User;

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
            'name'=>'required',
            'email'=>'required|unique:user,email,'.$this -> id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name!',
            'email.required' => 'Please enter your email!',
            'email.unique' => 'Email already exites!',
        ];
    }
}
