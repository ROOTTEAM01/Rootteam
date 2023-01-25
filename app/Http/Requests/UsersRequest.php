<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class UsersRequest extends FormRequest
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
        // return [
        //     'course_type'  => 'string|required',
        //     'full_name'    => 'string|required',
        //     'confirm_type' => 'string|required',
        //     'comment'      => 'min:3|max:5000',
        //     'agree_term',
        //     'email'        => 'email|unique:students,email',
        //     'age'          => 'numeric|min:10|max:55',
        //     'phone'        => 'regex:~^\+?[0-9 \-]+$~'
        // ];


        return [
            'name'     => 'string|required',
            'email'    => 'email|unique:users,email',
//            'type'     => 'required|in:user,student',
//            'password' => 'required|confirmed',
//            'password_confirmation' => 'required| min:4'
        ];
    }

    public function messages()
    {
        if (Session::get('locale') === 'arm') {
            $invalid_email = "Գոյություն չունեցող էլ․հասցե";
            $already       = "Նշված էլ․ հասցեով դուք արդեն գրանցվել եք";
            $age           = "Տարիքի դաշտում մուտքագրվածը թիվ չէ ";
            $phone         = "Հեռախոսահամարի դաշտը ճիշտ նշված չէ";
            $age_minmax    = "Տարիքը պետք է լինի 10-ից 55 սահմաններում";
        } elseif (Session::get('locale') === 'en' || empty(Session::get('locale'))) {
            $invalid_email = "Invalid email address";
            $already       = 'You have already registered at the specified email address';
            $age           = "The age field must be a number";
            $phone         = "The phone field is not specified correctly";
            $age_minmax    = "The age must be between 10 and 55";
        }

        return [
            'age.numeric'  => $age,
            'age.min'      => $age_minmax,
            'age.max'      => $age_minmax,
            'email.email'  => $invalid_email,
            'email.unique' => $already,
            'phone.regex'  => $phone,
        ];


    }
}