<?php 
include 'shooters-userdata.php';
switch ($settings) {
	case 0:
		echo "<link rel='stylesheet' href='stylesheets/low-settings.css'>";
		?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: low-settings.css")});</script><?php
		break;
	case 1:
		echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
		?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});</script><?php
		break;
	case 2:
		echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
		echo "<link rel='stylesheet' href='stylesheets/ultra-settings.css'>";
		?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: ultra-settings.css")});</script>
		<div class="smoke"></div>
		<div class="light"></div><?php
		break;
	
	default:
		echo "<link rel='stylesheet' href='stylesheets/normal-settings.css'>";
		?><script>$(document).ready(function () {$('.loading-statut').append("<br/>loading: normal-settings.css")});</script><?php
		break;
}
?>