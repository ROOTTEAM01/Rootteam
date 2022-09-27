<?php

namespace App\Http\Controllers;
use App\Models\CV_student;
use Illuminate\Http\Request;
use Session;
class ImageCropperController extends Controller
{

  

    public function add_image(Request $request)
    {
        $st_id=Session::get('id');
        $imageName='cv_user_'.$st_id.'_'.time().'.png';
        $folderPath = public_path('cv/images/users/');
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath .$imageName;
        $arr=scandir($folderPath);
        foreach($arr as $val){
            if(strpos($val,'_'.$st_id.'_'))
                unlink("cv/images/users/$val");
        }
        
        file_put_contents($file, $image_base64);
        $stud=CV_student::find($st_id);
        $stud->image=$imageName;
        $stud->save();
        $imageName='cv/images/users/'.$imageName;
        return ['src'=>$imageName];
    }
}