<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    protected $errorBag = 'changePasswordErrors';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function attributes ()
    {
        return [
            'currentpassword' => 'CURRENT PASSWORD',
            'newpassword' => 'NEW PASSWORD',
            'newpassword_confirmation' => 'PASSWORD CONFIRMATION',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'currentpassword' => ['required', 'current_password:web'],
            'newpassword' => ['required', 'string', 'confirmed', 'min:3', 'max:255'],
            'newpassword_confirmation' => ['required'],
        ];
    }
}
