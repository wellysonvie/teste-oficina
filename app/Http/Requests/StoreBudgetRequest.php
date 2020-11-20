<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBudgetRequest extends FormRequest
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
        return [
            'client' => 'required|max:255',
            'seller' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'client.required' => 'O nome do cliente não pode ser vazio',
            'client.max' => 'O nome do cliente não deve conter mais de 255 caracteres',
            'seller.required' => 'O nome do vendedor não pode ser vazio',
            'seller.max' => 'O nome do vendedor não deve conter mais de 255 caracteres',
            'description.required' => 'A descrição não pode ser vazia',
            'price.required' => 'O preço não pode ser vazio',
        ];
    }
}
