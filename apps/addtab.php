<?php 
	@require_once('../../dbConnection.php');
	
	$url = $_POST['url'];
	$title = $_POST['title'];
	$url = str_replace(array("http://", "https://"), "", $url);
	$date = date('Y/m/d H:i:s');

	if($title==''){
		$title = $url;
	}

	if(($title!='' || $url!='') && $url!=''){
		if (isset($_POST['imp'])) {
			$query = "INSERT INTO mostimportant VALUES (NULL,'$_SESSION[id_session]','$title','$url')";
		}else{
			$query = "INSERT INTO mytabs VALUES (NULL,'$_SESSION[id_session]','$title','$url','$date','0')";
		}
		mysqli_query($link, $query);
		mysqli_close($link);
		echo "link=added";
	}else{
		echo "link=not added";
	}

?>