<?php

namespace App\Http\Requests\Worker;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|alpha',
            'username'=>'required|string|alpha',
            'email'=>'required|email',
            'age'=>'nullable|integer',
            'description'=>'nullable|string|max:50',
            'is_married'=>'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'Имя обязательно',
            'name.string'=>'Имя должно быть строкой',
            'name.alpha'=>'Имя должно содержать только буквы',

            'username.required'=>'Фамилия обязательна',
            'username.string'=>'Фамилия должна быть строкой',
            'username.alpha'=>'Фамилия должна содержать только буквы',

            'email.required'=>'Email обязателен',
            'email.email'=>'Email должен быть формата email',

            'age.integer'=>'Возраст должен быть числом',


            'description.string'=>'Описание должно быть строкой',
            'description.max'=>'Описание должно быть не больше 50 символов',

            'is_married.boolean'=>'Значение должно быть логическим',
        ];
    }
}
