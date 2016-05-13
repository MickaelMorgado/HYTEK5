<!DOCTYPE html>
<html lang="en">
<head>
	<title>WEBSITE - {{current_page.title}}{% endif %}{% endblock %}</title>
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
<div class="container">
	<div class="row">
		<div class="col-xs-12">
				
			 
			<h3>create adding apps: </h3>
			<form action="#" method="GET">
				<?php 
					if (isset($_GET['dbname'])) { 
						$dbname = $_GET['dbname']; }else{
						$dbname = "";	
					}
				?>
				<input type="text" placeholder="dbname" name="dbname" value="<?php echo $dbname; ?>">	
			
				<?php 
					if (isset($_GET['host'])) { 
						$host = $_GET['host']; }else{
						$host = "";	
					}
				?>
				<input type="text" placeholder="host" name="host" value="<?php echo $host; ?>">
			
				<?php 
					if (isset($_GET['username'])) { 
						$username = $_GET['username']; }else{
						$username = "";	
					}
				?>
				<input type="text" placeholder="username" name="username" value="<?php echo $username; ?>">
			
				<?php 
					if (isset($_GET['password'])) { 
						$password = $_GET['password']; }else{
						$password = "";	
					}
				?>
				<input type="password" placeholder="password" name="password" value="<?php echo $password; ?>">
			
				<?php 
					if (isset($_GET['tablename'])) { 
						$tablename = $_GET['tablename']; }else{
						$tablename = "";	
					}
				?>
				<input type="text" placeholder="tablename" name="tablename" value="<?php echo $tablename; ?>">
			
				<?php 
					if (isset($_GET['columnsnumber'])) { 
						$columnsnumber = $_GET['columnsnumber']; }else{
						$columnsnumber = "";	
					}
				?>
				<input type="number" placeholder="columnsnumber" name="columnsnumber" value="<?php echo $columnsnumber; ?>">
			
				<input type="submit">
			</form>
			
			<?php 
			
			echo "try connect to : <b>'$host'</b> as <b>'$username'</b> selecting <b>'$dbname'</b> table<br/>";
			
			$link = mysqli_connect($host, $username, $password);
			
			if (!$link) {
			    echo 'Could not connect to mysql';
			    exit;
			}else{
				echo "Connection established <br/>";
			}
			
			$sql = "SHOW TABLES FROM $dbname";
			$result = mysqli_query($link,$sql);
			
			if (!$result) {
			    echo "DB Error, could not list tables\n";
			    echo 'MySQL Error: ' . mysql_error();
			    exit;
			}else{
				echo "Getting tables ... <br/><br/>";
			}
			
			if ($tablename!='') {
				echo "try to find a existed table name with <b>'$tablename'</b> ... <br/><br/>";
				echo "Showing tables: <br/>";
				while ($row = mysqli_fetch_row($result)) {
				    echo "-- {$row[0]} <a href='createdb.php?colnumb=1&db={$row[0]}&link-host=$host&link-username=$username&link-password=$password&link-tablename=$tablename'>edit</a><br/>";
				}
			
			    if ($tablename == $row[0]) {
			    	echo "<br/><br/>Error cant create table because a table with <b>'$tablename'</b> name already exist ! Please choose another.";
			    }else{
			    	echo "<br/><br/>New table ready to be created as <b>'$tablename'</b>.</br>";
			    }
			
				if ($columnsnumber!=0) {?>
				<form action="createdb.php?colnumb=<?php echo $columnsnumber; ?>" method="POST">
					
					<input type="hidden" name="link-host" value="<?php echo $host; ?>">
					<input type="hidden" name="link-username" value="<?php echo $username; ?>">
					<input type="hidden" name="link-password" value="<?php echo $password; ?>">
					<input type="hidden" name="link-tablename" value="<?php echo $dbname; ?>">
			
					<input type="hidden" name="tablename" value="<?php echo $tablename; ?>"><br/>
					<input type="text" name="CN0" value="ID_<?php echo $tablename; ?>">
					<select name="SN0" id="id">
						<option value="INT(6)" selected >INT(6)</option>
					</select>Autoincremented<br/><?php
					for ($i=0; $i < $columnsnumber; $i++) { 
						?>
						<input type="text" name="CN<?php echo $i+1;?>">
						<select name="SN<?php echo $i+1;?>" id="id">
							<option value="INT(6)" selected >INT(6)</option>
							<option value="VARCHAR(300)">VARCHAR(300)</option>
							<option value="TEXT(500)">TEXT(500)</option>
							<option value="DATE">DATE</option>
						</select>
						<br/>
						<?php
					}
				?>
				<input type="submit" value="create">
				</form>
				<?php
				}else{
					echo "No columns number !";
				}
			}else{
				echo "please find for a tablename";
			}
			
			mysqli_free_result($result);
			
			
			?>
			
			
			
			</div>
	</div>
</div>
</body>
</html>