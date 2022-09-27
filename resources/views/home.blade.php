@extends('layouts.main')

@section('title', 'Colibrilab')

@section('content')

     
   <div id="eduservices-home">

        <!-- SLIDER EXAMPLE -->
        <section class="example">
            <article class="content">

                <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                     data-alias="particle-effect-one5" data-source="gallery" style="background:#eef0f1;padding:0px; ">
                    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                    <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;"
                         data-version="5.4.1">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-10" data-transition="fade" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut"
                                data-easeout="Power4.easeOut" data-masterspeed="default"
                                data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/" data-rotate="0"
                                data-saveperformance="off" data-title="Example One" data-param1="" data-param2=""
                                data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="" data-bgcolor='#ffffff' style='
                                    background:#ffffff' alt="" data-bgposition="center center" data-bgfit="cover"
                                     data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption  " id="slide-10-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-width="full-proportional" data-height="full-proportional"
                                     data-whitespace="nowrap" data-type="image" data-basealign="slide"
                                     data-responsive_offset="off" data-wrapper_class="tp-nopointer" data-responsive="off"
                                     data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                     data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-blendmode="screen"
                                     style="z-index: 5;"><img src="{{asset('images/1bg.jpg')}}" alt=""
                                                              data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                                              data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                                              width="1920" height="1281" data-no-retina  id="bg_img" > </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption   tp-resizeme size-header" id="slide-10-layer-6"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']"
                                     data-voffset="['-70','-100','-100','-100']" data-width="none" data-height="none"
                                     data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                     data-wrapper_class="tp-nopointer"
                                     data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":300,"frame":"0","from":"y:[-100%];sX:1;sY:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                     data-paddingtop="[0,0,0,0]" data-paddingright="[20,20,20,20]"
                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                                     style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 700; color: rgba(45,48,50,1);font-family:arial;">
                                    {{__('home.yourpath')}}</div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" id="slide-10-layer-8"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']"
                                     data-voffset="['0','-30','-20','-20']" data-width="['none','none','361','330']"
                                     data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']"
                                     data-type="text" data-responsive_offset="on" data-wrapper_class="tp-nopointer"
                                     data-frames='[{"delay":600,"speed":1000,"frame":"0","from":"y:-20px;sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                     data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"
                                     style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 700; color:#ff8559;font-family:Poppins;letter-spacing:10px;">

                                     {{__('home.thebest')}}</div>

                                <!-- LAYER NR. 4 -->

                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-12" data-transition="fade" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut"
                                data-easeout="Power4.easeOut" data-masterspeed="default"
                                data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/" data-rotate="0"
                                data-saveperformance="off" data-title="Example Three" data-param1="" data-param2=""
                                data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="" data-bgcolor='#ffffff' style='
                                    background:#ffffff' alt="" data-bgposition="center center" data-bgfit="cover"
                                     data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption   fullscreenvideo  disabled_lc tp-videolayer"
                                     id="slide-12-layer-12" data-x="0" data-y="0" data-whitespace="nowrap"
                                     data-type="video" data-basealign="slide" data-responsive_offset="off"
                                     data-wrapper_class="tp-nopointer" data-responsive="off"
                                     data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                     data-videocontrols="none" data-videowidth="100%" data-videoheight="100%"
                                     data-videoposter="../../assets/images/tp_vid_clouds-1.jpg"
                                     data-videomp4="../../assets/images/tp_vid_clouds.mp4" data-noposteronmobile="off"
                                     data-videopreload="auto" data-videoloop="loop" data-forceCover="1"
                                     data-aspectratio="16:9" data-textAlign="['inherit','inherit','inherit','inherit']"
                                     data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-blendmode="screen"
                                     data-autoplay="on" style="z-index: 5;">
                                    <img src="{{asset('images/2.jpg')}}" alt=""
                                         data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                         data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                         width="1920" height="1281" data-no-retina id="bg_img1">
                                </div>

                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption   tp-resizeme size-header" id="slide-12-layer-6"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']"
                                     data-voffset="['-70','-100','-100','-100']" data-width="none" data-height="none"
                                     data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                     data-wrapper_class="tp-nopointer"
                                     data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":300,"frame":"0","from":"y:[-100%];sX:1;sY:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                     data-paddingtop="[0,0,0,0]" data-paddingright="[20,20,20,20]"
                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                                     data-blendmode="exclusion"
                                     style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 700; color: rgba(255,255,255,0.85);font-family:Poppins;">
                                    {{__('home.makingpower')}}</div>

                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption   tp-resizeme" id="slide-12-layer-8"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']"
                                     data-voffset="['1','-30','-20','-20']" data-width="['none','none','361','330']"
                                     data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']"
                                     data-type="text" data-responsive_offset="on" data-wrapper_class="tp-nopointer"
                                     data-frames='[{"delay":600,"speed":1000,"frame":"0","from":"y:-20px;sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                     data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]" data-blendmode="exclusion"
                                     style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 700; color: #ff8559 !important;font-family:Poppins;letter-spacing:10px;">
                                    {{__('home.joinus')}} </div>

                                <!-- LAYER NR. 12 -->
                                <a class="tp-caption rev-btn  tp-resizeme"
                                   href="http://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/2751380?ref=themepunch&license=regular&open_purchase_for_item_id=2751380&purchasable=source"
                                   target="_blank" id="slide-12-layer-10"
                                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                   data-y="['middle','middle','middle','middle']" data-voffset="['70','40','60','60']"
                                   data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                   data-actions='' data-responsive_offset="on"
                                   data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-20px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bg:rgba(45,48,50,1);bs:solid;bw:0 0 0 0;"}]'
                                   data-textAlign="['inherit','inherit','inherit','inherit']"
                                   data-paddingtop="[0,0,0,0]" data-paddingright="[35,35,35,35]"
                                   data-paddingbottom="[0,0,0,0]" data-paddingleft="[35,35,35,35]"
                                   style="z-index: 8; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(45,48,50,1);font-family:Poppins;background-color:rgba(250,254,144,1);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;"></a>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div><!-- END REVOLUTION SLIDER -->
                <script type="text/javascript">
                    var tpj = jQuery;

                    var revapi4;
                    tpj(document).ready(function () {
                        if (tpj("#rev_slider_4_1").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider_4_1");
                        } else {
                            revapi4 = tpj("#rev_slider_4_1").show().revolution({
                                sliderType: "standard",
                                jsFileLocation: "revolution/js/",
                                sliderLayout: "fullscreen",
                                dottedOverlay: "none",
                                delay: 9000,
                                particles: {
                                    startSlide: "first",
                                    endSlide: "last",
                                    zIndex: "1",
                                    particles: {
                                        number: {
                                            value: 80
                                        },
                                        color: {
                                            value: "#000000"
                                        },
                                        shape: {
                                            type: "circle",
                                            stroke: {
                                                width: 0,
                                                color: "#ffffff",
                                                opacity: 1
                                            },
                                            image: {
                                                src: ""
                                            }
                                        },
                                        opacity: {
                                            value: 0.3,
                                            random: false,
                                            min: 0.25,
                                            anim: {
                                                enable: false,
                                                speed: 3,
                                                opacity_min: 0,
                                                sync: false
                                            }
                                        },
                                        size: {
                                            value: 10,
                                            random: true,
                                            min: 1,
                                            anim: {
                                                enable: false,
                                                speed: 40,
                                                size_min: 1,
                                                sync: false
                                            }
                                        },
                                        line_linked: {
                                            enable: true,
                                            distance: 200,
                                            color: "#000000",
                                            opacity: 0.2,
                                            width: 1
                                        },
                                        move: {
                                            enable: true,
                                            speed: 3,
                                            direction: "none",
                                            random: true,
                                            min_speed: 3,
                                            straight: false,
                                            out_mode: "out"
                                        }
                                    },
                                    interactivity: {
                                        events: {
                                            onhover: {
                                                enable: true,
                                                mode: "bubble"
                                            },
                                            onclick: {
                                                enable: false,
                                                mode: "repulse"
                                            }
                                        },
                                        modes: {
                                            grab: {
                                                distance: 400,
                                                line_linked: {
                                                    opacity: 0.5
                                                }
                                            },
                                            bubble: {
                                                distance: 400,
                                                size: 150,
                                                opacity: 1
                                            },
                                            repulse: {
                                                distance: 200
                                            }
                                        }
                                    }
                                },
                                navigation: {
                                    keyboardNavigation: "off",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    mouseScrollReverse: "default",
                                    onHoverStop: "off",
                                    arrows: {
                                        style: "gyges",
                                        enable: true,
                                        hide_onmobile: false,
                                        hide_onleave: false,
                                        tmp: '',
                                        left: {
                                            h_align: "center",
                                            v_align: "bottom",
                                            h_offset: -20,
                                            v_offset: 0
                                        },
                                        right: {
                                            h_align: "center",
                                            v_align: "bottom",
                                            h_offset: 20,
                                            v_offset: 0
                                        }
                                    }
                                },
                                responsiveLevels: [1240, 1024, 778, 480],
                                visibilityLevels: [1240, 1024, 778, 480],
                                gridwidth: [1240, 1024, 778, 480],
                                gridheight: [868, 768, 960, 720],
                                lazyType: "none",
                                shadow: 0,
                                spinner: "off",
                                stopLoop: "on",
                                stopAfterLoops: 0,
                                stopAtSlide: 1,
                                shuffle: "off",
                                autoHeight: "off",
                                fullScreenAutoWidth: "off",
                                fullScreenAlignForce: "off",
                                fullScreenOffsetContainer: "",
                                fullScreenOffset: "60px",
                                disableProgressBar: "on",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: false,
                                }
                            });
                        }

                        RsParticlesAddOn(revapi4);
                    }); /*ready*/
                </script>

            </article>
        </section>

    </div>
    <!-- End Main Banner Area -->

    <!--=================================================================================
                               Start About us
    ==================================================================================-->
    <section class="boxes-area ">
        <div id="eduservices-about-us ">
            <div class="container ">
                <div class="pulseDiv">
                    <div class="pulseDiv1">
                        <span class="pulse">
                            <div class="wrapper">
                                <span class="circleSpan"></span>
                                <div class="tooltip "> <span style="font-size: 16px;">{{__('home.comecolibrilab')}}</span> </div>
                            </div>
                        </span>
                    </div>
                    <div class="pulseDiv2">
                        <span class="pulse">
                            <div class="wrapper">
                                <span class="circleSpan"></span>
                                <div class="tooltip tooltip_orange">{{__('home.learnprof')}}</div>
                            </div>
                        </span>
                    </div>
                    <div class="pulseDiv3">
                        <span class="pulse">
                            <div class="wrapper">
                                <span class="circleSpan"></span>
                                <div class="tooltip tooltip_3">{{__('home.developskills')}}</div>
                            </div>
                        </span>
                    </div>
                    <div class="pulseDiv4">
                        <span class="pulse">
                            <div class="wrapper">
                                <span class="circleSpan"></span>
                                <div class="tooltip">{{__('home.becomeprogrammer')}}</div>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="row block">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-box">
                            <i class="icofont-users-alt-3"></i>
                            <h3>{{__('home.training')}}</h3>
                            <p>{{__('home.training_text')}}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-box">
                            <i class="icofont-automation"></i>
                            <h3>{{__('home.practice')}}</h3>
                            <p>{{__('home.practice_text')}}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 wow fadeInUp" data-wow-delay=".6s">
                        <div class="single-box">
                            <i class="icofont-children-care"></i>
                            <h3>{{__('home.job')}}</h3>
                            <p>{{__('home.job_text')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About US -->

    <!--=================================================================================
                                Start Courses Area
    ==================================================================================-->
    <section id="eduservices-course" class="courses-area ptb-100 bg-f9faff">
        <div class="container">
            <div class="section-title">
                <h2>{{__('home.taughtlanguages')}}</h2>
                <span>{{__('home.introduction')}}</span>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="tab ">
<!--<div class="responsivee">-->
                        <ul class="tabs responsivee">
                            <li>
                                <a href="#">
                                    <i class="icofont-file-html5"></i>
                                    <br> HTML/CSS
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-bootstrap"></i>
                                    <br>BOOTSTRAP
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-file-javascript"></i>
                                    <br> JAVASCRIPT
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-brand-designfloat"></i>
                                    <br> JQUERY
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <!--                                    <i class='fab fa-react'></i>-->
                                    <svg aria-hidden="true"
                                         focusable="false"
                                         data-prefix="fab"
                                         data-icon="react"
                                         class="svg-inline--fa fa-react fa-w-16"
                                         role="img"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="-350 0 1200 600">
                                        <path
                                                d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-23.9 5.8-35.3 1.3-15.9-9.2-22.5-44.5-13.5-92 1.1-5.6 2.3-11.2 3.7-16.7 22.4 4.8 45 8.1 67.9 9.8 13.2 18.7 27.7 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6.4 19.5.6 29.5.6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8.9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z">
                                        </path>
                                    </svg>
                                    <br>REACT
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-file-php"></i>
                                    <br>PHP
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <!--                                    <i class='fab fa-laravel'></i>-->
                                    <svg aria-hidden="true"
                                         focusable="false"
                                         data-prefix="fab"
                                         data-icon="laravel"
                                         class="svg-inline--fa fa-laravel fa-w-16"
                                         role="img"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="-350 0 1200 600">
                                        <path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z">
                                        </path>
                                    </svg>
                                    <br>LARAVEL
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg aria-hidden="true"
                                         focusable="false"
                                         data-prefix="fab"
                                         data-icon="python"
                                         class="svg-inline--fa fa-python fa-w-14"
                                         role="img"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="-350 0 1200 600">
                                        <path d="M439.8 200.5c-7.7-30.9-22.3-54.2-53.4-54.2h-40.1v47.4c0 36.8-31.2 67.8-66.8 67.8H172.7c-29.2 0-53.4 25-53.4 54.3v101.8c0 29 25.2 46 53.4 54.3 33.8 9.9 66.3 11.7 106.8 0 26.9-7.8 53.4-23.5 53.4-54.3v-40.7H226.2v-13.6h160.2c31.1 0 42.6-21.7 53.4-54.2 11.2-33.5 10.7-65.7 0-108.6zM286.2 404c11.1 0 20.1 9.1 20.1 20.3 0 11.3-9 20.4-20.1 20.4-11 0-20.1-9.2-20.1-20.4.1-11.3 9.1-20.3 20.1-20.3zM167.8 248.1h106.8c29.7 0 53.4-24.5 53.4-54.3V91.9c0-29-24.4-50.7-53.4-55.6-35.8-5.9-74.7-5.6-106.8.1-45.2 8-53.4 24.7-53.4 55.6v40.7h106.9v13.6h-147c-31.1 0-58.3 18.7-66.8 54.2-9.8 40.7-10.2 66.1 0 108.6 7.6 31.6 25.7 54.2 56.8 54.2H101v-48.8c0-35.3 30.5-66.4 66.8-66.4zm-6.7-142.6c-11.1 0-20.1-9.1-20.1-20.3.1-11.3 9-20.4 20.1-20.4 11 0 20.1 9.2 20.1 20.4s-9 20.3-20.1 20.3z">
                                        </path>
                                    </svg>
                                    <br>PYTHON
                                </a>
                            </li>
                        </ul>
<!--</div>-->
                        <div class="tab_content">
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 ">
                                        <div class="tabs_item_img">
                                            <img src="{{asset('images/html.png')}}" alt="Course">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 ">
                                        <div class="tabs_item_content">
                                            <h3>HTML/CSS</h3>
                                            <ul>
                                                <li>{{__('home.html')}}</li>
                                                <li>{{__('home.css')}}</li>
                                            </ul>
                                            <a href="#" class="btn " data-toggle="modal" data-target="#exampleModal">
                                                {{__('home.learnmore')}}

                                            </a>
                                            <div class="modal fade show1" id="exampleModal" tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title " id="exampleModalLabel">Html/Css
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <ul>
                                                                {{__('home.html_css')}}
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                    data-dismiss="modal">{{__('home.close')}}</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="{{asset('images/bootstrap.png')}}" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>Bootstrap</h3>
                                            <p>{{__('home.bootstrap')}}։</p>
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal2">{{__('home.learnmore')}}</a>
                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal2">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">{{__('home.learnmore')}}</h4>

                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <ul>
                                                                {{__('home.bootstrap_more')}}
                                                            </ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                    data-dismiss="modal">{{__('home.close')}}</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="{{asset('images/js.png')}}" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>JAVASCRIPT</h3>
                                            <p>{{__('home.java1')}}:</p>
                                            <ul>
                                                <li>{{__('home.java2')}}</li>
                                                <li>{{__('home.java3')}}</li>
                                                <li>{{__('home.java4')}}</li>
                                            </ul>
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal3">
                                                 {{__('home.learnmore')}}
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal3">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">JavaScript </h4>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <ul>
                                                                {{__('home.javascript')}}
                                                            </ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                    data-dismiss="modal">{{__('home.close')}}</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="{{asset('images/js.png')}}" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>JQUERY </h3>
                                            <p>{{__('home.jquery')}}։</p>
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal4">
                                                 {{__('home.learnmore')}}
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal4">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"> {{__('home.learnmore')}}</h4>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <ul>
                                                                {{__('home.jquery_more')}} 
                                                            </ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                    data-dismiss="modal">{{__('home.close')}}</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="{{asset('images/react.png')}}" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>REACT</h3>
                                            <p>{{__('home.react')}}:</p>
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal5">
                                                 {{__('home.learnmore')}}
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal5">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">ReactJs</h4>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <ul>
                                                                {{__('home.react_more')}}
                                                            </ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                    data-dismiss="modal">{{__('home.close')}}</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="{{asset('images/php.png')}}" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>PHP </h3>
                                            <p>{{__('home.php')}}։</p>

                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal6">
                                                {{__('home.learnmore')}}
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal6">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">{{__('home.learnmore')}}</h4>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <ul>{{__('home.php_more')}}</ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                    data-dismiss="modal">{{__('home.close')}}</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="{{asset('images/Laravel.png')}}" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>Laravel</h3>
                                            <p>{{__('home.laravel')}}:
                                            </p>
                                            <!-- <a href="#" class="btn">Start Learn Now</a> -->
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal7">
                                               {{__('home.learnmore')}}
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal7">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">{{__('home.learnmore')}}</h4>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <ul>{{__('home.laravel_more')}}</ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                    data-dismiss="modal">{{__('home.close')}}</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="{{asset('images/Laravel.png')}}" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>Python</h3>
                                            <p>Python:
                                            </p>
                                            <!-- <a href="#" class="btn">Start Learn Now</a> -->
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal8">
                                                {{__('home.learnmore')}}
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal8">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">{{__('home.learnmore')}}</h4>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <ul>Python_more</ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                    data-dismiss="modal">{{__('home.close')}}</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses Area -->
    <!--=================================================================================
                                Start Fun Facts Area
    ==================================================================================-->
    <section id="eduservices-fun-facts" class="fun-facts-area ptb-100">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-md-12 col-12 wow fadeInUp d-flex justify-content-center w-100" data-wow-delay=".4s">
                    <div class="funFact ">
                        <i class="icofont-document-folder"></i>
                        <h3 class="count">8</h3>
                         <span>{{__('home.year')}}</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 wow fadeInUp d-flex justify-content-center w-100" data-wow-delay=".6s">
                    <div class="funFact">
                        <i class="icofont-users-alt-2"></i>
                        <h3 class="count">2000</h3>
                         <span>{{__('home.student')}}</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 wow fadeInUp d-flex justify-content-center w-100" data-wow-delay=".8s">
                    <div class="funFact">
                        <i class="icofont-flag-alt-2"></i>
                        <h3 class="count">150000</h3>
                        <span>{{__('home.lesson')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->
    <!--=================================================================================
                                Start pricing section
    ==================================================================================-->
    <section id="eduservices-pricing" class="ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{__('home.upcomingcourse')}}</h2>
                <!-- <span>A modern and unique style</span> -->
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 floor-2_1">
                    <div class="single-pricing-table  single-pricing-table2 single-pricing-center reveal-bottom-fade">
                        <div class="single-pricing-treangle">
                            <span class=" treangle-span">{{__('home.beginner')}}</span>
                        </div>
                        <div class="pricing-table-plan pt-3">
                            <h3>Full Stack Node<br> Development </h3>
                        </div>
                        <div class="pricing-table-content">
                            <div class="pricing-content-price ">
                                <strong>30 000</strong>
                                <br>
                                <sup> {{__('home.dram')}}</sup>
                                <sub>/{{__('home.month')}}</sub>
                            </div>
                            <div class="row pricing-content-lesson text-light ">
                                <div class="col-6 pt-2 mt-1">
                                    <div class=" border-right">
                                        <i class="fa fa-calendar mr-2"></i>
                                        5{{__('home.month')}}
                                    </div>

                                </div>
                                <div class="col-6 ">3 {{__('home.lessonsperweek')}} <br> 2 {{__('home.hours')}}</div>
                            </div>
                            <ul class="list-item text-left pl-4 mt-4">
                                <li><i class="fa fa-check"></i> Html, Css</li>
                                <li><i class="fa fa-check"></i> Responsive design, Bootstrap</li>
                                <li><i class="fa fa-check"></i> JavaScript, jQuery, Ajax</li>
                                <li><i class="fa fa-check"></i> Node.js</li>
                                <li><i class="fa fa-check"></i> MongoDB</li>
                            </ul>
                            <br>
                            <div class="pricing-content-btn pricing-btn ">
                                <a class="btn btn2" href="reg_form.php?course=node">{{__('home.signup')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 reveal-left-fade">
                    <div class="single-pricing-table single-pricing-table1 single-pricing-center reveal-bottom-fade">
                        <div class="single-pricing-treangle">
                            <span class=" treangle-span">{{__('home.beginner')}}</span>
                        </div>
                        <div class="pricing-table-plan pt-3">
                            <h3>Full Stack PHP<br> Development </h3>
                        </div>
                        <div class="pricing-table-content">
                            <div class="pricing-content-price">
                                <strong>30 000</strong> <br>
                                <sup>{{__('home.dram')}}</sup>
                                <sub>/{{__('home.month')}}</sub>
                            </div>
                            <div class="row pricing-content-lesson text-light ">
                                <div class="col-6 pt-2 mt-1">
                                    <div class="border-right ">
                                        <i class="fa fa-calendar mr-2"></i>
                                        6 {{__('home.month')}}
                                    </div>

                                </div>
                                <div class="col-6 ">3 {{__('home.lessonsperweek')}} <br> 2 {{__('home.hours')}}</div>
                            </div>
                            <ul class="list-item text-left pl-4 mt-4">
                                <li><i class="fa fa-check"></i> Html, Css</li>
                                <li><i class="fa fa-check"></i> Responsive design, Bootstrap</li>
                                <li><i class="fa fa-check"></i> JavaScript, jQuery, Ajax</li>
                                <li><i class="fa fa-check"></i> PHP, MySQL, OOP</li>
                                <li><i class="fa fa-check"></i> MVC, Laravel (additional)</li>
                            </ul>
                            <div class="pricing-content-btn pricing-btn ">
                                <a class="btn btn1" href="reg_form.php?course=python">{{__('home.signup')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 floor-2_2">
                    <div class="single-pricing-table  single-pricing-table2 single-pricing-center reveal-bottom-fade">
                        <div class="single-pricing-treangle">
                            <span class=" treangle-span">{{__('home.beginner')}}</span>
                        </div>
                        <div class="pricing-table-plan pt-3">
                            <h3>Full Stack Python<br> Development </h3>
                        </div>
                        <div class="pricing-table-content">
                            <div class="pricing-content-price ">
                                <strong>30 000</strong>
                                <br>
                                <sup>{{__('home.dram')}}</sup>
                                <sub>/{{__('home.month')}}</sub>
                            </div>
                            <div class="row pricing-content-lesson text-light ">
                                <div class="col-6 pt-2 mt-1">
                                    <div class=" border-right">
                                        <i class="fa fa-calendar mr-2"></i>
                                        6 {{__('home.month')}}
                                    </div>

                                </div>
                                <div class="col-6 ">3 {{__('home.lessonsperweek')}} <br> 2 {{__('home.hours')}}</div>
                            </div>
                            <ul class="list-item text-left pl-4 mt-4">
                                <li><i class="fa fa-check"></i> Html, Css</li>
                                <li><i class="fa fa-check"></i> Responsive design, Bootstrap</li>
                                <li><i class="fa fa-check"></i> JavaScript, jQuery, Ajax</li>
                                <li><i class="fa fa-check"></i> Python</li>
                                <li><i class="fa fa-check"></i> MongoDB</li>
                                <li><i class="fa fa-check"></i> Diango</li>
                            </ul>
                            <div class="pricing-content-btn pricing-btn ">
                                <a class="btn btn2" href="reg_form.php?course=front">{{__('home.signup')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-table  single-pricing-table2 single-pricing-center reveal-bottom-fade">
                        <div class="single-pricing-treangle">
                            <span class=" treangle-span">{{__('home.beginner')}}</span>
                        </div>
                        <div class="pricing-table-plan pt-3">
                            <h3>Front End React<br> Development </h3>
                        </div>
                        <div class="pricing-table-content">
                            <div class="pricing-content-price ">
                                <strong>30 000</strong>
                                <br>
                                <sup>{{__('home.dram')}}</sup>
                                <sub>/{{__('home.month')}}</sub>
                            </div>
                            <div class="row pricing-content-lesson text-light ">
                                <div class="col-6 pt-2 mt-1">
                                    <div class=" border-right">
                                        <i class="fa fa-calendar mr-2"></i>
                                        5 {{__('home.month')}}
                                    </div>

                                </div>
                                <div class="col-6 ">3 {{__('home.lessonsperweek')}} <br> 2 {{__('home.hours')}}</div>
                            </div>
                            <ul class="list-item text-left pl-4 mt-4">
                                <li><i class="fa fa-check"></i> Html, Css</li>
                                <li><i class="fa fa-check"></i> Responsive design, Bootstrap</li>
                                <li><i class="fa fa-check"></i> JavaScript, OOP, jQuery</li>
                                <li><i class="fa fa-check"></i> React.js </li>
                                <li><i class="fa fa-check"></i> Redux</li>
                            </ul>
                            <div class="pricing-content-btn pricing-btn ">
                                <a class="btn btn2" href="reg_form.php?course=front">{{__('home.signup')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 reveal-right-fade">
                    <div class=" single-pricing-table single-pricing-table3 single-pricing-center reveal-bottom-fade">
                        <div class="pricing-table-plan pt-3">
                            <h3>Back End PHP<br> Development</h3>
                        </div>
                        <div class="pricing-table-content">
                            <div class="pricing-content-price">
                                <strong>40 000</strong>
                                <br>
                                <sup>{{__('home.dram')}}</sup>
                                <sub>/{{__('home.month')}}</sub>
                            </div>
                            <div class="row pricing-content-lesson text-light ">
                                <div class="col-6 pt-2 mt-1">
                                    <div class=" border-right">
                                        <i class="fa fa-calendar mr-2"></i>
                                        3 {{__('home.month')}}
                                    </div>

                                </div>
                                <div class="col-6">3 {{__('home.lessonsperweek')}} <br> 2 {{__('home.hours')}}</div>
                            </div>
                            <ul class="list-item text-left mt-4 pl-4">
                                <li><i class="fa fa-check"></i> PHP, OOP</li>
                                <li><i class="fa fa-check"></i> Ajax, MySQL</li>
                                <li><i class="fa fa-check"></i> MVC</li>
                                <li><i class="fa fa-check"></i> Laravel</li>
                            </ul>
                            <br>
                            <div class="pricing-content-btn pricing-btn">
                                <a class="btn btn3" href="reg_form.php?course=back">{{__('home.signup')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================================================================
                                Start recent Blog
    ==================================================================================-->
    <section id="eduservices-blog" class="recent-blog-section ptb-100">
        <div class="container">
            <div class="section-title">
                 <h2>{{__('home.studentworks')}}</h2>
            </div>
        </div>
        <div class="news-grids blog-slider reveal-bottom-fade mt-5">
            <div class="grid">
                <div class="entry-media">
                    <img src="{{asset('images/students_works/a.PNG')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href=""><i class="icofont-user-suited"></i> Ani</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <h3><a href="{{url('works/ani1')}}" target="_blank">Html/Css</a></h3>

                </div>
            </div>
            <div class="grid blog-mt-30">
                <div class="entry-media">
                   <img src="{{asset('images/students_works/a2.png')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Ani</a></li>
                      
                    </ul>
                    <h3><a href="{{url('works/ani2')}}" target="_blank">Html/Css</a></h3>
                </div>
            </div>
            <div class="grid">
                <div class="entry-media">
                    <img src="{{asset('images/students_works/a3.PNG')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Karina</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="{{url('works/karina')}}" target="_blank">Html/Css/Bootstrap</a>
                    </h3>
                </div>
            </div>
            <div class="grid blog-mt-30">
                <div class="entry-media">
                    <img src="{{asset('images/students_works/a4.PNG')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Suren</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <h3><a href="{{url('works/suren1')}}" target="_blank">Html/Css</a></h3>

                </div>
            </div>
            <div class="grid">
                <div class="entry-media">
                    <img src="{{asset('images/students_works/a5.PNG')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Suren</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <h3><a href="{{url('works/suren2')}}" target="_blank">Html/Css/Bootstrap</a></h3>
                </div>
            </div>
            <div class="grid blog-mt-30">
                <div class="entry-media">
                    <img src="{{asset('images/students_works/a6.PNG')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Vazgen</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="{{url('works/vazgen2')}}"
                           target="_blank">Html/Css</a></h3>
                </div>
            </div>
            <div class="grid blog-mt">
                <div class="entry-media">
                    <img src="{{asset('images/students_works/a7.PNG')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Vazgen</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="{{url('works/vazgen1')}}" target="_blank">Html/Css</a>
                    </h3>
                </div>
            </div>
            <div class="grid blog-mt blog-mt-30">
                <div class="entry-media">
                    <img src="{{asset('images/students_works/a8.PNG')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Areg</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="{{url('works/areg1')}}"
                           target="_blank">JavaScript/jQuery</a></h3>
                </div>
            </div>
            <div class="grid blog-mt ">
                <div class="entry-media">
                    <img src="{{asset('images/students_works/a9.PNG')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Areg</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="{{url('works/areg2')}}" target="_blank">JavaScript/jQuery</a>
                    </h3>
                </div>
            </div>
            <div class="grid blog-mt blog-mt-30">
                <div class="entry-media">
                    <img src="{{asset('images/students_works/a11.PNG')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Suren</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="{{url('works/suren3')}}"
                           target="_blank">JavaScript/jQuery</a></h3>
                </div>
            </div>
            <div class="grid blog-mt ">
                <div class="entry-media">
                    <img src="{{asset('images/students_works/a10.PNG')}}" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Areg</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="{{url('works/areg3')}}" target="_blank">JavaScript/jQuery</a>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- end recent blog -->
    <!-- Typing Test -->
    <div class="tast">
        <div class="tasting">
            <div class="tasting-content">
                <h3>Typing Test - {{__('home.check_speed')}}</h3>
                <p>{{__('home.test_help')}}</p>
                <a href="{{url('typing_test')}}" target="_blank"><button class="btn1">{{__('home.starttest')}}</button></a>
            </div>
        </div>
    </div>
    <!-- End Typing test -->
    <!--=================================================================================
                                Start Our teacher
    ==================================================================================-->
    <section id="eduservices-teacher" class="teacher-inner teacher-color section ptb-100">
        <div class="container">
            <div class="section-title">
               <h2>{{__('home.Ourteam')}}</h2>
                <span>{{__('home.becomeoneofus')}}</span>
            </div>
            <div class="row align-items-center teacher-img-text">
                <div class="col-lg-3 col-md-6 text-center wow flipInY" data-wow-delay="0.6s">
                    <div class="teacher teacher-member">
                        <img src="{{asset('images/IshxanMelqonyan.png')}}" class="img-fluid" alt="teacher-member">
                        <div class="overlay">
                            <div class="text">
                                <div>
                                    <h3>{{__('home.ishxan')}}</h3>
                                    <p>{{__('home.manager')}}, <br> Front End {{__('home.specialist')}}</p>
                                </div>
                                <div>
                                    <ul class="text-center">
                                        <!-- <li><a href="https://www.facebook.com/profile.php?id=100022387127816" target="_blank"><i class="icofont-facebook"></i></a></li> -->
                                        <!--                                        <li><i class="icofont-twitter"></i></li>-->
                                        <li><a href="https://www.linkedin.com/in/melqonyan-ishkhan-065489203" target="_blank"><i class="icofont-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow flipInY">
                    <div class="teacher teacher-member">
                        <img src="{{asset('images/AraratHambardzumyan.jpg')}}" class="img-fluid" alt="teacher-member">
                        <div class="overlay">
                            <div class="text">
                                <div>
                                    <h3>{{__('home.ararat')}}</h3>
                                    <p>Front End {{__('home.specialist')}}</p>
                                </div>
                                <div>
                                    <ul class="text-center">
                                        <!--  <li><i class="icofont-facebook"></i></li> -->
                                        <!--                                        <li><i class="icofont-twitter"></i></li>-->
                                       <!--  <li><a href="https://www.linkedin.com/in/levon-yeritsyan" target="_blank"><i class="icofont-linkedin"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow flipInY" data-wow-delay="0.2s">
                    <div class="teacher teacher-member">
                        <img src="{{asset('images/Andranik.jpg')}}" class="img-fluid" alt="teacher-member">
                        <div class="overlay">
                            <div class="text">
                                <div>
                                    <h3>{{__('home.andranik')}}</h3>
                                    <p>Back End {{__('home.specialist')}}</p>
                                </div>
                                <div>
                                    <ul class="text-center">
                                        <!-- <li><a href="https://www.facebook.com/andranik.hoghmrtsyan" target="_blank"><i class="icofont-facebook"></i></a></li> -->
                                        <!--                                        <li><i class="icofont-twitter"></i></li>-->
                                        <li><a href="https://www.linkedin.com/in/andranik-hoghmrtsyan-526a55204" target="_blank"><i class="icofont-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center teacher-img-text">
                <div class="col-lg-3 col-md-6 text-center wow flipInY" data-wow-delay="0.6s">
                    <div class="teacher teacher-member">
                        <img src="{{asset('images/hegine.jpg')}}" class="img-fluid" alt="teacher-member">
                        <div class="overlay">
                            <div class="text">
                                <div>
                                    <h3>{{__('home.hegine')}}</h3>
                                    <p>{{__('home.coordinator')}}</p>
                                </div>
                                <div>
                                    <ul class="text-center">
                                        <!-- <li><a href="https://www.facebook.com/helena.mkrtchyan.3" target="_blank"><i class="icofont-facebook"></i></a></li> -->
                                        <!--                                        <li><i class="icofont-twitter"></i></li>-->
                                        <li><a href="https://www.linkedin.com/in/heghine-mkrtchyan-a3ab55194" target="_blank"><i class="icofont-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow flipInY">
                    <div class="teacher teacher-member">
                        <img src="{{asset('images/HaykazVoskanyan.jpg')}}" class="img-fluid" alt="teacher-member">
                        <div class="overlay">
                            <div class="text">
                                <div>
                                    <h3>{{__('home.haykaz')}}</h3>
                                    <p>Front End {{__('home.specialist')}}</p>
                                </div>
                                <div>
                                    <ul class="text-center">
                                        <!-- <li><a href="https://www.facebook.com/azniv.gojanyan.5" target="_blank"><i class="icofont-facebook"></i></a></li> -->
                                        <!--                                        <li><i class="icofont-twitter"></i></li>-->
                                       <!--  <li><a href="https://www.linkedin.com/in/azi-yan-a493861aa" target="_blank"><i class="icofont-linkedin"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow flipInY" data-wow-delay="0.2s">
                    <div class="teacher teacher-member">
                        <img src="{{asset('images/AramKhachatryan.jpg')}}" class="img-fluid" alt="teacher-member">
                        <div class="overlay">
                            <div class="text">
                                <div>
                                    <h3>{{__('home.aram')}}</h3>
                                    <p>Front End {{__('home.specialist')}}</p>
                                </div>
                                <div>
                                    <ul class="text-center">
                                        <!-- <li><a href="https://www.facebook.com/people/Anna-Muradyan/100009256391420" target="_blank"><i class="icofont-facebook"></i></a></li> -->
                                        <!--                                        <li><i class="icofont-twitter"></i></li>-->
                                       <!--  <li><a href="https://www.linkedin.com/in/anna-muradyan-1a4a40206" target="_blank"><i class="icofont-linkedin"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Our teacher -->
    <!-- CV start-->
<div class="container-fluid cv-block" id="createcv">
<div class="container form-registr">
<div class="text_form">
<h1>{{__('home.create_your')}}<span> {{__('home.online_cv')}}</span> <br>{{__('home.few_min')}}</h1>
<p>{{__('home.we_help')}}<br>{{__('home.good_cv')}}<br>
<span>{{__('home.please_sign')}}</span></p>
</div>

    <div class="reg_form" id="tabs">
        <div class="reg">
            <ul class="tabs-1">

               <li><a href="#tabs-2">{{__('home.log_in')}}</a></li>
                <li><a href="#tabs-1">{{__('home.create_account')}}</a></li>
            </ul>

            <fieldset id="tabs-1">
                <p>{{__('home.your_cv')}}</p>

                    <input type="email" id="cv_email"  placeholder="{{__('home.email')}}">

                    <input type="password" id="cv_pass1"  placeholder="{{__('home.password')}}">
                    <input type="password" id="cv_pass2"  placeholder="{{__('home.password')}}">
                    <div class="IagreeDiv">
                        <input type="checkbox" name="" id="Iagree" checked>
                        <span>{{__('home.agree')}} <a href="{{__('home.policy_link')}}"> {{__('home.chapter')}}</a></span>
                    </div>
                    <div class="but">
                        <button class="btn cv_send"> {{__('home.create')}} </button>
                    </div>

                <span id="cv_error_text1"></span>

            </fieldset>
            <fieldset id="tabs-2">

                <p>{{__('home.your_cv')}}</p>

                    <input type="email" id="cv_email_login" placeholder="{{__('home.email')}}">
                    <input type="password" id="cv_pass_login" placeholder="{{__('home.password')}}">
                    <p class="pas">{{__('home.forgot_password')}}
                    <div class="but">
                         <button class="btn cv_login" >{{__('home.log_in')}}</button>
                    </div>
                <span id="cv_error_text2"style="color:red"></span>
            </fieldset>
            <fieldset id="tabs-3" class="ui-tabs-panel ui-corner-bottom ui-widget-content">
                <p>{{__('home.forgot_password')}}</p>
                <input type="email" id="cv_email_login_forgot" placeholder="{{__('home.email')}}">
                <div class="but but_forg">
                    <button class="btn forg_next">{{__('home.next')}}</button>
                    <button class="btn forg_cancel">{{__('home.cancel')}}</button>
                </div>
                <span id="cv_error_text2_forgot"style="color:red"></span>
            </fieldset>
        </div>
    </div>

</div>
</div>
    <!--=================================================================================
    CV END
    ==================================================================================-->
    <!--=================================================================================
                                Start testimonial
    ==================================================================================-->
    <div id="eduservices-testimonial" class="p-3 ">

    </div>
    <div class="testimonial ">
        <div class="container ">
            <div class="row justify-content-xl-end justify-content-lg-end justify-content-md-center">
                <div class="col-lg-6 col-md-8">
                    <div class="testimonial-content reveal-right-fade">
                        <div class="testimonial-carousel owl-carousel ">
                            <div class="testimonial-single">
                                <img src="{{asset('images/Alisa.jpg')}}" alt="">
                                 <h5>{{__('home.alisa')}}</h5>
                                <h6>Web {{__('home.developer')}}</h6>
                                <p>{{__('home.alisatext')}}:
                                </p>
                            </div>
                            <div class="testimonial-single">
                                <img src="{{asset('images/narek.jpg')}}" alt="">
                                <h5>{{__('home.nareksardaryan')}}</h5>
                                <h6>Web {{__('home.developer')}}</h6>
                                <p>{{__('home.nareksardaryantext')}}
                                </p>
                            </div>
                            <div class="testimonial-single">
                                <img src="{{asset('images/NE.jpg')}}" alt="">
                                 <h5>{{__('home.narekyazeryan')}}</h5>
                                <h6>Web {{__('home.developer')}}</h6>
                                <p>{{__('home.narekyazeryantext')}}
                                </p>
                            </div>
                            <div class="testimonial-single">
                                <img src="{{asset('images/levon.jpg')}}" alt="">
                                <h5>{{__('home.levonhakhyan')}}</h5>
                                <h6>Web {{__('home.developer')}}</h6>
                                <p>{{__('home.levonhakhyantext')}}
                                </p>
                            </div>
                            <div class="testimonial-single">
                                <img src="{{asset('images/hripsime.jpg')}}" alt="">
                                <h5>{{__('home.hripsimemanukyan')}}</h5>
                                <h6>Web {{__('home.developer')}}</h6>
                                <p>{{__('home.hripsimemanukyantext')}} 👍👍
                                </p>
                            </div>
                            <div class="testimonial-single">
                                <img src="{{asset('images/hovo.jpg')}}" alt="">
                                <h5>{{__('home.hovhanneskhachatryan')}}</h5>
                                <h6>Web {{__('home.developer')}}</h6>
                                <p>{{__('home.hovhanneskhachatryantext')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End testimonial -->

    <section class="container mt-5 pt-5 mb-4">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-box1">
                    <img src="{{asset('images/Ars.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-box1">
                    <img src="{{asset('images/Charity.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-box1">
                    <img src="{{asset('images/1.jpg')}}" alt="">
                </div>
            </div>
        </div>
        </div> <!-- ? -->
    </section>
    <!--=================================================================================
                                Start Contact Area
    ==================================================================================-->
    <section id="eduservices-contact" class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>{{__('home.contactus')}}</h2>
                <span>{{__('home.followus')}}</span>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box" style="padding: 47px 20px;

                    ">
                        <h3><i class="icofont-google-map"></i>{{__('home.addr')}}</h3>
                        <p><a href="https://goo.gl/maps/Ld22zFYgNaXCDDM29" target="_blank">{{__('home.yerevan')}}<br>{{__('home.address')}}</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-box box2" style="padding: 47px 20px;">
                        <h3><i class="icofont-envelope"></i>{{__('home.email')}}</h3>
                        <p><a href="mailto:#">colibrilabcenter@gmail.com</a></p>
                        <p><a href="mailto:#">info@colibrilab.am</a></p>

                        <!--                        <p><a href="mailto:#">n1education.colibri@gmail.com</a></p>-->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-box box3">
                        <h3><i class="icofont-phone"></i> {{__('home.phone')}}</h3>
                        <p><a href="callto:+37498757350">+374 98 75-73-50</a></p>
                        <p><a href="callto:+37455757350">+374 55 75-73-50</a></p>
                        <p><a href="callto:+37433757350">+374 33 75-73-50</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="get-in-touch">
                        <h3>{{__('home.question')}}</h3>
                        <p>{{__('home.writeus')}}
                        </p>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 wow rotateIn" data-wow-offset="10" data-wow-duration="1.5s">
                    <!-- <form id="contactForm"> -->


                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="{{__('home.yourname')}}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="{{__('home.emailadress')}}" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                    <textarea name="message" class="form-control " cols="30" rows="4" name="message"
                                              id="message" placeholder="{{__('home.enteryourmessage')}}" autocomplete="off"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="button" class="contact-btn btn send">{{__('home.send')}}</button>
                            <!--Result notification -->
                            <div id="error-message" class="text-center">



                            </div>
                            <div id="form-messages"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!--=================================================================================
         START FOOTER
  ==================================================================================-->
    <div id="eduservices-footer" class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-wrapper">
                        <div class="section-subscribe section-subscribe-st">

                            <div class="education-subscribe reveal-bottom-fade">
                                <div class="subscribe-content">
                                    <!-- Newsletter title -->
                                    <div class="subscribe-content-inner section-title">
                                          <h2>{{__('home.subscribe')}}</h2>
                                        <p class="color-white lheight-30 pb40">{{__('home.bethefirst')}}</p>
                                    </div>
                                </div>
                                <div class="subscribe-form">
                                    <div class="subscribe-form-inner">
                                        <!-- Newsletter form -->
                                        <!--  <form class="form-inline dv-form" id="mc-form"> -->
                                        <div class="form-group">
                                            <input id="mc-email" type="email" name="EMAIL"
                                                   placeholder="{{__('home.emailadress')}}" class="form-control"> <br>
                                            <button class="btn" name="Subscribe" id="subscribe_btn"
                                                    type="button">{{__('home.send')}}</button>
                                        </div>
                                        <br>
                                        <label for="mc-email"></label>
                                        <div id="subscribe-result"></div>
                                        <!--  </form> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Start Social icons -->
                            <ul class="social">
                                <li>
                                    <a href="https://www.linkedin.com/in/colibri-lab-8154b6202/" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/colibri_lab?s=09" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/%D4%BF%D5%B8%D5%AC%D5%AB%D5%A2%D6%80%D5%AB%D4%BC%D5%A1%D5%A2-%D5%B8%D6%82%D5%BD%D5%B8%D6%82%D5%B4%D5%B6%D5%A1%D5%AF%D5%A1%D5%B6-%D5%AF%D5%A5%D5%B6%D5%BF%D6%80%D5%B8%D5%B6-1495050270734324"
                                       target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UC89YSNPPcST0LyjRg83FP6Q" target="_blank">
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Social icons -->
                            <!-- <div class="copyright ">
                                <p>Copyright © 2020 <a href="#"> Codestar</a></p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection