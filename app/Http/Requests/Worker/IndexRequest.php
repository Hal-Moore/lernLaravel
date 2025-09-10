<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'name'=>'nullable|string|alpha',
            'username'=>'nullable|string|alpha',
            'email'=>'nullable|email',
            'from'=>'nullable|integer',
            'to'=>'nullable|integer',
            'description'=>'nullable|string|max:50',
            'is_married'=>'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'from.integer'=>'Значение "от" должно быть числом',
            'to.integer'=>'Значение "до" должно быть числом',
        ];
    }
}
