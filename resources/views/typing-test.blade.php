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
    <link rel="stylesheet" href="{{asset('typing-test/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('typing-test/css/timer.css')}}">
    <link rel="stylesheet" href="{{asset('typing-test/css/popup.css')}}">
    <link rel="stylesheet" href="{{asset('typing-test/css/pointer.css')}}">
</head>
    <body>
        </div>
        <div class="container">
        <div class="section_top">
            <div class="left_img">
                <img src="{{asset('typing-test/img/leftbg@3x.png')}}" >
            </div>
            <div class="left_margin"></div> 
            <div class="content">
                <div id="pointer">
                    <p>Սկսել թեստը</p>
                    <div id="pointer_in">
                    </div>
                </div>
                <div class="title">
                    <h1>Ստուգիր տեքստ մուտքագրելու արագությունդ</h1>
                </div>
                <div class="timer">
                    <div class="inner">
                        <h1 class="timer_seconds">60</h1>
                        <p>վրկ</p>
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
                        <img src="{{asset('typing-test/img/rightbg@3x.png')}}" >
                     </div>
                </div>

        <div class="section_bottom">
            <div class="bottom_img">
                <img src="{{asset('typing-test/img/blue@3x.png')}}">
            </div>
        </div>
    </div>

    <div class="popup">
        <div class="popup_layer">
            <div class="popup_window">
                <div class="popup_close" onclick="popupClose()">
                    <img src="{{asset('typing-test/img/close@3x.png')}}" alt="cross">
                </div>
                <div class="popup_body">
                    <div class="popup_body_top_section">
                        <div class="popup_photo">
                            <img class='popup_animal_photo' src="{{asset('typing-test/img/snail@3x.png')}}" alt="">
                        </div>
                        <div class="popup_info">
                            <h1 class="qualify">Նորից փորձիր ։)</h1>
                            <div class="stat_wpn"><p class="statistic">0 բառ մեկ րոպեում</p><p id="statistic_wpm">(0 WPM):</p></div>
                            <p class="accuracy">Ճշգրտությունը ՝ <span id="accuracy_procent">0 %:</span></p> 
                            <p class="advice">Փորձիր ավելի արագ!</p> 
                        </div>
                    </div>
                </div>     
                <div class="share">
                    <span>Կիսվել՝</span>
                    <a href="#" class="facebook_share">
                        <img src="{{asset('typing-test/img/facebook@3x.png')}}" alt="facebook">
                    </a>
                    <a href="#" class="linkedin_share">
                        <img src="{{asset('typing-test/img/in@3x.png')}}" alt="linkedin">
                    </a>
                    <a href="#" class="twitter_share">
                        <img src="{{asset('typing-test/img/tw@3x.png')}}" alt="twitter">
                    </a>
                </div>

                <button class="try_again_btn">ԿՐԿԻՆ ՓՈՐՁԵԼ</button>
            </div>
        </div>
    </div>
    
            </div>
        </div>
    </div>


    <script src="{{asset('typing-test/js/typing-test.js')}}"></script>
        
    </body>
</html>