<style>
	body {
		background-color: #111;
		color: #fff;
	}
</style>
<?php 

session_start();
//error_reporting(0);

$link = mysqli_connect("mysql.hostinger.pt","u206790186_hytek","Mickael01","u206790186_spbd");
if (!$link) {
	$link = mysqli_connect("localhost","root","","hytek_db"); 
}

$me = "ID = ".$_SESSION['id_sess'];

/* <?php echo get($link,"selectCol","table","whereCond."); ?> */
function get($link,$col,$table,$who){
	$rslt = "select ".$col." FROM ".$table;
	if(isset($who)){ 
		$rslt = $rslt." WHERE ".$who;}
	$result = mysqli_query($link,$rslt);
	while ($row = mysqli_fetch_assoc($result)) {
		$rslt = $row[$col];
		return $rslt;
	}
}

?>
<div id="users">
  <input class="search" placeholder="Search" />
  <button class="sort" data-sort="name">Sort by name</button>

<?php
	if (isset($_SESSION['id_sess'])) {
		get($link,"title","mytabs",$me);
	}else{
		$_SESSION['id_sess']="2";
	}
?>
  <ul class="list">

    <li><span class="name">Jonny Stromberg</span><a href="lol" class="url">lol</a><p class="addedDate">1986</p></li>
    <li><span class="name">google.com</span><a href="google.com" class="url">google</a><p class="addedDate">1986</p></li>
    <li><span class="name">Jonny Stromberg</span><a href="lol" class="url">lol</a><p class="addedDate">1986</p></li>
    <li><span class="name">Jonny Stromberg</span><a href="lol" class="url">lol</a><p class="addedDate">1986</p></li>
    <li><span class="name">Jonny Stromberg</span><a href="lol" class="url">lol</a><p class="addedDate">1986</p></li>
    <li><span class="name">Jonny Stromberg</span><a href="lol" class="url">lol</a><p class="addedDate">1986</p></li>

  </ul>

</div>
<script src="http://listjs.com/no-cdn/list.js"></script>
<script>
	var options = { valueNames: [ 'name', 'addedDate', 'url' ] };
	var userList = new List('users', options);
</script>