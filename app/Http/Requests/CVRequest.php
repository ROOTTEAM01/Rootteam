<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Session;
use App\Models\CV_student;
class CVRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function prepareForValidation()
    {
        $conn=null;
        $education=null;
        $skills=null;
        $language=null;
        $experience=null;
     if($this->input('facebook') || $this->input('linkedin') ||
        $this->input('twitter') || $this->input('dribble') ||
        $this->input('github') || $this->input('behance')){
        $conn=1;
     }
     
     $student=CV_student::find(Session::get('id'));

      if(count($student->education)>0){
       $education=1;
     }
     if(count($student->skills)>0){
       $skills=1;
     }
     if(count($student->language)>0){
       $language=1;
     }
     if(count($student->experience)>0){
       $experience=1;
     }
    
    ['conn'=>$conn,'education'=>$education,
    'language'=>$language,'experience'=>$experience];     

     $this->merge([
            'connections' => $conn,
            'education' =>   $education,
            'skills'=>$skills,
            'language'=>$language,
            'experience'=>$experience    
        ]); 
    }
    
  

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()

    {
        return [
            
          'name' => 'required',
          'profession' => 'required',
          'email'=>'required|email',
          'about_me'=>'required',
          'address'=>'required',
          'phone'=>'required',
          'connections'=>'required',
          'education' => 'required',
          'skills'=>'required',
          'language' => 'required',
          'experience'=> 'required',
        ];
    }
    public function messages()
    {
        return [
        
        ];
    }
}
