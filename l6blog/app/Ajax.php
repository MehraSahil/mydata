<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajax extends Model
{
    protected $fillable = ['name','email','city','address'];
}
