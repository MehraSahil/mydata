<?php

namespace App\Http\Controllers\FetchRecord;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AjaxFetchRecord extends Controller
{
    public function setRecord(){

    	return view('fetchrecord');
    }
    public function getRecord(Request $request){

    	if($request->ajax()){
    	$get_record = DB::table('ajax_records')->paginate(8);
    	return $get_record;
    	}
    }
}
