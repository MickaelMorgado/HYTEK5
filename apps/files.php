<h4>files :</h4>
<ul>
<?php
	$result = mysqli_query($link, "SELECT * FROM files WHERE id_session = $_SESSION[id_session]");
	while($row=mysqli_fetch_assoc($result)){
		echo "<li><a href='../HYTEK3/$row[path_file]'>$row[name_file]</a></li>";
	}
?>