@extends('layouts.main')

@section('title', __('main_lang.fag_title'))

@section('content')
@if(Session::get('locale')=='arm')
 <canvas class="nokey" style="position: absolute;z-index: 0;width: 100%;"></canvas>
<div class="container pt-5 block" style="margin: 100px auto">
    <div class='text-center mb-5 title'>
       <h1 style='font-family: cursive; font-size: 35px'>Հաճախակի տրվող հարցեր</h1>
     </div>
    <div class="accordion-wrapper ">
        <div class="acc-head card p-3 rounded-0 accord-bg accord-bg"  style="border-radius: 5px !important">
          Դասընթացներին մասնակցելու համար անհրաժե՞շտ են նախնական գիտելիքներ։
        </div>
         <div class="acc-body rounded-0 accord-bg1" style="padding-left: 11px; padding: 12px; font-size: 15px; color: #7575a3;">
          Դասընթացներին մասնակցելու համար նախնական գիտելիքներ անհրաժեշտ չեն, սակայն ցանկալի է մի փոքր անգլերենի իմացությունը։
         </div>
      </div>
    <div class="accordion-wrapper">
        <div class="acc-head card p-3 rounded-0 accord-bg" style="border-radius: 5px !important">
             Ո՞ւմ համար են նախատեսված դասընթացները։
         </div>
         <div class="acc-body rounded-0 accord-bg1" style="padding-left: 11px; padding: 12px; font-size: 15px; color: #7575a3;">
              Դասընթացները նախատեսված են ինչպես սկսնակների, այնպես էլ  որոշակի նախնական գիտելիքներ ունեցողների համար։
         </div>
    </div>
    <div class="accordion-wrapper">
           <div class="acc-head card p-3 rounded-0 accord-bg" style="border-radius: 5px !important">
              Դուք համակարգիչներ տրամադրու՞մ, եք։
            </div>
            <div class="acc-body rounded-0 accord-bg1" style="padding-left: 11px; padding: 12px; font-size: 15px; color: #9494b8;">
          Մեր լսարանները տեխնիկապես ապահովված են։Սակայն ցանկության դեպքում կարող եք դասընթացին մասնակցել Ձեր նոթբուքով։
           </div>
    </div>
    <div class="accordion-wrapper">
       <div class="acc-head card p-3 rounded-0 accord-bg" style="border-radius: 5px !important">
         Դասընթացի ավարտին հավաստագիր տրամադրու՞մ եք։
        </div>
        <div class="acc-body rounded-0 accord-bg1" style="padding-left: 11px; padding: 12px; font-size: 15px; color: #7575a3;">
         Դասընթացի ավարտից հետո տրամադրում ենք հավաստագիր՝ համապատասխան որակավորմամբ։
        </div>
    </div>
    <div class="accordion-wrapper">
        <div class="acc-head card p-3 rounded-0 accord-bg" style="border-radius: 5px !important">
           Ձեզ մոտ սովորելուց հետո կարո՞ղ եմ ընդունվել աշխատանքի։
        </div>
        <div class="acc-body rounded-0 accord-bg1" style="padding-left: 11px; padding: 12px; font-size: 15px; color: #7575a3;">
            Դասընթացն ամբողջությամբ ավարտելուց հետո բարձր առաջադիմությամբ ուսանողներին տրվում է պրակտիկայի հնարավորություն, ինչը բարեհաջող անցնելու դեպքում՝ նաև աշխատանքի հնարավորություն մեր  կամ մեր գործընկեր կազմակերպություններում։
        </div>
    </div>
    <div class="accordion-wrapper">
        <div class="acc-head card p-3 rounded-0 accord-bg" style="border-radius: 5px !important">
           Դասերն անհատակա՞ն են, թե՞ խմբային։
        </div>
        <div class="acc-body rounded-0 accord-bg1" style="padding-left: 11px; padding: 12px; font-size: 15px; color: #7575a3;">
            Մեզ մոտ դասերն անցկացվում են թե՛ խմբային, թե՛ անհատական տարբերակներով։
        </div>
    </div>
    <div class="accordion-wrapper">
       <div class="acc-head card p-3 rounded-0 accord-bg" style="border-radius: 5px !important">
          Ինչպես կարող եմ գրանցվել ծրագրավորման դասերին։
       </div>
      <div class="acc-body rounded-0 accord-bg1" style="padding-left: 11px; padding: 12px; font-size: 15px; color: #7575a3;">
          Դասընթացներին կարող եք գրանցվել ինչպես զանգահարելով, այնպես էլ կայքի միջոցով գրանցվելով։
      </div>
    </div>
</div>
@else
<canvas class="nokey" style="position: absolute;z-index: 0;width: 100%;"></canvas>
<div class="container pt-5 block">
  <div class='text-center mb-5 title'>
    <h1>Frequently Asked Questions</h1>
  </div>
  <div class="accordion-wrapper ">
    <div class="acc-head card p-3 rounded-0 accord-bg accord-bg">
     Do I need prior knowledge to participate in classes?
    </div>
    <div class="acc-body rounded-0 accord-bg1">
    No prior knowledge is required to participate in the courses, but a little knowledge of English is desirable.
    </div>
  </div>
  <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      Who are the courses for?
    </div>
    <div class="acc-body rounded-0 accord-bg1">
     The courses are designed for both beginners and those who have some basic knowledge.
    </div>
  </div>
  <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      Do you provide us with computers?
    </div>
    <div class="acc-body rounded-0 accord-bg1">
       Our classrooms are technically equipped. However, if you wish, you can participate in the course with your laptop.
    </div>
  </div>
    <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      Do you provide a certificate at the end of the course?
    </div>
    <div class="acc-body rounded-0 accord-bg1">
      After successfully completing the course you are given a certificate.
    </div>
  </div>
    <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      Is it possible to get a job after graduating the course?
    </div>
    <div class="acc-body rounded-0 accord-bg1">
      After completing the course, the students with high marks are given the opportunity of an internship, which, if successful, gives an opportunity to work in our or our partner organizations.
    </div>
  </div>
    <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
       What kind of classes do you organize: individual or group trainings?
    </div>
    <div class="acc-body rounded-0 accord-bg1">
       Our classes are held in both group and individual versions.
    </div>
  </div>
    <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      How can I enroll in programming classes?
    </div>
    <div class="acc-body rounded-0 accord-bg1">
     You can register for the courses both by calling and by registering through the website.
  </div>
</div>

@endif





  <script type="text/javascript">
    $(".acc-body").slideUp();
      $(document).ready(function(){
  $('.acc-head').click(function(){
    $(this).next().slideToggle(500);
    $(this).toggleClass('active');
  })
})
  </script>

@endsection
  <!-- Default dropup button -->
