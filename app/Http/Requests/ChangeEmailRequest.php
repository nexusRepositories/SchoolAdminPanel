<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ChangeEmailRequest extends FormRequest
{
    protected $errorBag = 'changeEmailErrors';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'emailaddress' => 'EMAIL',
            'confirmemailpassword' => 'PASSWORD',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $user = auth()->user();
        return [
            'emailaddress' => ['string', 'email', 'max:25', Rule::unique('users', 'email')->ignore($user)],
            'confirmemailpassword' => ['required', 'current_password:web'],
        ];
    }
}
