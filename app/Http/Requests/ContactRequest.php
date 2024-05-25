<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
               'captcha'   => 'required|captcha',
               'name'       => 'required',
               'email'      => 'required|email',
               'phone'      => 'required|numeric|digits:10',
               'message'    => 'required'
        ];
    }
    public function messages()
    {
    return ['captcha.captcha' => 'Invalid captcha values'];
    }
}
