<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class UserFormRequest extends FormRequest
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

            'name' => [
                'required',
                'max:255',
            ],
            'provider_id' => [
                'required',
                'required',
            ],
            'email' => [
                'email',
                Rule::unique(User::class)->ignore($this->user->id ?? null),
            ],
            'phone' => [
                'nullable',
                'max:255',
            ],
            'password' => [
                'required', Rules\Password::defaults(),
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
