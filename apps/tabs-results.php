<?php session_start();
	@include('../../dbConnection.php');
	$keywords = $_POST['keywords'];
	if(isset($_SESSION['id_session'])){
		$result = mysqli_query($link, "SELECT * FROM mytabs WHERE (url like '%$keywords%' OR title like '%$keywords%') AND id_tabs = '$_SESSION[id_session]' ORDER BY data DESC");
		while($row=mysqli_fetch_assoc($result)){
			echo "<a href='http://$row[url]' title='$row[url]' class='aside-buttons'>
					<span><img src='http://www.google.com/s2/favicons?domain=$row[url]' /></span>";
			if ( $row['title']=='' ) {
				$url = str_replace(array("http://", "https://", "www."), "", $row['url']);//$link = "http://$url.com";
				$string = $url;
				$parts=explode(".",$string);
				$name=$parts[0];
				//echo "$name";//$res = file_get_contents("http://designshack.net/articles/css/scrolljs/");//preg_match("~<title>(.*?)</title>~", $res, $match);//$tt = $match[1];//echo "$tt";//if($tt == ''){//echo "no found title";//}//}else{//echo "string";//}//}
				echo "<span> $name</span>" ;
			}else{
				echo "<span> $row[title]</span>";
			}
				echo "<span> $row[url]</span>
			</a>" ;
			
			// echo "
			// <div class='edit-tabs-form'>
			// 	<!--form action='results/tabsrm.php' method='POST'>
			// 		<input type='hidden' value=$row[id_tab] name='tabsrmid'>
			// 		<input type='submit' class='edit' value='X' title='Remove link'>
			// 	</form>
			// 	<a href='?tabsup=$row[id_tab]' data-reveal-id='tabsupmodal$row[id_tab]' class='update edit' title='Update link'>U</a>
			// 	<div id='tabsupmodal$row[id_tab]' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>
			// 	  <h2 id='modalTitle'>Editar: $row[title]</h2>
			// 		<form action='results/tabsup.php' method='POST'>
			// 			<div class='row'>
			// 				<div class='small-12 medium-5 columns'>
			// 					<input type='hidden' value='$row[id_tab]' name='tabid'>
			// 					title:<input type='text' value='$row[title]' name='title'>
			// 				</div>
			// 				<div class='small-12 medium-5 columns'>
			// 					url:<input type='text' value='$row[url]' name='url'>
			// 				</div>
			// 				<div class='small-12 medium-2 columns'>
			// 					<input type='submit' class='button' value='ok'>
			// 				</div>
			// 			</div>
			// 		</form>
			// 	  <a class='close-reveal-modal' aria-label='Close'>&#215;</a>
			// 	</div-->
			// </div>
			// ";
			?>

			<?php
			echo "</a>";
		}
	}else{
		echo "not logged";
	}
?>