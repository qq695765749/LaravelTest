<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
	protected $table = 'hf_staff';
	//protected $primaryKey = 'id';
	
 	/* public static function test(){
 		 return 5566633;
 	} */
}
