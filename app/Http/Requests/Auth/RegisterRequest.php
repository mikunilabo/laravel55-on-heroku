<?php

namespace App\Http\Requests\Auth;

class RegisterRequest extends AuthRequest
{
    /**
     * Create a new request instance.
     *
     * @return mixed
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return boolean
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string|max:191',
            'email'    => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|max:16|confirmed',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * {@inheritDoc}
     * @see \Illuminate\Foundation\Http\FormRequest::messages()
     */
    public function messages(): array
    {
        return [
            //
        ];
    }

}
