<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $get = Auth::user();
        return view('home');
    }
    public function showUser(Request $request){

        $datas = Post::get();
        return view('gate',compact('datas'));
    }
    public function postById(Request $request ,$id){

        $posts = Post::findOrFail($id);
        return view('viewgate',compact('posts'));
    }
    public function sendingMail(Request $request){

        $email = $request->email;
        return $get_rec = DB::table('users')->where(['email' =>$email ])->get();

        Mail::send('sending.bladefile',['user' => 'userdata','getdata' => $get_rec], 
            function($fx) use ($getdata){
                $fx->from('abc123@gmail.com','abc_data');
                $fx->subject('one of the route');
                $fx->to($getdata->email);
        });
    }
}
