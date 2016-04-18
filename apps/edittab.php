<?php 
	require_once('../dbConnection.php');
	$id = $_POST['id'];
	$title = $_POST['title'];
	$url = str_replace(array("http://", "https://"), "", $_POST['url']);
	if (isset($_POST['imp'])) {
		$sql = "UPDATE mostimportant SET title = '$title', url = '$url' WHERE id_mostimportant = $id AND id_most = $_SESSION[id_session]";
	}else{
		$sql = "UPDATE mytabs SET title = '$title', url = '$url' WHERE id_tab = $id AND id_tabs = $_SESSION[id_session]";
	}
	mysqli_query($link, $sql); 
?>