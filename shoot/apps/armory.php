<?php 		
	$dir_w = "Weapons/cursors/";
	$dir_sf = "Weapons/fireaudio/";
	$dir_sr = "Weapons/reloadaudio/";
	$dir_se = "Weapons/emptyaudio/";
	$dh_w = opendir($dir_w);
	$dh_sf = opendir($dir_sf);
	$dh_sr = opendir($dir_sr);
	$dh_se = opendir($dir_se);
?>
<form action="set_weapon.php" method="post">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1>Armory <?php echo $coins; ?> €</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3">
				<?php 
					while (false !== ($filename1 = readdir($dh_w))) {
						if ($filename1 != "." && $filename1 != "..") {
							if ($filename1 == $weapon_src) {
								?>
					    		<input type="radio" class="radio-weapons" id="<?php echo $filename1; ?>" value="<?php echo $filename1; ?>" name="weaponappearance" checked="checked"/>
								<?php
							}else{
								?>
					    		<input type="radio" class="radio-weapons" id="<?php echo $filename1; ?>" value="<?php echo $filename1; ?>" name="weaponappearance"/>
								<?php
							}
						    ?>
						    <label for="<?php echo $filename1; ?>">
						    	<img width="100px" src="<?php echo $dir_w.$filename1; ?>">
						    	<?php echo $filename1 ?></label>
						    <?php
					    }
					}
				?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
				<?php
					while (false !== ($filename2 = readdir($dh_sf))) {
						if ($filename2 != "." && $filename2 != "..") {
							if ($filename2 == $weapon_sound_fire) {
								?>
					    		<input type="radio" class="radio-weapons" id="<?php echo $filename2; ?>" value="<?php echo $filename2; ?>" name="weaponsound" checked="checked"/>
								<?php
							}else{
								?>
					    		<input type="radio" class="radio-weapons" id="<?php echo $filename2; ?>" value="<?php echo $filename2; ?>" name="weaponsound"/>
								<?php
							}
						    ?>
						    <label for="<?php echo $filename2; ?>"><?php echo $filename2 ?><br/><audio controls><source src="<?php echo $dir_sf.$filename2; ?>" type="audio/mp3"></audio></label>
						    <?php
					    }
					}
				?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
				<?php 
					while (false !== ($filename3 = readdir($dh_sr))) {
						if ($filename3 != "." && $filename3 != "..") {
							if ($filename3 == $weapon_sound_reload) {
								?>
					    		<input type="radio" class="radio-weapons" id="<?php echo $filename3; ?>" value="<?php echo $filename3; ?>" name="weaponreloadsound" checked="checked"/>
								<?php
							}else{
								?>
					    		<input type="radio" class="radio-weapons" id="<?php echo $filename3; ?>" value="<?php echo $filename3; ?>" name="weaponreloadsound"/>
								<?php
							}
						    ?>
						    <label for="<?php echo $filename3; ?>"><?php echo $filename3 ?><br/><audio controls><source src="<?php echo $dir_sr.$filename3; ?>" type="audio/mp3"></audio></label>
						    <?php
					    }
					}
				?>	
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3">
				<?php 
					while (false !== ($filename4 = readdir($dh_se))) {
						if ($filename4 != "." && $filename4 != "..") {
							if ($filename4 == $weapon_sound_empty) {
								?>
					    		<input type="radio" class="radio-weapons" id="<?php echo $filename4; ?>" value="<?php echo $filename4; ?>" name="weaponemptysound" checked="checked"/>
								<?php
							}else{
								?>
					    		<input type="radio" class="radio-weapons" id="<?php echo $filename4; ?>" value="<?php echo $filename4; ?>" name="weaponemptysound"/>
								<?php
							}
						    ?>
						    <label for="<?php echo $filename4; ?>"><?php echo $filename4 ?><br/><audio controls><source src="<?php echo $dir_se.$filename4; ?>" type="audio/mp3"></audio></label>
						    <?php
					    }
					}
				?>	
			</div>
		</div>
		<div class="text-center">
			<input type="submit" value="apply changes">
		</div>
	</div>

</form>









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
				<div class="col-xs-12 col-sm-6 col-md-6">
					<p>Current ammo: <?php echo $weapon_ammo; ?><b> / 200</b><br/>
					Magazin: <?php echo $weapon_mag_capacity; ?><br/>
					Damage per shoot: <?php echo $weapon_damage*100; ?>%<br/>
					Handle level: <?php echo $weapon_handle*100; ?>%</p>
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