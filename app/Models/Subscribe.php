<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    public $table = "subscribers";

    public $fillable = ['email'];

    public $timestamps = false;


}
