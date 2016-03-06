<?php 
	if (isset($link)) {
		if (isset($sql)) {
			$result = mysqli_query($link,$sql);
			while ($row = mysqli_fetch_assoc($result)) {
			}
		}else{echo "\$sql not defined";}
	}else{echo "\$link not defined";}
?>