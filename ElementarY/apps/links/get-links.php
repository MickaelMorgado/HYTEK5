<?php 
	if (isset($_GET['order'])) {
		include("../../dbConnection.php");
		$order = $_GET['order'];
		$result = mysqli_query($link, "SELECT * FROM mytabs WHERE id_tabs = $_SESSION[id_session] ORDER BY ".$order);
	}else{
		$result = mysqli_query($link, "SELECT * FROM mytabs WHERE id_tabs = $_SESSION[id_session] ORDER BY `data` DESC");
	}
	while ($row = mysqli_fetch_assoc($result)) {
		if(!mysqli_num_rows($result)){ echo 'No results'; }
		else {
			$r0 = $row['id_tab'];
			$r1 = $row['title'];
			$r2 = $row['url'];
?>
	<li>
		<form class="htmlForm" action="apps/links/rm-link.php" method="post"> 
			<input type="hidden" value="<?php echo $r0; ?>" class="link-id" name="link-id">
			<input type="submit" value="" class="submit fa fa-trash-o" /> 
		</form>
		<div class="dropdown">
			<a href="#" class="submit fa" type="button" id="dropdownMenu<?php echo $r0 ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">E<span class="caret"></span></a>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu<?php echo $r0 ?>">
				<form action="apps/links/edit-link.php" method="post" class="htmlForm editForm" data-form="form<?php echo $r0; ?>"> 
					<input type="hidden"   value="<?php echo $r0; ?>" class="link-id"    name="link-id">
					<li><input type="text" value="<?php echo $r1; ?>" class="link-title" name="link-title"></li>
					<li><input type="text" value="<?php echo $r2; ?>" class="link-url"   name="link-url"></li>
					<li><input type="submit" value="edit" class="fa-pencil" /></li> 
				</form>
			</ul>
		</div>
		<?php 
			if(strpos($r2, "http://") !== false){ }
    		else { $r2 = "http://".$r2; } 	
    	?>
		<a href="<?php echo $r2; ?>" class="link-list title" data-linkid="<?php echo $r0; ?>">
			<span class="url" style="display:none"><?php echo $r2 ?></span>
			<?php 
			if ($row['title'] == '') {	// IF EMPTY TITLE GET ONE BASED FROM THE LINK
				$url 	= str_replace(array("http://", "https://", "www."), "", $row['url']);//$link = "http://$url.com";
				$string = $url;
				$parts 	= explode(".",$string);
				$name 	= $parts[0];  //echo "$name";//$res = file_get_contents("http://designshack.net/articles/css/scrolljs/");//preg_match("~<title>(.*?)</title>~", $res, $match);//$tt = $match[1];//echo "$tt";//if($tt == ''){//echo "no found title";//}//}else{//echo "string";//}//}
				echo $name;
			}else{
				echo $r1; 
			} 
			?>
		</a>
	</li>
<?php 
		}
	} 
?>