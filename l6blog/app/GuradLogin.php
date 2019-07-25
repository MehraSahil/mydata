<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GuradLogin extends Authenticatable
{

    protected $fillable = [
    	'email','password'
    ];
    protected $hidden = [
    	'status'
    ];
}
