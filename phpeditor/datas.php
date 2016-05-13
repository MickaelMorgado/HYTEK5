<form action="#" name="selectform">
	<input type="text" placeholder="examples_data" name="table">
	<input type="submit" value="fetch assoc">
</form>
<form action="#" name="insertform">
	<input type="text" placeholder="examples_data" name="table">
	<input type="text" placeholder="examples_data" name="insertval">
	<input type="submit" value="insert">
</form>
<?php 
	
	$link = mysqli_connect("localhost","root","","test"); 

	$table = $_GET['table'];
	$insertform = $_GET['insertval'];
	$qyr = "SELECT * FROM ".$table;
	$result = mysqli_query($link,$qyr);

	if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {
	    	echo $row['ID']."<br>";
		}
	}else{echo "no datas selected</br>";}

	if (isset($insertval)) {
		
		$qyr = "INSERT INTO `test`.`examples_data` (`ID`, `ExampleName`, `ExampleAttributes`, `ExampleConnection`) VALUES (NULL, '$insertform', '$insertform', NULL)";
		$result = mysqli_query($link,$qyr);

	}else{
		echo "No data inserted";
	}

?>