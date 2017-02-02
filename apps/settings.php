<?php 
	$sql = "SELECT * FROM settings WHERE id_settings = $_SESSION[id_session]";
	$result = mysqli_query($link,$sql);
	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$bg = $row['bg'];
			$hbg = $row['hbg'];
			if ($hbg == '') { $hbg = "FFC600,1,1,0.05"; }
		} 
		$hbg = explode(",",$hbg);	
	}
?>
<?php if (isset($_SESSION['id_session'])): ?>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
		  <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1"class="panel-title">Change background</a></div>
		  <div id="collapse1" class="panel-collapse collapse">
			<div class="panel-body">
				<label for="bgcimgsrc">Set custom wallpaper (http://...)</label>
				<form action="apps/settings/setup.php" method="POST">
					<input id="bgcimgsrc" name="bg" type="input" placeholder="background image src" value="<?php echo $bg; ?>">
					<input type="submit" value="Apply">
				</form>
			</div>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"class="panel-title">Effects</a>
		  </div>
		  <div id="collapse2" class="panel-collapse collapse">
			<div class="panel-body">
				<form action="apps/settings/setupstyles.php" method="POST">
					Hover color : <input name="jscolor" class="jscolor {onFineChange:'update(this)'}" value="<?php echo $hbg[0]; ?>" placeholder="FFC600"><br/>
					<!--bg color bottom : <input type="text" value="#2F4F74" placeholder="#2F4F74"-->
					Mate effect : <input name="rangeMate" type="range" min="0" max="1" step="0.1" value="<?php echo $hbg[1]; ?>" id="rangeMate">
					Blocks opacity : <input name="rangeOpacity" type="range" min="0" max="1" step="0.1" value="<?php echo $hbg[2]; ?>" id="rangeOpacity">
					Glass opacity : <input name="rangeGlassOpacity" type="range" min="0" max="0.05" step="0.01" value="<?php echo $hbg[3]; ?>" id="rangeGlassOpacity">
					<input type="submit" value="Apply">
				</form>
			</div>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3"class="panel-title">More backgrounds</a></div>
		  <div id="collapse3" class="panel-collapse collapse"><div class="panel-body"><a data-toggle="modal" data-target=".laclass">Wallpapers</a></div></div>
		</div>
	</div>	
	<div class="modal fade laclass" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content well"><?php include('chooseWallpapers.php') ?></div>
		</div>
	</div>	
	<style>
		body {	
			background-image: url('<?php echo $bg ?>');
			background-position: center center;
			background-size: cover;
			background-repeat: no-repeat;	
		}
		.element:hover {						box-shadow: 0 0 10px -2px #<?php echo $hbg[0]; ?>;			}
		a:hover {								color: #<?php echo $hbg[0]; ?>;								}
		.progress .progress-bar {				background-color: #<?php echo $hbg[0]; ?>;					}
		.todolist .complete:checked + label{ 	background-color: #<?php echo $hbg[0]; ?>;					}
		input[type="file"] + label.has-file { 	border: 1px solid #<?php echo $hbg[0]; ?>;
												color: #<?php echo $hbg[0]; ?>; 							}
		body:after { 							opacity: <?php echo $hbg[1]; ?>; 							}
		.element {								background-color: rgba(21,21,21,<?php echo $hbg[2]; ?>);	}
		.element .glass	{						opacity: <?php echo $hbg[3]; ?>;							}
		.border-link img {						border: 1px solid #<?php echo $hbg[0]; ?>;					}
		.playlistlink.active img { 				border: 2px solid #<?php echo $hbg[0]; ?>; 					}
		.repeat-active,
		.shuffle-active {			
			text-shadow: 	0 0 5px #<?php echo $hbg[0]; ?>,
							0 0 10px #<?php echo $hbg[0]; ?>,
							0 0 15px #<?php echo $hbg[0]; ?>; 				
			color: #<?php echo $hbg[0]; ?>;
		}
	</style>
	<script>
		$('.jscolor').on("change",function(){$('#hoverColor')
			.html(".element:hover{box-shadow: 0 0 10px -2px #"+$(this).val()+"}.border-link img{border:1px solid #"+$(this).val()+"}.todolist .complete:checked+label{background-color: #"+$(this).val()+";}"); 	});
		$('#rangeMate').on("input",function(){$('#MateEffect')
			.html("body:after{opacity:"+$(this).val()+";}"); 																				});
		$('#rangeOpacity').on("input",function(){$('#elementsOpacity')
			.html(".element{background-color: rgba(21,21,21,"+$(this).val()+");}"); 														});
		$('#rangeGlassOpacity').on("input",function(){$('#elementsGlassOpacity')
			.html(".element .glass{opacity:"+$(this).val()+"}"); 																			});
	</script>
<?php else: ?>You need to log on to customize aspects<?php endif ?>