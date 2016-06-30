<?php 
	$sql = "SELECT * FROM weapons WHERE id_player = $_SESSION[id_player]";
	$result = mysqli_query($link,$sql);

	if ($result->num_rows > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$cursor = $row['src'];
			$sound_fire = $row['sound_fire'];
			$sound_reload = $row['sound_reload'];
		} 	
	}
?>
<h1>Armory</h1>
<img src="img/gun.jpg" alt="">
<div class="scrollable">
	<a class="link" data-toggle="modal" data-target=".armorypopup">Weapons Shop</a>
	<div class="modal fade armorypopup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				
				<?php 
					if(isset($_SESSION['id_player']) != '') { 
						$result = mysqli_query($link, "SELECT * FROM players WHERE id_player = $_SESSION[id_player]");
						while ($row=mysqli_fetch_assoc($result)){
							$coins = $row['coins'];
							$weaponappearance = $row['src'];
							$weaponsound = $row['sound_fire'];
							$weaponsoundreload = $row['sound_reload'];
						};
						?>
						
						<h1>Armory <?php echo $coins; ?> €</h1>
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-sm-12">
										<ul class="nav nav-tabs ">
											<li class="active"><a href="#tab_default_1" data-toggle="tab">Weapon 1</a></li>
											<li><a href="#tab_default_2" data-toggle="tab">Weapon 2</a></li>
										</ul>
									</div>
									<div class="col-sm-12">
										<div class="tab-content">
											<!-- WEAPON 1 -->
											<div class="tab-pane active" id="tab_default_1">
												<div class="row">
													<div class="col-xs-4">
														<form action="set_weapon.php" method="post">
															<label for="appearance">appear (default: cursor5.png)</label>
															<select name="weaponappearance" id="weaponappearance">
																<?php 
																	$dir = "Weapons/cursors/";
																	$dh = opendir($dir);
																	while (false !== ($filename = readdir($dh))) {
																		if ($filename != "." && $filename != "..") {
																			if ($filename == $cursor) {
																				?><option selected value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}else{
																				?><option value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}
																	    }
																	}
																?>	
															</select>
															<label for="sound">sound: (default: gun.mp3)</label>
															<select name="weaponsound" id="weaponsound" >
																<?php 
																	$dir = "Weapons/fireaudio/";
																	$dh = opendir($dir);
																	while (false !== ($filename = readdir($dh))) {
																		if ($filename != "." && $filename != "..") {
																			if ($filename == $sound_fire) {
																				?><option selected value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}else{
																				?><option value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}
																	    }
																	}
																?>	
															</select>
															<label for="reload-sound">reload sound: (default: reload.mp3)</label>
															<select name="weaponreloadsound" id="weaponreloadsound">
																<?php 
																	$dir = "Weapons/reloadaudio/";
																	$dh = opendir($dir);
																	while (false !== ($filename = readdir($dh))) {
																		if ($filename != "." && $filename != "..") {
																			if ($filename == $sound_reload) {
																				?><option selected value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}else{
																				?><option value="<?php echo $filename; ?>"><?php echo $filename; ?></option><?php
																			}
																	    }
																	}
																?>	
															</select>
															<br>
															<input type="submit" value="apply">
														</form>
													</div>
													<div class="col-xs-8">

															<?php include("apps/preview-weapons.php") ?>

													</div>
													<div class="col-xs-12 col-sm-6 col-md-6">
														<p>Current ammo: <?php echo get($link,"score",$join,$me); ?></p>
														<p>Magazin: 8</p>
														<p>Damage: 50%</p>
														<p>Handle: 0.5</p>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-6">
														<ul class="nav nav-tabs ">
															<li class="active"><a href="#ShopTabAmmo" data-toggle="tab">Ammo</a></li>
															<li><a href="#ShopTabMagazin" data-toggle="tab">Magazines</a></li>
															<li><a href="#ShopTabBullets" data-toggle="tab">Bullets</a></li>
															<li><a href="#ShopTabHandle" data-toggle="tab">Handle</a></li>
														</ul>
														<!-- SHOP -->
														<div class="tab-content">
															<div class="tab-pane active" id="ShopTabAmmo">
																<input type="range">
																<p><a class="btn btn-success" href="#" target="_blank">buy ammo</a></p>
															</div>
															<div class="tab-pane" id="ShopTabMagazin">
																<ul>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
															</div>
															<div class="tab-pane" id="ShopTabBullets">
																<ul>
																	<li>
																		<img src="img/shop/bul/bul1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
																<p><a class="btn btn-success" href="#" target="_blank">buy bullets</a></p>
															</div>
															<div class="tab-pane" id="ShopTabHandle">
																<ul>
																	<li>
																		<img src="img/shop/hdl/hdl1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
																<p><a class="btn btn-success" href="#" target="_blank">buy handle</a></p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- WEAPON 2 -->
											<div class="tab-pane" id="tab_default_2">
												<div class="row">
													<div class="col-xs-12 col-sm-6 col-md-6">
														<p>Current ammo: 150</p>
														<p>Magazin: 5</p>
														<p>Damage: 25%</p>
														<p>Handle: 0.2</p>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-6">
														<ul class="nav nav-tabs ">
															<li class="active"><a href="#ShopTabAmmo" data-toggle="tab">Ammo</a></li>
															<li><a href="#ShopTabMagazin" data-toggle="tab">Magazines</a></li>
															<li><a href="#ShopTabBullets" data-toggle="tab">Bullets</a></li>
															<li><a href="#ShopTabHandle" data-toggle="tab">Handle</a></li>
														</ul>
														<!-- SHOP -->
														<div class="tab-content">
															<div class="tab-pane active" id="ShopTabAmmo">
																<input type="range">
																<p><a class="btn btn-success" href="#" target="_blank">buy ammo</a></p>
															</div>
															<div class="tab-pane" id="ShopTabMagazin">
																<ul>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																	<li>
																		<img src="img/shop/mag/mag1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
															</div>
															<div class="tab-pane" id="ShopTabBullets">
																<ul>
																	<li>
																		<img src="img/shop/bul/bul1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
																<p><a class="btn btn-success" href="#" target="_blank">buy bullets</a></p>
															</div>
															<div class="tab-pane" id="ShopTabHandle">
																<ul>
																	<li>
																		<img src="img/shop/hdl/hdl1.png" class="ShopThumbnail" alt="">
																		<span>text</span>
																		<a class="btn btn-success" href="#" target="_blank">buy mag</a>
																	</li>
																</ul>
																<p><a class="btn btn-success" href="#" target="_blank">buy handle</a></p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}else {
						echo "<a href='#popup'>Shop (need login)</a>";
					}
				?>
			</div>
		</div>
	</div>
</div>