<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ajax;

class AjaxController extends Controller
{
    public function ajaxData(Request $request){

    	if($request->isMethod('GET')){

    		return view('ajaxdata');
    	}
    	if($request->isMethod('POST')){
    		return "asfsfs";
    		$obj = new Ajax();
    		return $obj->name = $request->name;
    	}
    }
    public function showdata(){

    	$datas = Ajax::paginate(7);
    	return view('post',compact('datas'));
    }
    public function deleteRecord($id){
    	$get_single = Ajax::findOrFail($id);
    	$get_single->status = '1';
    	$result = $get_single->update();
    	if($result){
    		return "1";
    	}
    	else {
    		return "0";
    	}
    }
}
