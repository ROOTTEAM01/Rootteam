<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $table="skills";
    public $timestamps=false;
    //protected $fillable = ['languge','percent'];
    public function prog_lang(){
        return $this->belongsTo('App\Models\Prog_lang','prog_languages_id','id');
    }
}
