<!DOCTYPE html>
<html lang="en">
<head>
	<title>{% block title %}{% if current_page.seo_title %}{{current_page.seo_title}}{% else %}WEBSITE - {{current_page.title}}{% endif %}{% endblock %}</title>
	<meta name="description" content="{% block description %}{% if current_page.seo_description %}{{current_page.seo_description}}{% else %}DEFAULT DESCRIPTION{% endif %}{% endblock %}">
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width" />
	<meta name="format-detection" content="telephone=no"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
	<link href="{% static "stylesheets/styles.css" %}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
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

<?php 
if (isset($_POST['link-host'])) { 
	$servername = $_POST['link-host']; }else{
	$servername = $_GET['link-host'];	
}
if (isset($_POST['link-username'])) { 
	$username = $_POST['link-username']; }else{
	$username = $_GET['link-username'];	
}
if (isset($_POST['link-password'])) { 
	$password = $_POST['link-password']; }else{
	$password = $_GET['link-password'];	
}
if (isset($_POST['link-tablename'])) { 
	$tablename = $_POST['link-tablename']; }else{
	$tablename = $_GET['link-tablename'];	
}
if (isset($_GET['db'])) { 
	$tablename = $_GET['db']; }else{
	$tablename = "";	
}

echo $servername.$username.$password.$dbname;
$link = mysqli_connect($servername,$username,$password,$dbname);


$jointfromfor = ""; 
for ($i=0; $i <= $_GET['colnumb']; $i++) {
	$jointfromfor .= $_POST['CN'.$i]." ".$_POST['SN'.$i];
	if ($i==$_GET['colnumb']){

	}else{
	$jointfromfor .= ", "; 
	}
}
//echo $jointfromfor;
$sql = "CREATE TABLE ".$_POST['tablename']." ($jointfromfor)";
echo $sql;

if (mysqli_query($link, $sql)) {
    echo "Table ".$_POST['tablename']." created successfully";
} else {
    echo "Error creating table: " . mysqli_error($link);
}

?>
<h3>Adding values : </h3>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
	
			<textarea style="width:100%" rows="10">
			</textarea>

		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<form action="add.php" id="editoradd">
				<?php 
					$i=0; 
					$c=0;
				?>
				<?php $result = mysqli_query($link,"SHOW COLUMNS FROM $_POST[tablename]");?>
				<?php
				while($row = mysqli_fetch_array($result)){
					if ($i==0) {
						?>
							<input type="hidden" value="<?php echo $row['Field'];?>" name="fieldname<?php echo $i ?>">
							<input type="text" value="<?php echo $row['Field'];?>" name="field<?php echo $i ?>" disabled>
						<?php
					}else{
						?>
							<input type="hidden" value="<?php echo $row['Field'];?>" name="fieldname<?php echo $i ?>">
							<input type="text" value="<?php echo $row['Field'];?>" name="field<?php echo $i ?>">
						<?php						
					}
					$i=$i+1;
				}
				?>
				<input type="hidden" name="tablename" value="<?php echo $_POST['tablename']; ?>">
				<input type="hidden" value="<?php echo $i ?>" name="numberofinput">
				<input type="hidden" value="<?php echo $servername ?>" name="servername">
				<input type="hidden" value="<?php echo $username ?>" name="username">
				<input type="hidden" value="<?php echo $password ?>" name="password">
				<input type="hidden" value="<?php echo $dbname ?>" name="dbname">
				<input type="submit">
			</form>
			notif: <span id="notif1"></span>
			<script>
			  /*$(function () {
			    $('#editoradd').bind('click', function (event) { event.preventDefault();

			      $.ajax({
			        type: 'POST',
			        url: 'add.php',
			        data: $('form').serialize(),
			        success: function (data) {
			          $('#notif1').html(data);
			        }
			      });

			    });
			  });*/
			</script>

		</div>
	</div>
</div>

<h3>Fetching values : </h3>


<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">

<textarea style="width:100%" rows="10">
$link = mysqli_connect("<?php echo $servername ?>","<?php echo $username ?>","<?php echo $password ?>","<?php echo $tablename ?>");
$sql = "SELECT * FROM <?php echo $tablename ?>";
$result = mysqli_query($link,$sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	<?php 
    	$result = mysqli_query($link,"SHOW COLUMNS FROM $tablename");
		while($row = mysqli_fetch_array($result)) {
			echo "echo &quot;".$row['Field']." : &quot;.&#36row['".$row['Field']."'];\n\t";
		}
		?>
    	<?php echo "echo &quot;<br>&quot;;"; ?>
    } 	
} else {
    echo "0 results";
}
</textarea>

		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">

		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<h3>debuguer</h3>
			<?php 


		$link = mysqli_connect("localhost","root","","dbphp");
		$sql = "SELECT * FROM oi";
		$result = mysqli_query($link,$sql);

		if ($result->num_rows > 0) {
		    while($row = mysqli_fetch_assoc($result)) {
		    	echo "ID_oi : ".$row['ID_oi'];
			echo "d : ".$row['d'];
			    	echo "<br>";    } 	
		} else {
		    echo "0 results";
		}




			?>

		</div>
	</div>
</div>

			</div>
	</div>
</div>
</body>
</html>