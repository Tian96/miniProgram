<?php
	require_once '../key.php';
	if(!isset($_SESSION['admin_id'])){
	    $home_url = 'login.php';
	    header('Location:'.$home_url);
	}else{
		$admin_id=$_SESSION['admin_id'];
		$admin_name=$_SESSION['admin_name'];
	}
?>