<?php
	include("./dbConnection.php");

	$sql = "SHOW TABLES FROM $dbname";
	$result = mysqli_query($link, $sql);

	if (!$result) {
	    echo "DB Error, could not list tables\n";
	    echo 'MySQL Error: ' . mysqli_error();
	    exit;
	}

	while ($row = mysqli_fetch_row($result)) {?>
	<option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>  
	<?php
	}