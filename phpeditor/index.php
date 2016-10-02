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
			<form action="index.php" method='GET'>
				<div class="row">
					<div class="col-xs-12 col-sm-2 col-md-2">
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
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8">
						<input type="submit">
					</div>
					<div class="col-xs-12 col-sm-2 col-md-2"><a target="_blank" href="http://localhost/phpmyadmin/">phpmyadmin</a></div>
				</div>
			</form>
			<form action="#" method="GET">
				<?php 
					if (isset($_GET['dbname'])) { 
						$dbname = $_GET['dbname']; }else{
						$dbname = "no dbname selected";	
					}
				?>
				<div class="row">
					<div class="col-xs-12 col-sm-2 col-md-2">
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
					</div>
					<div class="col-xs-12 col-sm-10 col-md-10">
						<input type="submit">
					</div>
				</div>
			</form>

		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">SELECT:</div>
	</div>
	<div class="row">
		<form action="#" method="GET">
			<div class="col-xs-12 col-sm-5 col-md-5">
				<input type="hidden" name="dbname" value="<?php echo $dbname; ?>">
				<input type="hidden" name="tablename" value="<?php echo $_GET['tablename']; ?>">
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
			</div>
			<div class="col-xs-12 col-sm-7 col-md-7">
				<input type="submit">
			</div>
		</form>
	</div>
</div>
<div class="container">
	<form action="#" method="GET">
		<input type="hidden" name="dbname" value="<?php echo $dbname; ?>">
		<input type="hidden" name="tablename" value="<?php echo $_GET['tablename']; ?>">
		<input type="hidden" name="select" value="<?php echo $_GET['select']; ?>">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">WHERE:</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-2 col-md-2">
				<?php 
					$link = mysqli_connect("localhost","root","",$dbname);
					$sql = "SHOW COLUMNS FROM $_GET[tablename]";
					$result = mysqli_query($link,$sql);
					?>
					<select name="wherefirst" id="wherefirst">
					<?php if (isset($_GET['wherefirst'])): ?>
					<?php else: ?>
						<option value="">--</option>
					<?php endif ?>
					<?php
						$num_rows = mysqli_num_rows($result);
						$i = 0;
						while($row = mysqli_fetch_array($result)){
							?>
								<option value="<?php echo $row['Field']; ?>"><?php echo $row['Field']; ?></option>
							<?php
						}
					?>">
					</select>
			</div>
			<div class="col-xs-12 col-sm-1 col-md-1">
				<select name="operator" id="operator">
					<option value="=" selected>=</option>
				</select>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2">
				<input type="wherevalue" name="wherevalue" placeholder="wherevalue" value="<?php if(isset($_GET['wherevalue'])){echo $_GET['wherevalue'];} ?>">
			</div>		
			<div class="col-xs-12 col-sm-3 col-md-3">
				<input type="submit" class="opcional class">
			</div>
		</div>
	</form>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4">
			RESULTS (limit 20 query)
			<textarea rows="10"><?php 

					$link = mysqli_connect("localhost","root","",$dbname);

					if (isset($_GET['select'])) {
						if (isset($_GET['wherefirst'])) {
							$sql = "SELECT $_GET[select] FROM $_GET[tablename] WHERE `".$_GET['wherefirst']."` = '".$_GET['wherevalue']."' LIMIT 20";
						}else{
							$sql = "SELECT $_GET[select] FROM $_GET[tablename] LIMIT 20";
						}
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
		<div class="col-xs-12 col-sm-8 col-md-8">
			CONNECTION
			<textarea rows="1">$link = mysqli_connect("localhost","root","","<?php echo $dbname ?>");</textarea>
			INSERT
			<textarea rows="4">$insert = "INSERT INTO `<?php echo $_GET['tablename'] ?>` (<?php echo $_GET['select'] ?>) VALUES (<?php echo $_GET['select'] ?>)";	
mysqli_query($link,$insert);
			</textarea>
			SELECT
			<textarea rows="14"><?php if (isset($_GET['select'])): ?>
<?php if (isset($_GET['wherefirst'])): ?>
$sql = "SELECT <?php echo $_GET['select'] ?> FROM <?php echo $_GET['tablename'] ?> WHERE `<?php echo "$_GET[wherefirst]"; ?>` = '<?php echo $_GET['wherevalue']; ?>'"
<?php else: ?>
$sql = "SELECT <?php echo $_GET['select'] ?> FROM <?php echo $_GET['tablename'] ?>";
<?php endif ?>
<?php else: ?>
$sql = "SELECT * FROM <?php echo $_GET['tablename'] ?>";
<?php endif ?>

$result = mysqli_query($link,$sql);
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
			<textarea rows="6"><?php if (isset($_GET['wherefirst'])): ?>
$sql = "UPDATE `<?php echo $_GET['tablename'] ?>` SET `content` = 'newvalue' WHERE `<?php echo "$_GET[wherefirst]"; ?>` = <?php echo $_GET['wherevalue']; ?>";				
<?php else: ?>
$sql = "UPDATE `<?php echo $_GET['tablename'] ?>` SET `content` = 'newvalue'";
<?php endif ?>
mysqli_query($link,$sql);


			</textarea>
			DELETE
			<textarea rows="6"><?php if (isset($_GET['wherefirst'])): ?>
$sql = "$sql = "DELETE * FROM <?php echo $_GET['tablename'] ?> WHERE <?php echo "$_GET[wherefirst]"; ?> = <?php echo $_GET['wherevalue']; ?>";
<?php else: ?>
$sql = "$sql = "DELETE * FROM <?php echo $_GET['tablename'] ?>";
<?php endif ?>
mysqli_query($link,$sql);

			</textarea>
		</div>
	</div>
</div>

	

<script src="js/main.js"></script>
</body>
</html>