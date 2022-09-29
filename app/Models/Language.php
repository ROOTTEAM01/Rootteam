<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public $table="languages";

    public $fillable = [
        'cv_students_id',
        'language',
        'level',
    ];

    public $timestamps=false;
}
