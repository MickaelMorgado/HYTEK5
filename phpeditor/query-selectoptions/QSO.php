<?php
	include("./dbConnection.php");
	$column = "Examples_data";
	$qyr = "SHOW COLUMNS FROM ".$column;
	$result = mysqli_query($link,$qyr);
	if (!$result) {
	    echo 'Could not run query: ' . mysqli_error();
	    exit;
	}
	?> <option value="*">*</option>	<?php
	if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {
	    	?>
	    		<option value="<?php echo $row['Field']; ?>"><?php echo $row['Field']; ?></option>
	    	<?php
		}
	}else{echo "no columns";}
		
?>