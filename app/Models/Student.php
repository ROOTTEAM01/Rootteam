<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = "students";

    public $fillable = [
        'age',
        'phone',
        'email',
        'course_type',
        'full_name',
        'confirm_type',
        'comment',
        'agree_term',
        'mail_sended'
    ];
    public $timestamps = false;
}
