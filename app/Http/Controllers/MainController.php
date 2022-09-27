<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Requests\SubscribeRequest;
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

    public function subscribe(SubscribeRequest $subscribeRequest)
    {
        $success =  Session::get('locale') === 'arm'
            ? 'Շնորհակալություն բաժանորդագրվելու համար'
            : 'Thank you for subscribing';
        Subscribe::query()->create($subscribeRequest->validated());

        return ['message' => $success, 'success' => true];

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

        if (Session::get('locale') === 'en') {
            $time    = str_ireplace(
                ['Առավոտյան', 'Ցերեկային', 'Երեկոյան', 'ժամեր'],
                ['Morning', 'Daytime', 'Evening', 'hours'],
                $time);
            $subject = "Sign In";
        }

        $mon       = 3;
        $month_fee = '30 000';
        if ($course_type === 'Full Stack Web Development') {
            $course = 'Html, Css Responsive design, Bootstrap JavaScript,
             jQuery, Ajax PHP, MySQL, OOP MVC, Laravel(additional)';
            $mon    = 6;

        } elseif ($course_type === 'Front-End React Web Development') {
            $course = 'Html, CSS,Responsive design, Bootstrap,JavaScript, OOP, jQuery,React.js';

        } else {
            $course    = 'Php, OOP,Ajax, MySQL,MVC,Laravel(additional)';
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

        $success =  Session::get('locale') === 'arm'
            ? 'Դուք հաջողությամբ գրանցվել եք։  ՈՒղարկվել է հաղորդագրություն Ձեր էլ․ հասցեին '
            : 'You signed successfully,we sent message to your email';

        return ['msg' => $success, 'success' => true];

    }
}