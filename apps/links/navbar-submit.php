<?php 
	$input_val = $_POST['link-add-url'];
	switch ($_POST['method']) {
		case 'google':
			header("location: https://www.google.com/search?q=".$input_val);
			break;
		case 'youtube':
			header("location: https://www.youtube.com/results?search_query=".$input_val);
			break;
		case 'add':
			include('../../dbConnection.php');
		    $date 	= date('Y-m-d H:i:s');
			$sql 	= " INSERT INTO mytabs (id_tabs,title,url,data) 
						VALUES ($_SESSION[id_session],'','$input_val','$date')";
		    if ($input_val != '') {
				mysqli_query($link, $sql);
		    }
			header("location: ../../");
			break;
		default:
			header("location: https://www.google.com/search?q=".$input_val);
			break;
	}
?>