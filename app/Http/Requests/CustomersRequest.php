<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomersRequest extends FormRequest
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
            'name' => 'required|max 50',
            'phone' => 'required|max 15',
            'mailindex' => 'max 15',
            'city' => 'required|max 30',
            'adress' => 'required|max 30',
            'comments' => 'max 255',            
        ];
    }
}
