<?php
namespace App\Http\controllers\Git;
use App\Http\Controllers\Controller;
use App\Test1;
class GitController extends Controller
{
    public function autopull(){

		
		/* $token = '';
		 $httpToken = isset($_SERVER['HTTP_X_GITLAB_TOKEN']) ? $_SERVER['HTTP_X_GITLAB_TOKEN'] : '';
		if ($token && $httpToken != $token) {
		    header('HTTP/1.1 403 Permission Denied');
		    die('Permission denied.');
		}  */
	
		$local = '/var/www/html/LaravelTest';
		 if (!is_dir($local)) {
		    header('HTTP/1.1 500 Internal Server Error');
		    die('Local directory is missing');
		}
		
		$payload = file_get_contents('php://input');
		if (!$payload) {
		    header('HTTP/1.1 400 Bad Request');
		    die('HTTP HEADER or POST is missing.');
		}
		
		
		echo shell_exec("cd {$local} && git pull 2>&1");
		die("done " . date('Y-m-d H:i:s', time())); 
    }
   
    
}

