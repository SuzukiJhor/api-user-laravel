<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserFormRequest extends FormRequest
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
        $id = $this->id ?? '';

         $rules =  [
            'name' => 'required|string|max:255', 
            'password' => 'required|string|min:8', 
            'email' => 'required|email|unique:users,email|max:255', 
        ];

        // if ($this->method('PUT')) {
        //     $rules['password'] = [
        //         'nullable',
        //         'min:8',
        //         'max:15',
        //     ];
        // }

        return $rules;
    }
}
