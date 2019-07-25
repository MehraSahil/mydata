<?php

namespace App\Http\Controllers\Passport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Hash;
use App\MyPassport;

class MyPassport extends Controller
{
    public function register(Request $request){

    	$message = [
    		'email' => 'required|email|unique:my_passports',
    		'password' => 'required',
    	];
    	$validation = Validator::make($request->all(),$message);
    	if($validation->fails()){
    		return $validation->errors()->all();
    	}
    	$user = new MyPassport();
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->access_token = $user->createToken('accessToken')->accessToken;
    	$user->save();
    	if($user){
    		return  response()->json(['msg' => 'Registeration Successfull','data' => $user]);
    	} else {
    		return  response()->json(['msg' => 'Registration Unauthorized']);
    	}
    }
}
