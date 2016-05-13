<?php 
$servername = $_GET['servername'];
$username = $_GET['username'];
$password = $_GET['password'];
$dbname = $_GET['tablename'];
$link = mysqli_connect($servername,$username,$password,"dbphp");
//$a="";
$b="";
$c="";
for ($i=0; $i < $_GET['numberofinput']; $i++) { 
	// $a .= "field".$i."=".$_GET['field'.$i]; /* for edit */
	$b .= "`".$_GET['fieldname'.$i]."`";
	if (isset($_GET['field'.$i])) {
		$c .= "'".$_GET['field'.$i]."'";
	}else{
		$c .= "NULL";
	}
	if ($i < $_GET['numberofinput']-1) {
		$c .=",";
		$b .=",";
	}
}
$sql = "INSERT INTO $_GET[tablename] ($b) VALUES ($c);";
echo $sql;
//mysqli_query($link,$sql);

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
    ?><a href="index2.php/">go back</a> <?php
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
?>