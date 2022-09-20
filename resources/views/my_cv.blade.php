
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My CV</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!-- 
Easy Profile Template
http://www.templatemo.com/tm-467-easy-profile
-->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/templatemo-blue.css')}}">
	

</head>
<body data-spy="scroll" data-target=".navbar-collapse">
@php

if($data->image)
   $src=asset("cv/images/users/$data->image");
else
   $src=asset('images/cv_images/user.jpg');

$lang=Session::get('locale');

$edit="";
$hi="";
if($lang=='arm'){
  $hi='Ողջույն, ես '.$data->name.'ն եմ ';
  $edit="Խմբագրել CV-ին ";
}
elseif($lang=='en'){
  $hi="Hi,I am ".$data->name; 
  $edit="Edit CV"; 
}
@endphp

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>
@php
if(Session::get('id') && Session::get('id')==$data->id){
   $href=url('/create');
   echo "<a href='$href'><i class='fa fa-pencil penMyCv' aria-hidden='true' title='$edit'></i></a>";
}
@endphp

<!-- header section -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<img src="<?=$src?>" class="img-responsive img-circle tm-border" alt="templatemo easy profile" width="25%">
				<hr>
				<h1 class="tm-title bold shadow">{{$hi}}</h1>
				<h1 class="white bold shadow">{{$data->profession}}</h1>
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">{{__('my_cv_lang.easyprofile')}}</h3>
			
				<p>{{$data->about_me}}</p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
        
			<div class="skills">
				<h2 class="white">{{__('my_cv_lang.skills_text')}}</h2>

				<div class="content">
    @php
       
        $page=(int)(count($data->skills)/3);
        if(count($data->skills)%3)
           $page++;
        $index=0;
        foreach($data->skills as $sk)
           $language[]=$sk->prog_lang->name;
       
       //['','PHP','LARAVEL','JAVASCRIPT'];
     // print_r($language);die;

           for($i=0;$i<$page;$i++){
              echo'<div class = "mySlides ">';
              for($k=0;$k<3;$k++)
              	if(isset($data->skills[$index])){
    @endphp   
         
              	<strong>{{$language[$index]}}</strong>
					<span class="pull-right">{{$data->skills[$index]->percent}}%</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" 
	                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: {{$data->skills[$index]['percent']}}%;"></div>
			                  </div>
	@php
            $index++;
        }
            echo '</div>'; 
          }
    @endphp


	
			</div>
			</div>

@php
if(count($data->skills)>3){

@endphp
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
@php }@endphp
		</div>
	</div>
</section>

<!-- education and languages -->
<section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="slider slider-content">
					<div class="education">

@php

foreach($data->education as $ed){
@endphp


             
			 <div class="slider-item ">
						<h2 class="white">{{__('my_cv_lang.education_text')}}</h2>
							<div class="education-content">
								<h4 class="education-title accent">{{$ed['specialization']}}</h4>
									<div class="education-school">
										<h5>{{$ed['education']}}</h5><span></span>
										<h5>{{$ed['begin_year']}} {{$ed['begin_month']}} - {{$ed['end_year']}} {{$ed['end_month']}}</h5>
									</div>
								<p class="education-description">{{$ed['description']}}</p>
							</div>
				</div> 
@php
}
@endphp

			</div>
			</div>

<a class="prev-second" onclick="plusSlidesS(-1)">&#10094;</a>
<a class="next-second" onclick="plusSlidesS(1)">&#10095;</a>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>{{__('my_cv_lang.languages')}}</h2>
					<ul>
                        @php
                         
                           foreach($data->language as $lang){
                           	$l=$lang['language'];
                           	echo "<li>$l</li>";
                           }     
                        @endphp
					</ul>
			</div>
		</div>
	</div>
</section>

<!-- contact and experience -->
<section class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="contact">
				<h2>{{__('my_cv_lang.contact')}}</h2>
					<p><i class="fa fa-map-marker"></i>{{$data->address}}</p>
					<p><i class="fa fa-phone"></i>{{$data->phone}}</p>
					<p><i class="fa fa-envelope"></i>{{$data->email}}</p>
					
			</div>
		</div>
		<div class="col-md-8 col-sm-12">
			<div class="experience">
			<h2 class="white">{{__('my_cv_lang.experiences')}}</h2>	
        @php
          
           foreach($data->experience as $exp){
       @endphp
			 <div class="slider-item-third ">
				
					<div class="experience-content">
						<h4 class="experience-title accent">{{$exp['job_title']}}</h4>
						<h5>{{$exp['company']}}</h5><span></span>
						<h5>{{$exp['start_year']}} {{$exp['start_month']}} - {{$exp['end_year']}} {{$exp['end_month']}}</h5>
						<p class="education-description">{{$exp['description']}}</p>
					</div>
				</div> 
@php
}

@endphp



				
			</div>

<a class="prev-third" onclick="plusSlidesT(-1)">&#10094;</a>
<a class="next-third" onclick="plusSlidesT(1)">&#10095;</a>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
<!--				<p>Copyright &copy; 2021 Your Easy Profile</p>-->
				<ul class="social-icons">
                    <?php
                    if(!empty($data->connections['facebook'])){
                        $href=$data->connections['facebook'];
                        echo "<li><a href='$href' class='fa fa-facebook'></a></li>";
                    }
                    if(!empty($data->connections['linkedIn'])){
                        $href=$data->connections['linkedIn'];
                        echo "<li><a href='$href' class='fa fa-linkedin'></a></li>";
                    }
                    if(!empty($data->connections['twitter'])){
                        $href=$data->connections['twitter'];
                        echo "<li><a href='$href' class='fa fa-twitter'></a></li>";
                    }
                    if(!empty($data->connections['dribble'])){
                        $href=$data->connections['dribble'];
                        echo "<li><a href='$href' class='fa fa-dribbble'></a></li>";
                    }
                    if(!empty($data->connections['github'])){
                        $href=$data->connections['github'];
                        echo "<li><a href='$href' class='fa fa-github'></a></li>";
                    }
                    if(!empty($data->connections['behance'])){
                        $href=$data->connections['behance'];
                        echo "<li><a href='$href' class='fa fa-behance'></a></li>";
                    }
                    ?>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- javascript js -->	
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>	
<script src="{{asset('js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/my_cv.js')}}"></script>

<style type="text/css">
		
.slider{
	position: relative;
}
.content{
  max-width: 500px;
  position: relative;
  margin: auto;
}
.mySlides {
	display: block;
	 animation-name: fade;
  animation-duration: 1.5s;
  opacity: 1;
}
.prev:hover, .next:hover {
  background-color: rgba(255,255,255,0.8);
  cursor: pointer;
}
.prev{
  position: absolute;
  right: 85px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.next{
  position: absolute;
  right: 50px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.prev-second:hover, .next-second:hover {
  background-color: rgba(255,255,255,0.8);
  cursor: pointer;
}
.prev-second{
  position: absolute;
  right: 85px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.next-second{
  position: absolute;
  right: 50px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.prev-third:hover, .next-third:hover {
  background-color: rgba(255,255,255,0.8);
  cursor: pointer;
}
.prev-third{
  position: absolute;
  right: 85px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.next-third{
  position: absolute;
  right: 50px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
  opacity: 1;
}
.slider-item{
	display: block;
	animation-name: fade;
    animation-duration: 1.5s;
    opacity: 1;
}
.slider-item-third{
	display: block;
	animation-name: fade;
    animation-duration: 1.5s;
    opacity: 1;
}

.slider-content{
  position: relative;
}

@keyframes fade {
  from {opacity: 0.4} 
  to {opacity: 1}
}
	</style>
</body>

</html>