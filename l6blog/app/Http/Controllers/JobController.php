<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\jobs\EmailSendByjob;
use Carbon\Carbon;
use App\Sendjob;

class JobController extends Controller
{
	
    public function sendEmailviaNotification(Request $request){

    	if($request->isMethod('GET')){

    		return view('job.job');
    	}
    	if($request->isMethod('POST')){

    		$user = Sendjob::create([
    			'name' => $request->name,
    			'email' => $request->email,
    			'city' => $request->city,
    			'address' => $request->address,
    		]);
    		$when = Carbon::now()->addSeconds(15);
    		EmailSendByjob::dispatch($user)->delay($when);
    		dd('done');
    	}
    }
}
