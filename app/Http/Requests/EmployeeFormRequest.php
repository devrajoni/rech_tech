<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeFormRequest extends FormRequest
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

    public function rules()
    {
        return [

            'first_name' => [
                'required',
                'max:255',
            ],
            'last_name' => [
                'required',
                'max:255',
            ],
            'provider_id' => [
                'required',
                'required',
            ],
            'email' => [
                'email',
                'unique:employees,email,'.$this->employee->id,
            ],
            'phone' => [
                'nullable',
                'max:255',
            ],
            'password' => [
                'nullable',
            ],
            'gender' => [
                'nullable',
                'max:255',
            ],
            'role_id' => [
                'required',
                'max:255',
            ],
        ];
    }
}
