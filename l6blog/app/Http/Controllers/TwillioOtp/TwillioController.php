<?php

namespace App\Http\Controllers\TwillioOtp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Twilio\Rest\Client;

class TwillioController extends Controller
{
    public function sendOtp(Request $request){

    	if ($request->isMethod('GET')) {
    		# code...
    		return view('sendOtp');
    	}
    	if ($request->isMethod('POST')) {
    		# code...
    		$rule = ['number' 	=> 'required',];
    		$message = 
    		[
    			'number.required' 	 => 'ples enter the valid number',
    			'verifyotp.required' => 'ples enter the valid otp',
    		];
    		$this->validate($request, $rule, $message);

				$sid    = env('TWILIO_ACCOUNT_SID');
				$token  = env('TWILIO_AUTH_TOKEN');
				$twilio = new Client($sid, $token);
				$rand_no = mt_rand(0,9999);
				$to = $request->number;
				$message = $twilio->messages
                  ->create($to, // to
                           array('from' => env('TWILIO_FROM'), 'body' => $rand_no)
                  );
			print($message->sid);
    	}
    }
}