<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Support\Facades\DB;
class Test1Controller extends Controller
{
	public function info(){
		
		
		$res=DB::table('users')->select('id','name','phone','sex','i_id')->join('relation','id','=','f_id')->where('id',12113)->get();
		$res=json_decode(json_encode($res),1);
		//var_dump($res); 
		var_dump($res);
		
/* 	$a=1;
	while($a<163480){	
		$f_id=mt_rand(26,110125);
		$i_id=mt_rand(26,110125);
		if($f_id==$i_id){
			$f_id-=1;
		}
		
		$data[]=[
				'f_id'=>$f_id,
				'i_id'=>$i_id,
				'time'=>0
		];
		if($a%500==0){
			DB::table('relation')->insert($data);
			unset($data);
		}
		$a++;
	}	
		DB::table('relation')->insert($data);
		
		
		
		 */
		
		
	/* 	$arr=['q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m'];
		$a=1;
		while($a<100000){
			$name='';
			$x=0;
			$y=25;
			while(true){
				$i=mt_rand($x,$y);
				if(empty($arr[$i])){
					break;
				}
			
				$name.=$arr[$i];
				$x-=2;
				$y+=2;
			}
			
			$phone=mt_rand(10000000000,19999999999);
			$rtime=mt_rand(999999999,1442080001);
			$lasttime=$rtime+mt_rand(0,100000000);
			$data[]=[
					'name'=>$name,
					'password' => 'e10adc3949ba59abbe56e057f20f883e',
					'phone' => $phone,
					'rtime' =>$rtime,
					'lasttime' => $lasttime,
			];
			
			if($a%500==0){
				Users::insert($data);
				unset($data);
			}
			$a++;
		}
		
		if(!empty($data)){
			Users::insert($data);
		}
		
		echo 'OK'; */
	}
	
}