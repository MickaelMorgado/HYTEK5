<form action="apps/edit-settings.php" method="post">
	
	<label for="fundo" class="db"><i class="fa fa-picture-o"></i> fundo: </label>
	<input type="text" name="fundo" value="<?php getbg(); ?>">
	
	<label for="youtube" class="db"><i class="fa fa-youtube-play"></i> youtube: </label>
	<input type="text" name="youtube" value="<?php getyoutube(); ?>">
	
	<label for="spotify" class="db"><i class="fa fa-spotify"></i> spotify: </label>
	<input type="text" name="spotify" value="<?php getspotify(); ?>">
	
	<label for="tabs_order" class="db">tabs order: </label>
	<select name="tabs_order" id="select-tabs-order">
		<?php include('apps/tabs_order.php') ?>
	</select>

	<input type="submit" />

</form>


















<!-- <div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="db mg">
									<i class="fa fa-picture-o"></i>
									<span>fundo :</span>
								</div>
								<input type="text" class="dib" id="bgurl" name="bgurl" value="<?php getbg(); ?>" />
								<input type="submit" class="dib" onclick="changebg()" value="change">
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="db mg">
									<i class="fa fa-youtube-play"></i>
									<span>mudar youtube :</span>
								</div>
								<input type="text" class="dib" id="yturl" name="yturl" placeholder="place url of src" />
								<input type="submit" class="dib" onclick="changeyt()" value="change">
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
							  	<div class="db mg">
							  		<i class="fa fa-spotify"></i>
							  		<span>mudar spotify :</span>
							  	</div>
								<input type="text" class="dib" id="spurl" name="spurl" placeholder="place url of src" />
								<input type="submit" class="dib" onclick="changesp()" value="change">
							</div>		
							<div class="col-xs-12 col-sm-3 col-md-3">
							  	<!--div class="db mg">
							  		<i class="fa fa-cloud-upload"></i>
							  		<span>upload files :</span>
							  	</div>
								<form enctype="multipart/form-data" action="apps/upload.php" method="POST">
									<input name="uploaded" class="dib" type="file" placeholder="Please choose a file (max: 0.7 mb)"/>
									<input type="submit" class="dib" onclick="upload()" value="upload">
								</form--> 
					<!-- 		</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<label for="select-tabs-order" class="db">tabs order : </label>
								<select name="select-tabs-order" id="select-tabs-order">
									<!--?php include('apps/tabs_order.php') ?>
								</select>
							</div>
						</div>
			 --> 