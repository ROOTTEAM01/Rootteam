<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public $table="experiences";

    public $guarded = ['outofrange'];

    public $timestamps=false;
}
