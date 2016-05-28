<?php 
session_start();

/* ERROR REPORTING */

	if (isset($error_reporting)) {
		error_reporting(1);	
	}else{
		error_reporting(0);	
	}

/* DEBUG PHP ACTIONS (NO HEADER REDIRECTIONS FOR DEBUGING PHP ACTIONS (APPS/FILES)) */

	$debug = false;

/* DB CONNECTIONS */

	$link = mysqli_connect("mysql.hostinger.pt","u206790186_hytek","Mickael01","u206790186_spbd");
	if (!$link) {
		$link = mysqli_connect("localhost","root","","hytek_db"); 
	}

?>