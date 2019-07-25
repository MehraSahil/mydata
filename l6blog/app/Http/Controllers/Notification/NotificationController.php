<?php

namespace App\Http\Controllers\Notification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Notifications\Notifiable;
use App\Notifications\EmailNotification;
use Notification;
use Carbon\Carbon;

class NotificationController extends Controller
{
	use Notifiable;

    public function sendNotification(){

    	$user = User::find(1);
    	$detail = [
    		'body' => 'Hi, This is the Send the Notification of Laravel.',
    		'actionText' => 'View Our Project',
    		'actionUrl' => url('/'),
    		'invoice_no' => '102324',
    		'amount' => '13999',
    		'unit_price' => '999'
    	];
         $when = Carbon::now()->addSeconds(20);
        $user->unreadNotifications->markAsRead();
    	$user->notify((new EmailNotification($detail))->delay($when));
        /*Notification::send(($user, new EmailNotification($detail))->delay($when));*/
    	dd('done'); 
    }
}
