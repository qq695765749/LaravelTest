<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
	protected $table = 'users';
	//protected $primaryKey = 'id';
	
 	/* public static function test(){
 		 return 5566633;
 	} */
}
