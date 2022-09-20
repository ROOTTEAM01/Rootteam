<?php
namespace App\Http\Controllers;
use Session;
use App\Models\Subscribe;
use App\Models\Student;
use Illuminate\Http\Request;
use Validator;
use Mail;
class MainController extends Controller
{
   

    public function sendmail(Request $r){

       $messages = [
           'required' => __('main_lang.require'),
           'email'    => __('main_lang.invalid_email'),
       ];

       $validator = Validator::make($r->all(),[
           'email' => 'required|email',
           'name'  => 'required',
           'message' => 'required' 
       ],$messages);

       if ($validator->fails()){
           return ['message'=>$validator->errors(),'success'=>false];
       }
       else{
           Mail::send([], [], function ($message)use($r) {
           $message->to('colibrilabcenter@gmail.com')
           ->subject('Message to Colibrilab')
           ->from($r->email,$r->name)
          ->setBody("name {$r->name}<br>email - {$r->email}<br>message - {$r->message}", 'text/html');
          });
          return ['message'=>__('main_lang.success'),'success'=>true];
       } 
  }


   public function subscribe(Request $r){
       $lang=Session::get('locale');
        
       if($lang=='arm'){
           $invalid_email="Գոյություն չունեցող էլ․հասցե";
           $require="Լրացրեք դաշտը";
           $success='Շնորհակալություն բաժանորդագրվելու համար';
           $already="Դուք արդեն բաժանանորդագրվել եք։";
        }
        else{
           $invalid_email="Invalid email address";
           $require="Please enter a value";
           $success='Thank you for subscribing';
           $already='You already subscribed';
        }
        $messages = [
              'required' => $require,
              'email'    => $invalid_email,
              'unique'    =>$already
        ];
        $email=$r->email;
        $validator = Validator::make($r->all(),[
      	   'email' => 'required|email|unique:subscribe,email'],$messages);

        

        if ($validator->fails()){
            $errors = $validator->errors();
            return ['message'=>$errors,'success'=>false];
        }
        else{
           $model = new Subscribe;
           $model->email =$email;
           $model->save();
           return ['message'=>$success,'success'=>true];
        }
        
   }
   public function register(Request $r){

   	  $lang=Session::get('locale');
      if($lang=='arm'){
           $invalid_email="Գոյություն չունեցող էլ․հասցե";
           $success='Դուք հաջողությամբ գրանցվել եք։
           ՈՒղարկվել է հաղորդագրություն Ձեր էլ․ հասցեին ';
           $already="Նշված էլ․ հասցեով դուք արդեն գրանցվել եք";
           $age="Տարիքի դաշտում մուտքագրվածը թիվ չէ ";
           $phone="Հեռախոսահամարի դաշտը ճիշտ նշված չէ";
           $age_minmax="Տարիքը պետք է լինի 10-ից 55 սահմաններում";
        }
        else{
           $invalid_email="Invalid email address";
           $success='You signuped successfuly,we sent message to your email';
           $already='You have already registered at the specified email address';
           $age="The age field must be a number";
           $phone="The phone field is not specified correctly";
           $age_minmax="The age must be between 10 and 55";
        }

      $messages = [
              'age.numeric' => $age,
              'age.min' => $age_minmax,
              'age.max' => $age_minmax,
              'email.email'    => $invalid_email,
              'email.unique'    =>$already,
              'phone.regex' =>$phone,
         ];
   
 

         $validator = Validator::make($r->all(),
          ['email'=>'email|unique:students,email',

          'age' => 'numeric|min:10|max:55',
          'phone' => 'regex:~^\+?[0-9 \-]+$~'], $messages);
    

        if ($validator->fails()){
            $errors = $validator->errors();
            return [$errors,'success'=>false];
        }


       $m=new Student;
       $m->fullname=$r->name;
       $m->age=$r->age;
       $m->phone=$r->phone;
       $m->course_type=$r->course_type;
       $m->confirm_type=$r->confirm_type;
       $m->comment=$r->comment;
       $m->email=$r->email;

       $agree_term[0]=$r->morningtime;             
       $agree_term[1]=$r->daytime; 
       $agree_term[2]=$r->eveningtime;;
       $all_terms=implode(':',$agree_term);

       $m->agree_term=$all_terms;                      
      $m->save();

       $course_type=$r->course_type;
       $time="";
       if($agree_term[0]=='true')
	       $time.="Առավոտյան,";
       if($agree_term[1]=='true')
	       $time.="Ցերեկային,";
       if($agree_term[2]=='true')
	      $time.="Երեկոյան";
        $time=trim($time,',');
        $time.=' ժամեր';
        $subject="Գրանցում";
        if($lang=='en'){
           $time=str_ireplace(['Առավոտյան','Ցերեկային','Երեկոյան','ժամեր'], ['Morning','Daytime','Evening','hours'],$time);
           $subject="Sign In";
        }

        $mon=3;
        $month_fee='30 000';
        if($course_type=='Full Stack Web Development'){
             $course='Html, Css Responsive design, Bootstrap JavaScript,
             jQuery, Ajax PHP, MySQL, OOP MVC, Laravel(additional)';
         $mon=6;

        }
        elseif($course_type=='Front-End React Web Development'){
            $course='Html, CSS,Responsive design, Bootstrap,JavaScript, OOP, jQuery,React.js';
   
        }
        else{
           $course='Php, OOP,Ajax, MySQL,MVC,Laravel(additional)';
           $month_fee='40 000';
        }





        $data=[
        	'name'=>$r->name,
            'phone'=>$r->phone,
            'email'=>$r->email,
            'comment'=>$r->comment,
            'students_count'=>$r->confirm_type,
            'course'=>$course,
            'month_fee'=>$month_fee,
            'time'=>$time,
            'course_type'=>$course_type,
            'mon'=>$mon
        ];
   
   
     
       Mail::send('email',$data , function($message) use($r,$subject) {
            $message->to( $r->email, 'Colibrilab')->subject
            ($subject);
            $message->from('info@colibrilab.am','Colibrilab');
        });
        Mail::send('email_to_us',$data , function($message) use($r,$subject) {
            $message->to( 'colibrilabcenter@gmail.com', 'Colibrilab')->subject
            ($subject);
            $message->from('info@colibrilab.am','Colibrilab');
        });
if( count(Mail::failures()) > 0 ) {

   

   foreach(Mail::failures() as $email_failurs) {
      return ['msg'=>$email_failurs,'success'=>false];
    }

}



        
          
      
  return ['msg'=>$success,'success'=>true];


  }

}