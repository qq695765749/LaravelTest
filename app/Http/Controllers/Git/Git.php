<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Test1;
use Illuminate\Support\Facades\DB;
class Test1Controller extends Controller
{
	
	public function info(){
				
		//DB::table('chat')->where(['content'=>'this is a test'])->update(['content'=>'This is a test']);
		$test=Test1::all();
		dd($test);
	}
	
}