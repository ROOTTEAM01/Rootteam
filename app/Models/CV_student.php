<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CV_student extends Model
{
    public $table="cv_students";
    public $timestamps=false;

    public function connections(){
        return $this->hasOne('App\Models\Connection','cv_students_id','id');
    }
    public function education(){
        return $this->hasMany('App\Models\Education','cv_student_id','id');
    }
    public function experience(){
        return $this->hasMany('App\Models\Experience','cv_students_id','id');
    }
    public function language(){
        return $this->hasMany('App\Models\Language','cv_students_id','id');
    }
    public function skills(){
        return $this->hasMany('App\Models\Skill','cv_students_id','id');
    }

}
