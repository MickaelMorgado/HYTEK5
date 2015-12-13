<?php 
error_reporting(0);
@include('../dbConnection.php');
	
if(isset($ID_SESSION)){		// CHECK FOR INITIALIZED SESSION

	if ($_POST['keywords']!='') {	// CHECK FOR SEARCH INPUT

		$keywords = $_POST['keywords'];
		$result = mysqli_query($link, "SELECT * FROM mytabs WHERE (url like '%$keywords%' OR title like '%$keywords%') AND id_tabs = '$_SESSION[id_session]' ORDER BY data DESC");
	
	} else {
			
		$tabs_order = mysqli_query($link, "SELECT tabs_order FROM settings WHERE id_settings = '$ID_SESSION'");
		$tabs_order = mysqli_fetch_assoc($tabs_order);
		$tabs_order = $tabs_order['tabs_order'];
		//echo $ID_SESSION;echo $tabs_order;
		$result = mysqli_query($link, "SELECT * FROM mytabs WHERE id_tabs = '$ID_SESSION' ORDER BY $tabs_order");
	
	}

	// LIST TABS
	if(mysqli_num_rows($result) > 0) {
		
		while($row = mysqli_fetch_assoc($result)){
			echo "<a href='http://$row[url]' title='$row[url]' class='aside-buttons' data-tabs-title='$row[title]' data-tabs-url='$row[url]' data-tabs-id='$row[id_tab]'>
					<span><img src='http://www.google.com/s2/favicons?domain=$row[url]' /></span>";
			
			if ($row['title'] == '') {	// IF EMPTY TITLE GET ONE BASED FROM THE LINK
				
				$url 	= str_replace(array("http://", "https://", "www."), "", $row['url']);//$link = "http://$url.com";
				$string = $url;
				$parts 	= explode(".",$string);
				$name 	= $parts[0];  //echo "$name";//$res = file_get_contents("http://designshack.net/articles/css/scrolljs/");//preg_match("~<title>(.*?)</title>~", $res, $match);//$tt = $match[1];//echo "$tt";//if($tt == ''){//echo "no found title";//}//}else{//echo "string";//}//}
				echo "<span> $name</span>" ;

			}else{
				
				echo "<span title='$row[title]'> $row[title]</span>";
			
			}
			
			echo "<span> $row[url]</span><span title='views'> $row[view]</span><span title='added date'> $row[data]</span>
			</a>
			" ;
		}

	}else{	// NO TABS SHOW THIS
		?>

		<a href='http://www.google.com' title='google' class='aside-buttons' data-tabs-title='google' data-tabs-url='google' data-tabs-id='null'>
			<span><img src='http://www.google.com/s2/favicons?domain=google.com' /></span>
			<span title='opcional title'>opcional title</span>
			<span>url.goes.here</span>
			<span title='number of views'># of views</span>
			<span title='added link date'>date added</span>
		</a>";

		<?php
	}
		
}else{	// IF NOT LOGGED IN SHOW THIS
	?>

	<div class="padded">
		<h1>Not logged :(</h1>
		<h2>follow <i class="fa fa-steam"></i> news</h2>
		<iframe src="http://store.steampowered.com/" width="100%" height="700px" frameborder="0"></iframe>
	</div>

	<?php
}
?>