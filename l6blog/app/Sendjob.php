<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sendjob extends Model
{
   protected $fillable = ['name','email','city','address'];
}
