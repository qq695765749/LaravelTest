<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Test1 extends Authenticatable
{
	protected $table = 'test';
	//protected $primaryKey = 'id';
	
 	/* public static function test(){
 		 return 5566633;
 	} */
}
