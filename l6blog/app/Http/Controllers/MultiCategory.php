<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class MultiCategory extends Controller
{
    public function multiCat(Request $request){
        
        $delid = DB::table('categories_list')->where('user_id','190')->exists();
        if($delid){
        	echo "true";
        }
        $cat_id = $request->cat_id;
        $data = explode(',', $cat_id);
        $count = count($data);
        	# code...
	        for ($i=0; $i < $count; $i++) { 
	        	# code...
	        	$data = [
	        		'user_id' => '1',
	        		'cat_id' => $data[$i],
	        	];
	        	DB::table('categories_list')->insert($data);
	        }
    }
}
