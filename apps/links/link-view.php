<?php 
	include("../../dbConnection.php");
	$linkId = $_POST['linkid'];
	$date = $_POST['date'];
	$getViewQuery 	= "SELECT view FROM mytabs WHERE id_tabs = $_SESSION[id_session] AND id_tab = $linkId";

	/* GET VIEW FROM DB ;) */
	$getView = mysqli_query($link, $getViewQuery);
	$obtainedView = mysqli_fetch_assoc($getView);
	$obtainedView = $obtainedView['view'];

	/* CALCULATED VIEW FOR UPLOAD TO DB */
	$calculatedView = $obtainedView + 1;

	$updateView = "UPDATE mytabs SET view = $calculatedView , last_view = '$date' WHERE id_tab = $linkId AND id_tabs = $_SESSION[id_session]";
	mysqli_query($link,$updateView);
	echo $linkId.",".$obtainedView.",".$calculatedView." ".$date;
	//echo $updateView;
?>