<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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

    public function attributes()
    {
        return [
            'url' => 'PHOTO',
            'first_name' => 'FIRST NAME',
            'last_name' => 'LAST NAME',
            'phone' => 'PHONE',
            // 'birthday' => 'BIRTHDAY'
            // 'country' => 'COUNTRY',
            // 'city' => 'CITY'
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
            'url' => 'mimes:png,jpg,jpeg|max:3072',
            'userpic_delete_flag' => 'boolean',
            'first_name' => 'required|string|min:1|max:80',
            'last_name' => 'required|string|min:1|max:80',
            'phone' => 'required|max:13',
            // 'birthday' => 'required'
            // 'country' => 'required|min:1',
            // 'city' => 'required|min:1'
        ];
    }
}
