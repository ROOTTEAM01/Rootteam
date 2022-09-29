<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\Subscribe;
use App\Models\Student;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function sendmail(Request $r)
    {

        $messages = [
            'required' => __('main_lang.require'),
            'email'    => __('main_lang.invalid_email'),
        ];

        $validator = Validator::make($r->all(), [
            'email'   => 'required|email',
            'name'    => 'required',
            'message' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return ['message' => $validator->errors(), 'success' => false];
        } else {
            Mail::send([], [], function ($message) use ($r) {
                $message->to('colibrilabcenter@gmail.com')
                    ->subject('Message to Colibrilab')
                    ->from($r->email, $r->name)
                    ->setBody("name {$r->name}<br>email - {$r->email}<br>message - {$r->message}", 'text/html');
            });
            return ['message' => __('main_lang.success'), 'success' => true];
        }
    }

    public function subscribe(Request $r)
    {
        $lang = Session::get('locale');

        if ($lang == 'arm') {
            $invalid_email = "Գոյություն չունեցող էլ․հասցե";
            $require       = "Լրացրեք դաշտը";
            $success       = 'Շնորհակալություն բաժանորդագրվելու համար';
            $already       = "Դուք արդեն բաժանանորդագրվել եք։";
        } else {
            $invalid_email = "Invalid email address";
            $require       = "Please enter a value";
            $success       = 'Thank you for subscribing';
            $already       = 'You already subscribed';
        }
        $messages  = [
            'required' => $require,
            'email'    => $invalid_email,
            'unique'   => $already
        ];
        $email     = $r->email;
        $validator = Validator::make($r->all(), [
            'email' => 'required|email|unique:subscribe,email'
        ], $messages);


        if ($validator->fails()) {
            $errors = $validator->errors();
            return ['message' => $errors, 'success' => false];
        } else {
            $model        = new Subscribe;
            $model->email = $email;
            $model->save();
            return ['message' => $success, 'success' => true];
        }

    }

    public function register(StudentRequest $studentRequest)
    {

        $all_terms = $studentRequest->morningtime . ':' . $studentRequest->daytime . ':' . $studentRequest->eveningtime;

        Student::query()->create($studentRequest->validated() + ['agree_term' => $all_terms]);

        $course_type = $studentRequest->course_type;
        $time        = "";
        if ($studentRequest->morningtime === 'true') {
            $time .= "Առավոտյան,";
        }
        if ($studentRequest->daytime === 'true') {
            $time .= "Ցերեկային,";
        }
        if ($studentRequest->eveningtime === 'true') {
            $time .= "Երեկոյան";
        }
        $time    = trim($time, ',');
        $time    .= ' ժամեր';
        $subject = "Գրանցում";
        $success = 'Դուք հաջողությամբ գրանցվել եք։  <br>
                    ՈՒղարկվել է հաղորդագրություն Ձեր էլ․ հասցեին ';
        if (Session::get('locale') === 'en') {
            $time    = str_ireplace(
                ['Առավոտյան', 'Ցերեկային', 'Երեկոյան', 'ժամեր'],
                ['Morning', 'Daytime', 'Evening', 'hours'],
                $time);
            $subject = "Sign In";
            $success = 'You signed successfully,we sent message to your email';
        }

        $mon       = 3;
        $month_fee = '30 000';
        if ($course_type === 'Full Stack Node Development') {
            $course = 'Html, Css Responsive design, Bootstrap JavaScript, jQuery, Ajax Node.js MongoDB';
            $mon    = 5;

        } elseif ($course_type === 'Full Stack PHP Development') {
            $course = 'Html, Css Responsive design, Bootstrap JavaScript,
                       jQuery, Ajax, PHP, MySQL, OOP MVC, Laravel(additional)';

        } elseif ($course_type === 'Full Stack Python Development') {
            $course    = 'Html, Css Responsive design, Bootstrap, JavaScript, jQuery, Ajax,
                          Python, MongoDB, Diango';
            $mon    = 6;

        } elseif ($course_type === 'Front-End React Development') {
            $course    = 'Html, Css Responsive design, Bootstrap, JavaScript, OOP, jQuery,
                          React.js, Redux';
            $mon    = 5;
        }
        elseif ($course_type === 'Back-End Php Development') {
            $course    = 'Php, OOP, Ajax, MySQL, MVC, Laravel(additional)';
            $month_fee = '40 000';
        }
        $data = $studentRequest->validated() +
            [
                'course'      => $course,
                'month_fee'   => $month_fee,
                'time'        => $time,
                'course_type' => $course_type,
                'mon'         => $mon
            ];


        Mail::send('email', $data, function ($message) use ($studentRequest, $subject) {
            $message->to($studentRequest->email, 'Colibrilab')->subject
            ($subject);
            $message->from('info@colibrilab.am', 'Colibrilab');
        });

        Mail::send('email_to_us', $data, function ($message) use ($subject) {
            $message->to('colibrilabcenter@gmail.com', 'Colibrilab')->subject
            ($subject);
            $message->from('info@colibrilab.am', 'Colibrilab');
        });
        if (count(Mail::failures()) > 0) {
            foreach (Mail::failures() as $email_failurs) {
                return ['msg' => $email_failurs, 'success' => false];
            }
        }

        return ['msg' => $success, 'success' => true];

    }
}