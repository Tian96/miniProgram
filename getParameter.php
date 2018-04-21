<?php
	include 'api.php';
	$api_data = new api; 
	if($_REQUEST['number']=="1"){
		$data=$api_data->user($_REQUEST['code']);
		print_r($data);
	}
?>