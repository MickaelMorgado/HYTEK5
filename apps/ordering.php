<div class="container-full">
	<div class="row">
		<div class="col-xs-12">
			<label for="link-order-select">Ordering tabs by:</label>
			<select name="order" id="link-order-select">
				<option value="`view`DESC" selected>--</option>
				<option value="`title`DESC">title 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp			(alphabetically)</option>
				<option value="`data`DESC">Date 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp					(most recent)</option>
				<option value="`url`DESC">Url 		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	(alphabetically)</option>
				<option value="`view`DESC">View 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp					(most viewed)</option>
			</select>
		</div>
		<!--div class="col-xs-6">
			<div class="dropdown pull-right">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".addlinkreveal">add link</button>
				<div class="modal fade addlinkreveal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">        
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="apps/links/add-link.php" method="post">
									<ul class="list-inline">
										<li><input type="text" name="link-add-title" placeholder="title (opcional)"></li>
										<li><input type="text" name="link-add-url" 	 placeholder="url"></li>
										<li><input type="submit" value="add"></li>
									</ul>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div-->
	</div>
</div>