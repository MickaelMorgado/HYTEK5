<!DOCTYPE html>
<html lang="en">
<head>
	<title>WEBSITE</title>
	<meta name="description" content="{% block description %}{% if current_page.seo_description %}{{current_page.seo_description}}{% else %}DEFAULT DESCRIPTION{% endif %}{% endblock %}">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width" />
	<meta name="format-detection" content="telephone=no"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="stylesheets/styles.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<!--[if lt IE 9]>
	  <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <link rel="stylesheet" href="{% static 'stylesheets/ie.css' %}">
	<![endif]-->
	
</head>
<body>

<?php 
if (isset($_GET['dbname'])){}else{$_GET['dbname']='';}
if (isset($_GET['tablename'])){}else{$_GET['tablename']='';}
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<a target="_blank" href="http://localhost/phpmyadmin/">phpmyadmin</a>
			<form action="index.php" method='GET'>
				<select name="dbname" id="dbn">
				<?php 
					// Usage without mysqli_list_dbs()
					$link = mysqli_connect('localhost', 'root', '');
					$res = mysqli_query($link,"SHOW DATABASES");

					while ($row = mysqli_fetch_assoc($res)) {
					    echo "<option value='".$row['Database']."' ";
						if (isset($_GET['dbname'])) {
							if ($_GET['dbname']==$row['Database']) { 
								echo "selected"; 
							}
						}
						echo ">".$row['Database']."</option>";
					}
				?>
				</select>
				<input type="submit">
			</form>
			<form action="#" method="GET">
				<?php 
					if (isset($_GET['dbname'])) { 
						$dbname = $_GET['dbname']; }else{
						$dbname = "no dbname selected";	
					}
				?>
				<input type="hidden" name="dbname" value="<?php echo $dbname; ?>">
				<select name="tablename" id="tbn">
					<?php 
					$dbname = $dbname;

					if (!mysqli_connect('localhost', 'root', '')) {
					    echo 'Could not connect to mysql';
					    exit;
					}

					$sql = "SHOW TABLES FROM $dbname";
					$result = mysqli_query($link,$sql);

					while ($row = mysqli_fetch_row($result)) {
						echo "<option value='".$row[0]."' ";
						if (isset($_GET['tablename'])) {
							if ($_GET['tablename']==$row[0]) { 
								echo "selected"; 
							}
						}
						echo ">".$row[0]."</option>";
					}

					mysqli_free_result($result);
					?>
				</select>			
				<input type="submit">
			</form>

		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<form action="#" method="GET">
				<input type="hidden" name="dbname" value="<?php echo $dbname; ?>">
				<input type="hidden" name="tablename" value="<?php echo $_GET['tablename']; ?>">
				select:	 
				<?php 
					$link = mysqli_connect("localhost","root","",$dbname);
					$sql = "SHOW COLUMNS FROM $_GET[tablename]";
					$result = mysqli_query($link,$sql);
					?>
					<input type="text" name="select" style="display:block;width:100%" value="<?php
						$num_rows = mysqli_num_rows($result);
						$i = 0;
						while($row = mysqli_fetch_array($result)){
							$i = $i+1;
							echo $row['Field'];
							if ($i < $num_rows) {
								echo " , ";
							}else{
								echo "";
							}
						}
					?>">
				<input type="submit">
			</form>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6">
		<textarea rows="10">
			<?php 

				$link = mysqli_connect("localhost","root","",$dbname);

				if (isset($_GET['select'])) {
					$sql = "SELECT $_GET[select] FROM $_GET[tablename] LIMIT 20";
				}else{
					$sql = "SELECT * FROM $_GET[tablename] LIMIT 20";
				}

				$result = mysqli_query($link,$sql);

				if ($result->num_rows > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						print_r($row);
					} 	
				}else{
					echo "0 results";
				}

			?>
		</textarea>
	</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<textarea rows="2">
	$link = mysqli_connect("localhost","root","","<?php echo $dbname ?>");			
			</textarea>
			SELECT
			<textarea rows="14">

	<?php 
	if (isset($_GET['select'])) {?>$sql = "SELECT <?php echo $_GET['select'] ?> FROM <?php echo $_GET['tablename'] ?>";
	<?php }else{ ?>	$sql = "SELECT * FROM <?php echo $_GET['tablename'] ?>";
	<?php
	}
	?>$result = mysqli_query($link,$sql);

	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['Field'];
			echo &quot;<br>&quot;;
		} 	
	}else{
		echo "0 results";
	}

			</textarea>
			UPDATE
			<textarea rows="6">

	$sql = "UPDATE `<?php echo $_GET['tablename'] ?>` SET `content` = 'newvalue' WHERE `sometable` = somevalue";
	mysqli_query($link,$sql);

			</textarea>
			DELETE
			<textarea rows="6">

	$sql = "$sql = "DELETE FROM <?php echo $_GET['tablename'] ?> WHERE sometable = somevalue;
	mysqli_query($link,$sql);

			</textarea>
		</div>
	</div>
</div>

	

<script src="js/main.js"></script>
</body>
</html>