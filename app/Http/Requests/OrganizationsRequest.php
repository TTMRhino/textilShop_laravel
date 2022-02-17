<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationsRequest extends FormRequest
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
            'name' => 'max:100',
            'inn' => 'max:25',
            'ogrn' => 'max:30',
            'kpp' => 'max:30',
            'adres_registr' => 'max:100',
            'pay_account' => 'max:100',
            'kor_account' => 'max:100',
            'bik_bank' => 'max:100',
            'bank_name' => 'max:50',            
        ];
    }
}
