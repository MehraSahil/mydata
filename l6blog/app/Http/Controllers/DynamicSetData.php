<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class DynamicSetData extends Controller
{
    public function dynamicSetData(Request $request){

    	$datas = DB::table('dynamic')->select('fname','color')->get();
    	if($datas){	
    	return view('dynamicdata', compact('datas'));
    	}
    }
    public function searchdata(Request $request){

    	$users = User::get();
    	
    	return view('index', compact('users'));
    }
}
