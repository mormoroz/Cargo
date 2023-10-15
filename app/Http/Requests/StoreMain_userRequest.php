<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMain_userRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'patronymic',
            'email' => 'required',
            'password' => 'required|min:3|max:20',
            'phone_number'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Поле имя является обязательным',
            'last_name.required' => 'Поле фамилия является обязательным',
            'patronymic.required' => 'Поле отчество является обязательным',
            'phone_number.required' => 'Поле номер телефона является обязательным',
            'email.required' => 'Поле email является обязательным',
            'email.unique' => 'Пользователь с таким адресом электронной почты уже зарегистрирован',
            'email.email' => 'Email должен быть действительным адресом электронной почты',
            'password.required' => 'Поле пароль является обязательным',
            'password.max' => 'Пароль должен быть не более 20 символов',
            'password-repeat.required' => 'Поле пароль является обязательным',
        ];
    }
}
