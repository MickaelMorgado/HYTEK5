<?php 
session_start();
error_reporting(0);
$link = mysqli_connect("mysql.hostinger.pt","u206790186_hytek","Mickael01","u206790186_spbd");
if (!$link) {
	$link = mysqli_connect("localhost","root","","hytek_db"); 
}
?>
