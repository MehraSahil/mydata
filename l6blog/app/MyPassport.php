<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MyPassport extends Authenticatable
{
	use HasApiTokens, Notifiable;
	
    protected $fillable = ['email','password','access_token']; 
}
