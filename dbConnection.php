<?php 
session_start();

/* ERROR REPORTING */

	if (isset($error_reporting)) {
		error_reporting(1);	
	}else{
		error_reporting(0);	
	}

/* DEBUG PHP ACTIONS (NO HEADER REDIRECTIONS FOR DEBUGING PHP ACTIONS (APPS/FILES)) */

	$query = true;
	$debug = false;

/* DB CONNECTIONS */

	include('credencials.php');

	$link = mysqli_connect($host,$user,$pass,$dtbs);
	if (!$link) {
		$link = mysqli_connect($l_host,$l_user,$l_pass,$l_dtbs); 
	}

?>