<?php

namespace App\Http\Requests\User;

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
            'name'=>'required',
            'username'=>'required|unique:user,username',
            'email'=>'required|unique:user,email',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your name!',
            'username.required' => 'Please enter your username!',
            'username.unique' => 'Username already exites!',
            'email.required' => 'Please enter your email!',
            'email.unique' => 'Email already exites!',
            'password'=> 'Please enter your password!'
        ];
    }
}
