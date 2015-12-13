<?php
	@require_once('../../dbConnection.php');
	$tabsrmid = $_POST['tabId'];
	if (isset($_POST['imp'])) {
		mysqli_query($link, "DELETE FROM mostimportant WHERE id_mostimportant = $tabsrmid ");
	}else{
		mysqli_query($link, "DELETE FROM mytabs WHERE id_tab = $tabsrmid ");
	}
?>