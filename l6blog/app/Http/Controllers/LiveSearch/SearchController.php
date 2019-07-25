<?php

namespace App\Http\Controllers\LiveSearch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Response;

class SearchController extends Controller
{
	public function setCookie(Request $request){

		$minute = 1;
		$response = new Response('hello world');
		$response->withCookie(cookie('ali','hello world again', $minute));
		return $response;
	}
	public function getCookie(Request $request){

		$getCookie = $request->cookie('name');
		return $getCookie;
	}
    public function showdata(Request $request){

    	$datas = DB::table('livesearchs')->paginate(8);
    	return view('SearchData.search', compact('datas'));
    }
    public function ajaxData(Request $request){

    	if($request->ajax()){
    $records = DB::table('livesearchs')->where('name','like','%' . $request->search .'%')
								->orWhere('email','like','%' . $request->search.'%')
								->orWhere('city','like','%'.$request->search.'%')
								->orWhere('mobileno','like','%'.$request->search.'%')
								->paginate('8');
	return $records;
    	}
    }
}
