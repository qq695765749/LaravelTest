<?php
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