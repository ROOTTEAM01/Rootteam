<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Colibrilab</title>
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/typing-test/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/typing-test/timer.css')}}">
    <link rel="stylesheet" href="{{asset('css/typing-test/popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/typing-test/pointer.css')}}">
</head>

    <body>
        </div>
        <div class="container">
        <div class="section_top">
            <div class="left_img">
                <img src="{{asset('images/typing-test/leftbg@3x.png')}}" >
            </div>
            <div class="left_margin"></div> 
            <div class="content">
                <div id="pointer">
                    <p>{{__('typing.start')}}</p>
                    <div id="pointer_in">
                    </div>
                </div>
                <div class="title">
                    <h1>{{__('typing.check_speed')}}</h1>
                </div>
                <div class="timer">
                    <div class="inner">
                        <h1 class="timer_seconds">60</h1>
                        <p>{{__('typing.sec')}}</p>
                    </div>
                    <div class="item html">
                        <svg width="160" height="160" xmlns="http://www.w3.org/2000/svg">
                         <g>
                          <circle id="circle" class="circle_animation" r="30" cy="81" cx="81" stroke-width="65" stroke="#f6f6f7" fill="none"/>
                         </g>
                        </svg>
                    </div>
                </div>
                        <div class="text_content">
                            <div class="text_box">
                                <div class="line_box">
                                    
                                </div>
                            </div>
                            <textarea class="input_text"></textarea>
                        </div>
                    </div>
                    <div class="right_margin"></div> 
                     <div class="right_img">
                        <img src="{{asset('images/typing-test/rightbg@3x.png')}}" >
                     </div>
                </div>

        <div class="section_bottom">
            <div class="bottom_img">
                <img src="{{asset('images/typing-test/blue@3x.png')}}">
            </div>
        </div>
    </div>

    <div class="popup">
        <div class="popup_layer">
            <div class="popup_window">
                <div class="popup_close" onclick="popupClose()">
                    <img src="{{asset('images/typing-test/close@3x.png')}}" alt="cross">
                </div>
                <div class="popup_body">
                    <div class="popup_body_top_section">
                        <div class="popup_photo">
                            <img class='popup_animal_photo' src="{{asset('images/typing-test/snail@3x.png')}}" alt="">
                        </div>
                        <div class="popup_info">
                            <h1 class="qualify">{{__('typing.tray')}}</h1>
                            <div class="stat_wpn"><p class="statistic">0 {{__('typing.per_min')}}</p><p id="statistic_wpm">(0 WPM):</p></div>
                            <p class="accuracy">{{__('typing.accuracy')}}<span id="accuracy_procent">0 %:</span></p> 
                            <p class="advice">{{__('typing.try_faster')}}</p> 
                        </div>
                    </div>
                </div>     
                <div class="share">
                    <span>{{__('typing.share')}}</span>
                    <a href="#" class="facebook_share">
                        <img src="{{asset('images/typing-test/facebook@3x.png')}}" alt="facebook">
                    </a>
                    <a href="#" class="linkedin_share">
                        <img src="{{asset('images/typing-test/in@3x.png')}}" alt="linkedin">
                    </a>
                    <a href="#" class="twitter_share">
                        <img src="{{asset('images/typing-test/tw@3x.png')}}" alt="twitter">
                    </a>
                </div>

                <button class="try_again_btn">{{__('typing.try_again')}}</button>
            </div>
        </div>
    </div>
    
            </div>
        </div>
    </div>
    <script >
      var tooslow_php ="{{__('typing.tooslow')}}";
      var good_php ="{{__('typing.good')}}";
      var superspeed_php ="{{__('typing.superspeed')}}";
      var word_php="{{__('typing.word')}}";
      var wordspermin_php="{{__('typing.wordspermin')}}";
      var seconds_php="{{__('typing.seconds')}}";
      var lang_php="{{__('typing.lang')}}";
 </script>  
    <script src="{{asset('js/typing_script.js')}}"></script>
        
    </body>
</html>