<?php

namespace App\Http\Controllers;

use App\Http\Requests\CvRegisterRequest;
use App\Http\Requests\ExperianceRequest;
use App\Models\Prog_lang;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\CV_student;
use App\Models\Education;
use App\Models\Language;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Connection;


class CVController extends Controller
{

    public function __construct()
    {
        if (!Session::has('locale')) {
            App::setlocale('arm');
        }


    }

    public function register(CvRegisterRequest $cvRegisterRequest)
    {
        CV_student::query()->create($cvRegisterRequest->validated());
        return ['message' => __('cv_lang.success'), 'success' => true];
    }

    public function login(Request $request)
    {
        $messages  = [
            'pass.required'  => __('cv_lang.pass_required'),
            'email.required' => __('cv_lang.email_required'),
            'email.email'    => __('cv_lang.email_email'),
        ];
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'pass'  => 'required',
        ], $messages);


        $user = CV_student::where(['email' => $request->email, 'password' => $request->pass])->first();
        $validator->after(function ($validator) use ($user) {
            if (!$user) {
                $validator->errors()->add('error', __('cv_lang.fail'));
            }
        });

        if ($validator->fails()) {
            $errors = $validator->errors();
            return ['message' => $errors, 'success' => false];
        }

        Session::put('id', $user->id);
        return ['message' => $user->id, 'success' => true];
    }

    public function show_cv_form()
    {
        $id = Session::get('id') ?? false;
        if (!$id) {
            return view('cv.must_login');
        }
        $data = CV_student::find($id);

        //translate education months names

        $count = count($data->education);
        if ($count > 0) {
            for ($i = 0; $i < $count; $i++) {
                $data->education[$i]->begin_month = $this->translate($data->education[$i]->begin_month);
                $data->education[$i]->end_month   = $this->translate($data->education[$i]->end_month);
            }
        }

        //translate experience months names

        $count = count($data->experience);
        if ($count > 0) {
            for ($i = 0; $i < $count; $i++) {
                $data->experience[$i]->start_month = $this->translate($data->experience[$i]->start_month);
                $data->experience[$i]->end_month   = $this->translate($data->experience[$i]->end_month);
            }
        }
        ////////////////////////////////

        $prog_languages = Prog_lang::orderBy('name', 'asc')->get();
        return view('cv.create_cv', [
            'data'           => $data,
            'prog_languages' => $prog_languages,
            'months'         => __('cv_lang.months'),
            'lang'           => Session::get('locale')
        ]);
    }

    public function add_skill(Request $r)
    {
        $student_id = Session::get('id');
        $skill      = Skill::where(['prog_languages_id' => $r->skillId, 'cv_students_id' => $student_id])->first();
        if (!$skill) {
            $skill                    = new Skill;
            $skill->prog_languages_id = $r->skillId;
            $skill->cv_students_id    = $student_id;
            $skill->percent           = $r->skillRange;
            $skill->save();
            return $skill->id;
        }
        return 0;
    }

    public function update_skill(Request $request)
    {
        Skill::where('id', $request->id)->update(['percent' => $request->percent]);
    }

    public function add_education(Request $r)
    {

        $validator = Validator::make($r->all(), [
            'specialization' => 'required',
            'education'      => 'required',
        ]);

        $starttime = mktime(0, 0, 0, array_search($r->begin_month, __('cv_lang.months')), 0, $r->begin_year);

        $end_year = $r->end_year;
        if ($r->end_month == __('cv_lang.months')[0]) {
            $endtime  = time();
            $end_year = null;
        } else {
            $endtime = mktime(0, 0, 0, array_search($r->end_month, __('cv_lang.months')), 0, $r->end_year);
        }


        $outofrange = ($starttime >= $endtime);
        $validator->after(function ($validator) use ($outofrange) {
            if ($outofrange) {
                $validator->errors()->add('error', __('cv_lang.date_error'));
            }
        });
        if ($validator->fails()) {
            $errors = $validator->errors();
            return ['message' => $errors, 'success' => false];
        }

        $ed                 = new Education;
        $ed->specialization = $r->specialization;
        $ed->education      = $r->education;
        $ed->description    = $r->description;
        $ed->begin_month    = $r->begin_month;
        $ed->begin_year     = $r->begin_year;
        $ed->end_month      = $r->end_month;
        $ed->end_year       = $end_year;
        $ed->cv_students_id = Session::get('id');
        $ed->save();

        return [
            'id'      => $ed->id,
            'nd_year' => $end_year,
            'success' => true
        ];

    }

    public function update_education(Request $r)
    {

        $validator = Validator::make($r->all(), [
            'specialization' => 'required',
            'education'      => 'required',
        ]);

        $starttime = mktime(0, 0, 0, array_search($r->begin_month, __('cv_lang.months')), 0, $r->begin_year);

        $end_year = $r->end_year;
        if ($r->end_month == __('cv_lang.months')[0]) {
            $endtime  = time();
            $end_year = null;
        } else {
            $endtime = mktime(0, 0, 0, array_search($r->end_month, __('cv_lang.months')), 0, $r->end_year);
        }


        $outofrange = ($starttime >= $endtime);

        $validator->after(function ($validator) use ($outofrange) {
            if ($outofrange) {
                $validator->errors()->add('error', __('cv_lang.date_error'));
            }
        });
        if ($validator->fails()) {
            $errors = $validator->errors();
            return ['message' => $errors, 'success' => false];
        }
        // $validator = Validator::make($r->all(),[
        //      'specialization' => 'required',
        //      'education' => 'required',
        //   ]);
        //   $starttime=mktime(0,0,0,$r->begin_month,0,$r->begin_year);
        //   $endtime=mktime(0,0,0,$r->end_month,0,$r->end_year);
        //   $end_year=$r->end_year;
        //   if($r->end_month==13){
        //      $endtime=time();
        //      $end_year='';
        //   }
        //   $outofrange=($starttime>=$endtime);
        //   $validator->after(function($validator) use ($outofrange) {
        //       if ($outofrange) {
        //         $validator->errors()->add('error', 'end date must be greater than start date');
        //       }
        //   });
        //   if ($validator->fails()){
        //      $errors = $validator->errors();
        //      return ['message'=>$errors,'success'=>false];
        // }
        $ed                 = Education::find($r->id);
        $ed->specialization = $r->specialization;
        $ed->education      = $r->education;
        $ed->description    = $r->description;
        $ed->begin_month    = $r->begin_month;
        $ed->begin_year     = $r->begin_year;
        $ed->end_month      = $r->end_month;
        $ed->end_year       = $end_year;
        $ed->save();

    }

    public function add_language(Request $request)
    {
        $lang = Language::where([
            'cv_students_id' => Session::get('id'),
            'language'       => $request->languagepick
        ])->first();

        if (!$lang) {
            return Language::query()->create(
                [
                    'language'       => $request->languagepick,
                    'level'          => $request->levelpick,
                    'cv_students_id' => Session::get('id'),
                ],
            );
        }
        return 0;
    }

    public function update_language(Request $request)
    {
        Language::where('id', $request->id)->update(['level' => $request->level]);
    }

    public function add_experiance(ExperianceRequest $createRequest)
    {
        $newExperience = Experience::create($createRequest->validated() +
            ['cv_students_id' => Session::get('id')]);

        return [
            'id'       => $newExperience->id,
            'end_year' => $newExperience->end_year,
            'success'  => true
        ];
    }

    public function update_experiance(ExperianceRequest $updateRequest)
    {
        Experience::where('id', $updateRequest->exper_id)->update(
            Arr::except($updateRequest->validated(), ['outofrange'])
        );
        return ['success' => true];
    }

    private function validate_cv(Request $r)
    {
        $messages = [
            'required'       => __('main_lang.require'),
            'email'          => __('main_lang.invalid_email'),
            'facebook.regex' => __('cv_lang.facebook'),
            'linkedin.regex' => __('cv_lang.linkedin'),
            'twitter.regex'  => __('cv_lang.twitter'),
            'dribble.regex'  => __('cv_lang.dribble'),
            'github.regex'   => __('cv_lang.github'),
            'behance.regex'  => __('cv_lang.behance'),
        ];

        $validator = Validator::make($r->all(), [
            'name'       => 'required',
            'profession' => 'required',
            'email'      => 'required|email',
            'about_me'   => 'required',
            'address'    => 'required',
            'phone'      => 'required',
            'facebook'   => 'nullable|regex:/https:\/\/www.facebook.com.*/',
            'linkedin'   => 'nullable|regex:/https:\/\/www.linkedin.com.*/',
            'twitter'    => 'nullable|regex:/https:\/\/twitter.com.*/',
            'dribble'    => 'nullable|regex:/https:\/\/dribbble.com.*/',
            'github'     => 'nullable|regex:/https:\/\/github.com.*/',
            'behance'    => 'nullable|regex:/https:\/\/www.behance.net.*/',
        ], $messages);

        $conn       = 0;
        $education  = 0;
        $skills     = 0;
        $language   = 0;
        $experience = 0;
        if (
            !empty($r->facebook) || !empty($r->linkedin) ||
            !empty($r->twitter) || !empty($r->dribble) ||
            !empty($r->github) || !empty($r->behance)) {
            $conn = 1;
        }

        $student = CV_student::find(Session::get('id'));

        if (count($student->education) > 0) {
            $education = 1;
        }
        if (count($student->skills) > 0) {
            $skills = 1;
        }
        if (count($student->language) > 0) {
            $language = 1;
        }
        if (count($student->experience) > 0) {
            $experience = 1;
        }


        $validator->after(function ($validator) use ($conn, $education, $skills, $language, $experience) {
            if (!$conn) {
                $validator->errors()->add('networks', __('cv_lang.network_error'));
            }
            if (!$education) {
                $validator->errors()->add('education', __('cv_lang.education_error'));
            }
            if (!$skills) {
                $validator->errors()->add('skills', __('cv_lang.skills_error'));
            }
            if (!$language) {
                $validator->errors()->add('language', __('cv_lang.language_error'));
            }
            if (!$experience) {
                $validator->errors()->add('experience', __('cv_lang.experience_error'));
            }
        });


        if ($validator->fails()) {
            $errors = $validator->errors();
            return ['message' => $errors, 'success' => false];
        }
        return ['success' => true];
    }

    public function do_form(Request $r)
    {
        //echo($r->published);die;
        $validated = $this->validate_cv($r);
        if ($validated['success'] == false) {
            return $validated;
        }

        $st_id          = Session::get('id');
        $stud           = CV_student::find($st_id);
        $stud->name     = $r->name;
        $stud->phone    = $r->phone;
        $stud->address  = $r->address;
        $stud->cv_email = $r->email;
        $stud->about_me = $r->about_me;
        if ($r->published == 'true') {
            $stud->published = 1;
        } else {
            $stud->published = 0;
        }
        $stud->profession = $r->profession;
        $stud->save();

        $conn           = Connection::firstOrNew(['cv_students_id' => $st_id]);
        $conn->behance  = $r->behance;
        $conn->dribble  = $r->dribble;
        $conn->facebook = $r->facebook;
        $conn->github   = $r->github;
        $conn->linkedin = $r->linkedin;
        $conn->twitter  = $r->twitter;
        $conn->save();
        return ['success' => true, 'id' => $st_id];
    }

    public function add_image(Request $r)
    {
        $st_id     = Session::get('id');
        $extension = $r->img->extension();
        Session::put('img_ext', $extension);
        $validator = Validator::make($r->all(), [
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if (!($validator->fails())) {
            $imageName = '_' . $st_id . '.' . $extension;
            $r->img->move(public_path('images/cv_images'), $imageName);
            $stud        = CV_student::find($st_id);
            $stud->image = $imageName;
            $stud->save();
        }

    }

    public function del_skill(Request $request)
    {
        Skill::find($request->id)->delete();
    }

    public function del_education(Request $request)
    {
        Education::find($request->id)->delete();
        return 'true';
    }

    public function del_language(Request $request)
    {
        Language::find($request->id)->delete();
    }

    public function del_experience(Request $request)
    {
        Experience::find($request->id)->delete();

    }

    public function show_cv($id = null)
    {

        $user = CV_student::find($id);

        if (!$user) {
            return '<h1>404<h1>';
        }
        $session_id = Session::get('id');

        if (!$session_id || $session_id != $id) {
            if (!$user->published) {
                return '<h1>CV is not published<h1>';
            }
        }
        return view('my_cv', ['data' => $user]);

    }

    private function translate($mon)
    {
        $months = [
            "Until now" => "Մինչ այժմ",
            "January"   => "Հունվար",
            "February"  => "Փետրվար",
            "March"     => "Մարտ",
            "April"     => "Ապրիլ",
            "May"       => "Մայիս",
            "June"      => "Հունիս",
            "July"      => "Հուլիս",
            "August"    => "Օգոստոս",
            "September" => "Սեպտեմբեր",
            "October"   => "Հոկտեմբեր",
            "November"  => "Նոյեմբեր",
            "December"  => "Դեկտեմբեր"
        ];
        $lang   = Session::get('locale');
        if ($lang == 'arm') {
            if (in_array($mon, $months)) {
                return $mon;
            }
            return $months[$mon];

        } else {
            if (array_key_exists($mon, $months)) {
                return $mon;
            }
            $months = array_flip($months);
            return $months[$mon];
        }


    }

}
