<?php
	session_start();
	header('Content-Type:text/html;charset=utf-8');
	error_reporting(E_ALL^E_NOTICE);
	//数据库的位置
	define('DB_HOST', 'localhost');
	//用户名
	define('DB_USER', 'root');
	//口令
	define('DB_PASSWORD', '');
	//数据库名
	define('DB_NAME','xiaochengxu');

	try{
		$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	}catch (Exception $e){
		die ("database connect error".$e->errorMessage());
	}
	mysqli_set_charset($conn,'utf8');
?>