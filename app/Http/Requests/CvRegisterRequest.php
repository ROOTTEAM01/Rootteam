<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvRegisterRequest extends FormRequest
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
            'email'     => 'required|email|unique:cv_students,email',
            'password'  => 'required|min:6|same:pass_conf',
            'pass_conf' => 'required',
            'agree'     => 'accepted',
        ];
    }

    public function messages()
    {
        return [
            'password.required'  => __('cv_lang.pass_required'),
            'password.same'      => __('cv_lang.pass_same'),
            'password.min'       => __('cv_lang.pass_min'),
            'email.required'     => __('cv_lang.email_required'),
            'email.email'        => __('cv_lang.email_email'),
            'email.unique'       => __('cv_lang.email_unique'),
            'agree'              => __('cv_lang.agree'),
            'pass_conf.required' => __('cv_lang.pass_conf_required'),
        ];
    }
}
