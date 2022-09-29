<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class SubscribeRequest extends FormRequest
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
            'email' => 'required|email|unique:subscribers,email'
        ];
    }

    public function messages()
    {

        if (Session::get('locale') === 'arm') {
            $invalid_email = "Գոյություն չունեցող էլ․հասցե";
            $require       = "Լրացրեք դաշտը";
            $already       = "Դուք արդեն բաժանանորդագրվել եք։";
        } else {
            $invalid_email = "Invalid email address";
            $require       = "Please enter a value";
            $already       = 'You already subscribed';
        }
        return [
            'required' => $require,
            'email'    => $invalid_email,
            'unique'   => $already
        ];

    }
}
