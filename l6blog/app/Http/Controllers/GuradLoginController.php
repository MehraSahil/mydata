<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\GuradLogin;
use DB;
use Auth;

class GuradLoginController extends Controller
{
	public function __construct(){

		$this->middleware('CheckUser')->except(['login','logout','practise']);
	}
	public function login(Request $request){

		if ($request->isMethod('GET')) {
			# code...
			return view('guradLogin');
		}
		if ($request->isMethod('POST')) {
			# code...
			$email = $request->only('email','password');

			$user = GuradLogin::where('email',$email)->first();
			if(Hash::check($request->password, $user->password)){

				Auth::guard('sahil')->loginUsingId($user->id);
				return redirect(url('dashboard'));
			}
			else {
				return redirect('loginGuard');

			}
		}
	}
	public function dashboard(Request $request){

		return view('welcome');
	}
	public function profile(Request $request){

		return "make a profile";
	}
	public function logout(Request $request){

		Auth::logout();
		return redirect(url('loginGuard'));
	}
	public function practise(){

		$data = '1,2,3,4,5,6,7,8,9';
		$explore = explode(',', $data);
		return $explore;
	}    
}
