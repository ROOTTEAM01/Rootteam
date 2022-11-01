@extends('layouts.main')

@section('title', __('main_lang.privacy_title'))

@section('content')

    @if(Session::get('locale')=='arm')
    <div class="container" id="priv" style="margin-top: 130px">
        <p><span>Անվտանգության Քաղաքականություն</span></p>
        <p class="bold">Գաղտնիության քաղաքականություն</p>

        <p>ColibriLab.am կայքում hարցում կատարելիս ձեզնից կարող են պահանջել հետևյալ տեղեկությունները՝ ձեր անունը, էլ.փոստի հասցեն, հեռախոսի համարը:</p>

        <p> Ձեր տվյալների գաղտնիությունը կարևոր է մեզ համար: Պարզության համար մենք տրամադրում ենք այս ծանուցմանը` բացատրելով տվյալների հետ աշխատելու մեր մեթոդները: Կարող եք նաև ինքներդ ընտրել, ձեր տվյալների հավաքագրման և օգտագործման եղանակը: Այս ծանուցումը կարելի է հեշտությամբ գտնել մեր կայքի յուրաքանչյուր էջում:</p>

        <h2 class="bold">Տվյալներ, որ մենք հավաքում ենք</h2>

        <p>Այս ծանուցումը վերաբերում է ColibriLab.am - ի կայքում հավաքագրված կամ մուտքագրված բոլոր տվյալներին, ինչպես նաև հեռախոսով ColibriLab -ի ներկայացուցչին տրամադրված տվյալներին:</p>

        <h2 class="bold">Cookie քաղաքականություն</h2>

        <p>Օգտագործելով cookie ֆայլերը, մենք կարող ենք տեղեկություններ հավաքել մեր կայք այցելելու վերաբերյալ, ինչպես օրինակ, ձեր այցելած էջերը, այցի ամսաթիվը, ժամը և տևողությունը, և/կամ ձեր IP հասցեն, ինչպես նաև ձեր օգտագործած բրաուզերը, դրա տարբերակը, ձեր օպերացիոն համակարգ և դրա տարբերակը, ձեր քաղաքը, երկիրը:</p>

        <h2 class="bold">Ինչպես ենք մենք օգտագործում տվյալները</h2>

        <p>Մենք օգտագործում ենք միայն այն տեղեկությունները, որ դուք տրամադրում եք ձեր մասին։  Մենք չենք փոխանցում այդ տվյալները երրորդ անձանց, բացառությամբ այն դեպքերի, երբ անհրաժեշտ է ձեր հարցումը կատարելու համար:</p>

        <p>Մենք օգտագործում ենք հետադարձ հասցեները պատասխանելու էլեկտրոնային փոստին, որը մենք ստանում ենք հաճախորդների սպասարկման տեխնիկական աջակցության համար: Նման հասցեները չեն օգտագործվում որեւէ այլ նպատակներով եւ չեն փոխանցվում երրորդ անձանց:</p>

        <p>Վերջապես, մենք երբեք չենք օգտագործում եւ չենք փոխանցում մեզ՝ ինտերնետում, հեռախոսով կամ անձամբ տրամադրված անձնական տվյալները, բացի վերոհիշյալ դեպքերը, առանց Ձեզ հնարավորություն ընձեռելու հրաժարվել կամ այլ կերպ արգելել նման օգտագործումը:</p>

        <h2 class="bold">Մեր նվիրվածությունը տվյալների անվտանգությանը</h2>

        <p>Չարտոնված մուտքը կանխելու, տվյալների ճշգրտությունը և տեղեկատվության ճիշտ օգտագործումը ապահովելու համար՝ մենք իրականացրել ենք համապատասխան ֆիզիկական, էլեկտրոնային և կառավարման ընթացակարգեր` մեր առցանց և օֆլայն հավաքագրած տվյալները պահպանելու և պաշտպանելու համար:</p>

        <h2 class="bold">Երրորդ կողմի կայքերը</h2>

        <p>Այս կայքը կարող է պարունակել երրորդ կողմի կայքերի հղումներ: Նման հղումները տրամադրվում են բացառապես Ձեր հարմարության համար: ColibriLab -ը չի վերահսկում այդ կայքերը կամ դրանց բովանդակությունը եւ պատասխանատվություն չի կրում այդ կայքերի համար:</p>

        <p>ColibriLab-ը չի ներկայացնում կամ հավանություն տալիս այդ կայքերին, ինչպես նաեւ դրանցում տեղադրված ցանկացած տեղեկատվությանը, նյութերին կամ ապրանքներին: Եթե Դուք այս կայքից մուտք եք գործում երրորդ կողմի կայքեր, ապա դուք եք կրում ամբողջ պատասխանատվությունը: </p>

        <h2 class="bold">Ինչպես կարող եք մուտք գործել կամ ուղղել ձեր տեղեկատվությունը</h2>

        <p>Ձեր տվյալների գաղտնիությունն ու անվտանգությունը պաշտպանելու համար, մենք ստուգում ենք ձեր ինքնությունը՝ նախքան մուտքի թույլտվություն  և ուղղումներ կատարելու հնարավուրություն տալը: Եթե ցանկանում եք մուտք գործել և խմբագրել ձեր անձնական տվյալները, գրեք մեր էլ. փոստին ՝ info@colibrilab.am:</p>

        <p>Եթե դուք ունեք այլ հարցեր կամ կասկածներ գաղտնիության քաղաքականության վերաբերյալ, խնդրում ենք ուղարկել մեզ նամակ info@colibrilab.am էլ. հասցեին:</p>
    </div>
@else
<div class="container" style="margin-top: 130px">
        <p><span>Privacy Policy</span></p>
        <p>Privacy Policy</p>

        <p>When you make a request on ColibriLab.am website, you may be asked for the following information: your name, e-mail address, phone number. ColibriLab collects only the minimum information (which you provide) needed to process and execute your request.</p>

        <p>The privacy of your personal information is important to us. For simplicity, we provide this notice explaining our data handling methods. You can also choose how to collect and use your data. This notice can be easily found on every page of our website.</p>

        <h2>Data we collect</h2>

        <p>This notice applies to all data collected or entered on the ColibriLab.am website, as well as the information provided to the ColibriLab representative by telephone.</p>

        <h2>Cookie Policy</h2>

        <p>Using cookies, we may collect information such as the pages you visit, the date and time (also the duration) you visited, and / or your IP address, as well as the browser you used, its version, your operating system and its version , your city and country.</p>

        <h2>How we use the data</h2>

        <p>We use only the information you provide about yourself. We do not transfer this information on to third parties unless necessary to make your request.</p>

        <p>We use feedback to respond to emails we receive for customer service support. Such addresses are not used for any other purpose and are not transferred to third parties.</p>

        <p>Lastly, we never use or transfer any personal information we provide on the Internet, telephone or in person, except in the above-mentioned cases, without giving you the opportunity to refuse or otherwise prohibit such use.</p>

        <h2>Our commitment to data security</h2>

        <p>To prevent unauthorized access, to ensure the accuracy of the data and the correct use of information, we have implemented appropriate physical, electronic and management procedures to protect our online and offline data.</p>

        <h2>hird party websitesh</h2>

        <p>This site may contain links to third party sites. Such links are provided solely for your convenience. ColibriLab does not control those sites or their content and is not responsible for those sites.</p>

        <p>ColibriLab does not endorse or aprove any of the information, materials or products posted on these sites. If you access third party sites from this site, you are solely responsible.</p>

        <h2>How can you access or correct your information?</h2>

        <p>To protect the privacy and security of your information, we verify your identity before giving you access and making corrections. If you want to access and edit your personal information, write to us. Email: info@aist.global.</p>

        <p>If you have any other questions or concerns about the Privacy Policy, please email us at info@aist.</p>
    </div>
@endif
@endsection
