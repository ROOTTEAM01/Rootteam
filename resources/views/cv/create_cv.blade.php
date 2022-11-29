<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>{{__('cv_lang.create')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
        crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"
        integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{asset('cv/style/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cv/style/cropper_style.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style type="text/css">
.redstar {
    color: red;
}
</style>

<body>
    <h1 class="cv">{{__('cv_lang.create')}}</h1>
    <header class="header">
        <div class="header-heigth">
            <div>
                <img src="{{asset('cv/images/cv_icon.png')}}">
                <p class="info">{{__('cv_lang.personalinfo')}}</p>
            </div>
            <nav class="nav">
                <p class="nav_p">{{__('cv_lang.cvlanguage')}}</p>

                @php

                if($lang=='arm'){
                $enselected="";
                $armselected="selected";
                }
                else{
                $enselected="selected";
                $armselected="";
                }
                @endphp
                <select class="setlang" value="ARM">
                    <option value="en" {{$enselected}}>English</option>
                    <option value="arm" {{$armselected}}>Հայերեն</option>
                </select>
            </nav>
        </div>
        <div class="photo">
            <div class="bio">
                <div class="add1">
                    <form enctype="multipart/form-data">
                        <?php
				           if(!empty($data->image)){
                               $src=asset('cv/images/users/'.$data->image);
                              
                           }
                           else{
                               $src=asset('cv/images/add_photo.png');
                              
                               }
                        ?>
                        <label for=file1 class="chose-photo">
                            <img id="new_img" class="add_img" src="{{$src}}" alt="" wid>
                            <p>{{__('cv_lang.addphoto')}}</p>
                            <input type=file id="file1" name="img" class="image" style="display:none">
                            <input type="button" id="new_image" class="foto" style="display:none" />
                        </label>
                    </form>


                </div>
            </div>
            <div class="pers-input">
                <label>{{__('cv_lang.name')}}<span class="redstar">*</span></label>
                <input type="text" id="name" value="{{$data->name}}">
                <label>{{__('cv_lang.profession')}}<span class="redstar">*</span></label>
                <input type="text" value="{{$data->profession}}" id="profession"
                    placeholder="{{__('cv_lang.programmer')}}">
            </div>
        </div>
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Laravel Crop Image Before Upload using Cropper JS -
                            NiceSnippets.com</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="img-container">
                            <div class="row">
                                <div class="col-md-8">
                                    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                </div>
                                <div class="col-md-4">
                                    <div class="preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="crop">Crop</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="textar">
            <label>{{__('cv_lang.aboutme')}}<span class="redstar">*</span></label>
            <textarea id="about_me" value="{{$data->about_me}}"
                placeholder="{{__('cv_lang.introduce')}}">{{$data->about_me}}</textarea>
        </div>
    </header>
    <main class="main">
        <div id="skill">
            <div class="add-skill">
                <p>{{__('cv_lang.skills')}}</p><span id="skill_error" class="errors"></span>
                <img class="arrow1" src="{{asset('cv/images/arrow.png')}}">
            </div>
        </div>
        <div id="ready_skills">
            @if(count($data->skills))
            @foreach($data->skills as $skill)
            <div class="skill-method" id='{{$skill->id}}'>
                <div class="skill-left">
                    <div>
                        <label class="skill-name">{{$skill->prog_lang->name}}</label>
                        <label class="slider_value">{{$skill->percent}}%</label>
                    </div>
                    <div class="skill-input">
                        <input type="range" class="pracent gdas-range" disabled>
                    </div>
                </div>
                <div class="skill-right">
                    <div>
                        <img class="delete-range" src="{{asset('cv/images/delete.png')}}">
                        <img class="edit-range" src="{{asset('cv/images/edit.png')}}">
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>
        <div class="skill-body">
            <div class="body_left">
                <div>
                    <label>{{__('cv_lang.skill')}}</label>
                    <select class="skillinput">
                        @foreach($prog_languages as $obj)
                        <option value="{{$obj->id}}">{{$obj->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="body-skill-right">

                <div class="skill-label">
                    <label>{{__('cv_lang.level')}}</label>
                    <label class="slider_value">50%</label>


                </div>
                <input type="range" class="pracent gdas-range" id="skill_percent">
                <div class="button">
                    <button class="delete form-control shadow-none" id="cancel_skill">{{__('cv_lang.cancel')}}</button>
                    <button class="save form-control shadow-none" id="save-skill">{{__('cv_lang.save')}}</button>
                </div>
            </div>
        </div>
        <div class="add-sk">
            <div>
                <button class="skill-button form-control shadow-none">
                    {{--						<img src="{{asset('cv/images/add.png')}}">--}}
                    <p>{{__('cv_lang.anotherskill')}}</p>
                </button>
            </div>
        </div>

    </main>
    <main class="education">
        <div class="edu">
            <p>{{__('cv_lang.education')}}</p><span id="educ_error" class="errors"></span>
            <img class="arrow2" src="{{asset('cv/images/arrow.png')}}">
        </div>
        <div id="educaded">
            @if(count($data->education))
            @foreach($data->education as $ed)
            @php
            $line=($ed->end_year!=null)?'-':'';
            @endphp
            <div class="skill-method-edu" id={{$ed->id}}>
                <div class="skill-left">
                    <div>
                        <h2 class="edu_school">{{$ed->education}}</h2>
                        <h2 class="edu_spec">{{$ed->specialization}}</h2>
                        <p class="edu_desc">{{$ed->description}}</p>
                        <p>
                            <span class="m1">{{$ed->begin_month}}</span><span> - </span><span
                                class="y1">{{$ed->begin_year}}</span> <span
                                class="m2">{{$ed->end_month}}</span><span>{{$line}}</span><span
                                class="y2">{{$ed->end_year}}</span>
                        </p>

                    </div>
                </div>
                <div class="skill-right">
                    <div>
                        <img class="delete_education" src="{{asset('cv/images/delete.png')}}">
                        <img class="edit_education" src="{{asset('cv/images/edit.png')}}">
                    </div>
                </div>
            </div>

            @endforeach
            @endif
        </div>
        <div class="specialization">
            <label>{{__('cv_lang.specialization')}} <span class="redstar">*</span></label>
            <input type="text" id="ed_spec" placeholder="{{__('cv_lang.disigner')}}">
            <label>{{__('cv_lang.schoolhouse')}}<span class="redstar">*</span></label>
            <input type="text" id="ed_school" placeholder="{{__('cv_lang.school')}}">
            <div class="date">
                <div class="start-date">
                    <label>{{__('cv_lang.startdate')}}<span class="redstar">*</span></label>
                    <select id="edu_begin_month">
                        @for($i=1;$i<=12;$i++) <option value={{$months[$i]}}>{{$months[$i]}}</option>
                            @endfor
                    </select>
                    <select class="yearpicker_3">

                    </select>
                </div>
                <div class="end-date">
                    <label>{{__('cv_lang.enddate')}}<span class="redstar">*</span></label>
                    <select id="edu_end_month">
                        @for($i=0;$i<=12;$i++) <option value='{{$months[$i]}}'>{{$months[$i]}}</option>
                            @endfor
                    </select>
                    <select class="yearpicker_4">

                    </select>
                </div>
            </div>
            <div id="edu_date_error"></div>
            <div class="desc">
                <label>{{__('cv_lang.description')}}<span class="redstar">*</span></label>
                <textarea id="descript" placeholder="{{__('cv_lang.write_text')}}"></textarea>
                <div class="button">

                    <button id="cancel_education"
                        class="delete form-control shadow-none">{{__('cv_lang.cancel')}}</button>
                    <button class="form-control shadow-none" id="save-ed">{{__('cv_lang.save')}}</button>
                </div>

            </div>
        </div>
        <div class="add-edu">
            <div>
                <button class="skill-button  form-control shadow-none">
                    {{--				<img src="{{asset('cv/images/add.png')}}">--}}
                    <p>{{__('cv_lang.new_education')}}</p>
                </button>
            </div>
        </div>
    </main>
    <main class="language">
        <div class="leng">
            <p>{{__('cv_lang.languages')}}</p><span id="lang_error" class="errors"></span>
            <img class="arrow3" src="{{asset('cv/images/arrow.png')}}">
        </div>
        <div id="added_languages">
            @if(count($data->language)>0)
            @foreach($data->language as $lang)
            <div class="skill-method-lang" id="{{$lang->id}}">
                <div class="skill-left">
                    <div>
                        <p><span class="lang_name">{{$lang->language}}</span><span>&nbsp;-&nbsp;</span><span
                                class="lang_level">{{$lang->level}}</span></p>
                    </div>
                </div>
                <div class="skill-right">
                    <div>
                        <img class="delete_language" src="{{asset('cv/images/delete.png')}}">
                        <img class="upd_language" src="{{asset('cv/images/edit.png')}}">
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="lang-body">
            <div class="lang-lab">
                <label>{{__('cv_lang.language')}}<span class="redstar">*</span></label>
            </div>
            <div class="lang-inp">
                <select name="" id="langaddinglist">
                    <option value="{{__('cv_lang.armenian')}}">{{__('cv_lang.armenian')}}</option>
                    <option value="{{__('cv_lang.russian')}}">{{__('cv_lang.russian')}}</option>
                    <option value="{{__('cv_lang.english')}}">{{__('cv_lang.english')}}</option>
                    <option value="{{__('cv_lang.spain')}}">{{__('cv_lang.spain')}}</option>
                    <option value="{{__('cv_lang.france')}}">{{__('cv_lang.france')}}</option>
                    <option value="{{__('cv_lang.chinesse')}}">{{__('cv_lang.chinesse')}}</option>
                    <option value="{{__('cv_lang.italian')}}">{{__('cv_lang.italian')}}</option>
                    <option value="{{__('cv_lang.greek')}}">{{__('cv_lang.greek')}}</option>
                </select>
                <select id="langlevel">
                    <option>{{__('cv_lang.starter')}}</option>
                    <option>{{__('cv_lang.elementary')}}</option>
                    <option>{{__('cv_lang.pre_intermediate')}}</option>
                    <option>{{__('cv_lang.intermediate')}}</option>
                    <option>{{__('cv_lang.upper_intermediate')}}</option>
                    <option>{{__('cv_lang.advanced')}}</option>
                </select>
            </div>

            <div class="lang-right">
                <div id="del-button">
                    <button class="delete form-control shadow-none" id="cancel_lang">{{__('cv_lang.cancel')}}</button>
                    <button class="save form-control shadow-none" id="save-lang">{{__('cv_lang.save')}}</button>
                </div>
            </div>
        </div>
        <div class="add-leng">
            <div>
                <button class="lang-button">
                    {{--						<img src="{{asset('cv/images/add.png')}}">--}}
                    <p>{{__('cv_lang.anotherlanguage')}}</p>
                </button>
            </div>
        </div>
    </main>
    <main class="experiences">
        <div class="edu">
            <p class="nomargin">{{__('cv_lang.experiences')}}</p><span id="exp_error" class="errors"></span>
            <img class="arrow4" src="{{asset('cv/images/arrow.png')}}">
        </div>
        <div id="ready_experiences">
            @if(count($data->experience))
            @foreach($data->experience as $exp)
            @php
            $line=($exp->end_year!=null)?'-':'';
            @endphp
            <div class="skill-method-ex" id="{{$exp->id}}">
                <div class="skill-left">
                    <div>
                        <h2 class="job_title">{{$exp->job_title}}</h2>
                        <p><span class="comp">{{$exp->company}}</span><span>,</span><span
                                class="st_m">{{$exp->start_month}}</span><span>-</span><span
                                class="st_y">{{$exp->start_year}}</span>
                            <span class="end_m">{{$exp->end_month}}</span><span>{{$line}}</span><span
                                class="end_y">{{$exp->end_year}}</span>
                        </p>
                        <p class="ds">{{$exp->description}}</p>
                    </div>
                </div>
                <div class="skill-right">
                    <div>
                        <img class="delete_experiance" src="{{asset('cv/images/delete.png')}}">
                        <img class="edit_ex" src="{{asset('cv/images/edit.png')}}">
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="specialization-ex">
            <label>{{__('cv_lang.jobtitle')}}<span class="redstar">*</span></label>
            <input type="text" id="exp_title" placeholder="{{__('cv_lang.programmer')}}">
            <label>{{__('cv_lang.company')}}<span class="redstar">*</span></label>
            <input type="text" id="exp_company">
            <div class="date">
                <div class="start-date">
                    <label>{{__('cv_lang.startdate')}}<span class="redstar">*</span></label>
                    <select id="exp_start_mon">
                        @for($i=1;$i<=12;$i++) <option value='{{$months[$i]}}'>{{$months[$i]}}</option>
                            @endfor
                    </select>
                    <select class="yearpicker_1">
                    </select>
                </div>
                <div class="end-date">
                    <label>{{__('cv_lang.enddate')}}<span class="redstar">*</span></label>
                    <select id="exp_end_mon">
                        @for($i=0;$i<=12;$i++) <option value='{{$months[$i]}}'>{{$months[$i]}}</option>
                            @endfor
                    </select>
                    <select class="yearpicker_2">
                    </select>
                </div>
            </div>
            <div id="exp_date_error"></div>
            <div class="desc">
                <label>{{__('cv_lang.description')}}<span class="redstar">*</span></label>
                <textarea id="exp_desc" placeholder="{{__('cv_lang.write_text')}}"></textarea>
                <div class="button">
                    <button class="delete form-control shadow-none" id="cancel-ex">{{__('cv_lang.cancel')}}</button>
                    <button class="save form-control shadow-none" id="save-ex">{{__('cv_lang.save')}}</button>
                </div>
            </div>
        </div>
        <div class="add-ex">
            <div>
                <button class="skill-button form-control shadow-none">
                    {{--						<img src="{{asset('cv/images/add.png')}}">--}}
                    <p>{{__('cv_lang.anotherworkexperience')}}</p>
                </button>
            </div>
        </div>
    </main>
    <main class="contact">
        <div class="cont">
            <p>{{__('cv_lang.contacts')}}</p>

            <img class="arrow5" src="{{asset('cv/images/arrow.png')}}">
        </div>

        <div class="cont-hide">

            <div class="centr_first">
                <div class="leng-input">
                    <label>{{__('cv_lang.adress')}}<span class="redstar">*</span></label>
                    <input type="text" id="address" value="{{$data->address}}">
                </div>
            </div>
            <div class="centr">
                <div class="phone">
                    <label>{{__('cv_lang.phonenumber')}}<span class="redstar">*</span></label>
                    <input type="number" value="{{$data->phone}}" id="phone" placeholder="+374 960000">
                </div>
                <div class="email">
                    <label>{{__('cv_lang.email')}}<span class="redstar">*</span></label>
                    <input type="text" id="email" value="{{$data->cv_email}}">
                </div>
            </div>
        </div>
    </main>
    <main class="connections">

        <div class="con">
            <p>{{__('cv_lang.connections_text')}}</p><span id="connect_error" class="errors"></span>
            <img class="arrow6" src="{{asset('cv/images/arrow.png')}}">
        </div>
        <div class="conn-block">
            <div class="con-block">
                <img src="{{asset('cv/images/facebook.png')}}">
                <label>Facebook link</label>
                <input type="text" id="facebook_url" value="{{$data->connections->facebook??null}}">
            </div>
            <div class="con-block red" id="facebook_error"></div>
            <div class="con-block">
                <img src="{{asset('cv/images/linkedin (1).png')}}">
                <label>LinkedIn link</label>
                <input type="text" id="linkedin_url" value="{{$data->connections->linkedin??null}}">
            </div>
            <div class="con-block red" id="linkedin_error"></div>
            <div class="con-block">
                <img src="{{asset('cv/images/twitter (1).png')}}">
                <label>Twitter link</label>
                <input type="text" id="twitter_url" value="{{$data->connections->twitter??null}}">
            </div>
            <div class="con-block red" id="twitter_error"></div>
            <div class="con-block">

                <img src="{{asset('images/Group31.png')}}">

                <label>Dribble link</label>
                <input type="text" id="dribble_url" value="{{$data->connections->dribble??null}}">
            </div>
            <div class="con-block red" id="dribble_error"></div>
            <div class="con-block">

                <img src="{{asset('images/Github.svg')}}">



                <label>Github link</label>
                <input type="text" id="github_url" value="{{$data->connections->github??null}}">
            </div>
            <div class="con-block red" id="github_error"></div>
            <div class="con-block">

                <img src="{{asset('images/behance-logo.png')}}">
                <label>Behance link</label>
                <input type="text" id="behance_url" value="{{$data->connections->behance??null}}">
            </div>
            <div class="con-block red" id="behance_error"></div>
        </div>
    </main>
    <div id="footer">
        <div class="footchek">
            <input type="checkbox" id="checkbox_id">
            <div class="text">
                <h3>{{__('cv_lang.public_link')}} </h3>
                <p>{{__('cv_lang.if_public')}}</p>
            </div>
        </div>
        <div><button class="send form-control shadow-none">{{__('cv_lang.save')}}</button></div>
    </div>
    <div style="display: flex;justify-content: center;padding: 20px 0; height: 0">
        <section class="footer1">
            <div class="footer1-content">

                <div class="dropdown ajak hide">
                    <div class="  ajakicner" data-toggle="dropdown">
                        <p class="aj">{{__('home.supporters')}}</p>
                        <p style="padding-left:10px"><i class="fas fa-angle-down"></i></p>
                    </div>
                    <div class="dropdown-menu box" style="margin: 0 12px" x-placement="none !important">
                        <div class="main">
                            <div class="img">
                                <img src="https://avatars.githubusercontent.com/u/9532499?s=460&u=5cd8a861d4b8289bfcb45961eae953b114f562ec&v=4"
                                    style="width: 40px; height: 40px; border-radius: 50%; ">
                            </div>
                            <div class="cont">
                                <p>{{__('home.andranik')}}</p>
                                <a href="https://github.com/HoghmrtsyanAndranik" class="a"
                                    target="_blank">https://github.com/HoghmrtsyanAndranik</a>
                            </div>
                        </div>
                        <div class="main">
                            <div class="img">
                                <img src="https://avatars.githubusercontent.com/u/86793772?s=40&u=bb33238cea0bb5533f400efdc5ff378936cc6171&v=4"
                                    style="width: 40px; height: 40px;  border-radius: 50%; ">
                            </div>
                            <div class="cont">
                                <p>{{__('home.ararat')}}</p>
                                <a
                                    href="https://github.com/AraratHambardzumyan">https://github.com/AraratHambardzumyan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <a href="#" class="border"></a>

				<a href="{{url('/FAQ')}}" class="hth" style=" font-size: 20px" target="_blank">{{__('home.frequently_questions')}}</a>
				<a href="#" class="border"></a>
				<a href="{{url('/discount_policy')}}" class="zex" style="font-size: 20px " target="_blank">{{__('home.discount_policy')}}</a><br>
				<a href="{{url('/Privacy')}}" class="anv" style=" font-size: 20px " target="_blank">{{__('home.security_policy')}}</a>
				<p style="color: white; text-align: center; padding-top: 30px;font-size:20px" class="col">2022 RootTeam development company</p> -->

            </div>

        </section>

    </div>
    <!-- End footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"
        integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>
    <script>
    let url = "{{url('/')}}";
    </script>
    <script type="text/javascript" src="{{asset('cv/js/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('cv/js/cropper.js')}}"></script>



</body>

</html>