<!DOCTYPE html>
<?php 
	$error_reporting = 0;
	include('dbConnection.php');
?>
<html>
<head>
	<title>HYTEK5 - Start Page</title>
	<meta name="theme-color" content="#111"><!--meta name="theme-color" content="#224455"-->
	<link rel="icon" href="hyteklogo.jpg" type="image/jpg">
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width" />
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="dependencies/js/ajax-function.js"></script>


	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="dependencies/css/bootstrap-dark.min.css">
	<link rel="stylesheet" href="dependencies/css/datepicker.css">
	<link rel="stylesheet" href="dependencies/css/admin.css">
	<link rel="stylesheet" href="dependencies/css/range-slider.css">

</head>
<body>
 

<?php 
	include("../../dbConnection.php");
	/*
	$result = mysqli_query($link, "SELECT * FROM mytabs WHERE id_tabs = $_SESSION[id_session] ORDER BY last_view DESC");
	
	while ($row = mysqli_fetch_assoc($result)) {
		if(!mysqli_num_rows($result)){ echo 'No results'; }
		else {
			$r0 = $row['id_tab'];
			$r1 = $row['title'];
			$r2 = $row['url'];
			$r3 = $row['data'];
			$r4 = $row['view'];
			$r5 = $row['last_view'];
	*/
?>



<div class="container">
	<div class="row page-header">
	    <div class="col-sm-4">
	        <h1>Money Management</h1>
	    </div>
	    <!--
    	<form action="#">
    		<div class="col-sm-3 form-group">
    			<input 
					type="email" 
					placeholder="eg: email@example.com" 
					id="id" 
					name="name"
					class="form-control" 
    			>
    		</div>
    		<div class="col-sm-3 form-group">
    			<input type="password" class="form-control" >
    		</div>
    		<div class="col-sm-2 form-group">
    			<input type="submit" class="form-control" >
    		</div>
		</form>
	    -->
    </div>
	<!-- /.row -->
	<div class="row">
	    <div class="col-lg-3 col-md-6">
	        <div class="panel panel-primary">
	            <div class="panel-heading">
	                <div class="row">
	                    <div class="col-xs-3">
	                        <i class="fa fa-comments fa-5x"></i>
	                    </div>
	                    <div class="col-xs-9 text-right">
	                        <div class="huge">1.865,56</div>
	                        <div class="sp">Saldo Atual</div>
	                    </div>
	                </div>
	            </div>
	            <a href="#">
	                <div class="panel-footer">
	                    <span class="pull-left">View Details</span>
	                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                    <div class="clearfix"></div>
	                </div>
	            </a>
	        </div>
	    </div>
	    <div class="col-lg-3 col-md-6">
	        <div class="panel panel-green">
	            <div class="panel-heading">
	                <div class="row">
	                    <div class="col-xs-3">
	                        <i class="fa fa-tasks fa-5x"></i>
	                    </div>
	                    <div class="col-xs-9 text-right">
	                        <div class="huge">1.865,56</div>
	                        <div>Saldo Permitido</div>
	                    </div>
	                </div>
	            </div>
	            <a href="#">
	                <div class="panel-footer">
	                    <span class="pull-left">View Details</span>
	                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                    <div class="clearfix"></div>
	                </div>
	            </a>
	        </div>
	    </div>
	    <div class="col-lg-3 col-md-6">
	        <div class="panel panel-yellow">
	            <div class="panel-heading">
	                <div class="row">
	                    <div class="col-xs-3">
	                        <i class="fa fa-shopping-cart fa-5x"></i>
	                    </div>
	                    <div class="col-xs-9 text-right">
	                        <div class="huge">2</div>
	                        <div>Compras Efectuadas mes</div>
	                    </div>
	                </div>
	            </div>
	            <a href="#">
	                <div class="panel-footer">
	                    <span class="pull-left">View Details</span>
	                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                    <div class="clearfix"></div>
	                </div>
	            </a>
	        </div>
	    </div>
	    <div class="col-lg-3 col-md-6">
	        <div class="panel panel-red">
	            <div class="panel-heading">
	                <div class="row">
	                    <div class="col-xs-3">
	                        <i class="fa fa-support fa-5x"></i>
	                    </div>
	                    <div class="col-xs-9 text-right">
	                        <div class="huge">1</div>
	                        <div>Compras Lazer</div>
	                    </div>
	                </div>
	            </div>
	            <a href="#">
	                <div class="panel-footer">
	                    <span class="pull-left">View Details</span>
	                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                    <div class="clearfix"></div>
	                </div>
	            </a>
	        </div>
	    </div>
	</div>
	<!-- /.row -->
	<div class="row">
	    <div class="col-lg-8">
	    	<div class="panel panel-default">
	    	    <div class="panel-heading">
	    	        <i class="fa fa-bar-chart-o fa-fw"></i>Economia :
	    	    </div>
	    	    <div class="panel-body">
	    	    	<div class="row">
	    	    		<form action="#" id="vs" onchange="vsChange()">
	    	    			<div class="col-sm-4">
	    	    	    	<div class="form-group">
	    	    	    		<label for="">Salário (€):</label><br>
	    	    	    		<input class="form-control" type="number" id="s" value="653.16">
	    	    	    	</div>
	    	    			</div>
	    	    			<div class="col-sm-4">
	    	    				<div class="form-group">
	    	    					<label for="">Poupança desejada p/ mes (€):</label><br>
	    	    					<input class="form-control" type="number" id="pd" value="400" max="653.16">
	    	    				</div>
	    	    			</div>
	    	    			<div class="col-sm-4">
	    	    				<div class="form-group">
	    	    					<label for="">Dinheiro permitido (€):</label><br>
	    	    					<input class="form-control" type="number" readonly id="dp">
	    	    				</div>
	    	    			</div>
	    	    		</form>
	    	    	</div>
	    	    </div>
	    	</div>

	    	<form action="apps/money/remover-categoria.php" method="post">
	    		
	    		<div class="panel panel-default">
	    			<div class="container-fluid">
	    				<div class="row">
	    					<div class="col-xs-12">
					    		<br>
					    		<div class="panel panel-default">
					    		    <div class="panel-heading">
					    		        <i class="fa fa-bar-chart-o fa-fw"></i> Categorias de poupanças :
					    		        <div class="pull-right">
					    		            <div class="btn-group">
					    		                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
					    		                    Actions
					    		                    <span class="caret"></span>
					    		                </button>
					    		                <ul class="dropdown-menu pull-right" role="menu">
					    		                    <li><a data-toggle="modal" data-target=".add-cat">Addicionar Categoria</a></li>      	                            
					    		                    <li><a onclick="removerRegistro()">Remover</a></li>
					    		                </ul>
					    		            </div>
					    		        </div>
					    		    </div>
					    		    <div class="panel-body">
											<?php 
												$sql = "SELECT * FROM `despesa_categorias` WHERE `User_ID` = 2 ";

												$result = mysqli_query($link,$sql);
												$i = 0;
												if ($result->num_rows > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														?>
							    		    	    		<div class="row">
							    		    	    			<div class="col-sm-7">
							    		    	    				<div class="cat-slider 0"></div>
							    		    	    			</div>
							    		    	    			<div class="col-sm-5">
										    		    			<label class="cat-label" title="<?php echo $row['Categoria']; ?>" for="amount<?php echo $i; ?>"><?php echo $row['Categoria']; ?></label>
										    		    			<input 	
										    		    				type="text" 
										    		    				id='amount<?php echo $i; ?>' 
										    		    				readonly 
										    		    				class="slider-price-result"
										    		    			>
							    		    	    				<input type="checkbox" data-value="<?php echo $row['ID']; ?>" class="rm hidden pull-right rmchk-cat" id="checkbox-id" />
							    		    	    			</div>
							    		    	    		</div>
						    		    	    		<?php
														$i = $i + 1;
													} 	
												}else{
													echo "Sem Categorias";
												}		
											?>
					    		    </div>
					    		    <!-- /.panel-body -->
					    		</div>
					    		<div class="text-right">
					    			<input type="hidden" name="arrayofrmid-cat" id="arrayofrmid-cat" value="">
					    			<input value="cancelar" class="rm hidden btn btn-default" onclick="removerRegistro()">
					    			<input type="submit" value="remover" class="rm hidden btn btn-danger">
					    			<input type="button" value="guardar ajustos" class="btn btn-success">
					    		</div>
				    			<br>
	    					</div>
	    				</div>
	    			</div>
	    		</div>

	    	</form>
	    	<span class="ajax-response"></span>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <i class="fa fa-bar-chart-o fa-fw"></i>Histórico
	                <div class="pull-right">
	                    <div class="btn-group">
	                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
	                            Actions
	                            <span class="caret"></span>
	                        </button>
	                        <ul class="dropdown-menu pull-right" role="menu">
	                            <li><a data-toggle="modal" data-target=".add-registo">Addicionar ( Atalho "CTRL + A" )</a></li>      	                            
	                            <li><a onclick="removerRegistro()">Remover</a></li>      	                            
	                        </ul>
	                    </div>
	                </div>
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	                <div class="row">
	                    <div class="col-xs-12">
	                        <div class="table-responsive">
		                        <form action="apps/money/remover-registro.php" method="POST">
		                            <table class="table table-bordered table-hover table-striped">
		                                <thead>
		                                    <tr>
		                                        <th>Data (y-m-d)</th>
		                                        <th>Categoria</th>
		                                        <th>Titulo</th>
		                                        <th>Valor</th>
		                                        <th class="rm hidden">Remover</th>
		                                    </tr>
		                                </thead>
		                                <tbody>

		                            	<?php 

											$sql = "SELECT * FROM despesa_listagem ORDER BY ID DESC";

											$result = mysqli_query($link,$sql);
											if ($result->num_rows > 0) {
												while ($row = mysqli_fetch_assoc($result)) {
													?>
														<tr>
														    <td class="date-month"><?php echo $row['Data']; ?></td>
														    <td><?php echo $row['Categoria']; ?></td>
														    <td><?php echo $row['Titulo']; ?></td>
														    <td><?php echo $row['Valor']; ?> €</td>
														    <td class="rm hidden">
														    	<input type="text" name="rm-id" class="rmid hidden" value="<?php echo $row[ID]; ?>">
														    	<input type="checkbox" name="checkbox-name" id="checkbox-id" class="rmchk" />
														    </td>
														</tr>
													<?php
												} 	
											}else{
												?>
													<tr><td><?php echo "0 results"; ?></td></tr>
												<?php
											}

		                            	?>
		                                </tbody>
		                            </table>
		                           <div class="text-right">
		                           		<input type="hidden" name="arrayofrmid" id="arrayofrmid" value="">
										<a class="btn btn-default rm hidden" onclick="removerRegistro()">cancelar</a>
										<input class="btn btn-danger rm hidden" value="remover" type="submit"></input>
	       	                        </div>                        
		                        </form>
       	                    </div>
	                        <!-- /.table-responsive -->
	                    </div>
	                    <!-- /.col-lg-4 (nested) -->
	                    <div class="col-lg-8">
	                        <div id="morris-bar-chart"></div>
	                    </div>
	                    <!-- /.col-lg-8 (nested) -->
	                </div>
	                <!-- /.row -->
	            </div>
	            <!-- /.panel-body -->
	        </div>
	        <!-- /.panel -->
	    </div>
	    <!-- /.col-lg-8 -->
	    <div class="col-lg-4">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <i class="fa fa-bell fa-fw"></i> Notifications Panel
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	                <div class="list-group">
	                    <a href="#" class="list-group-item">
	                        <i class="fa fa-comment fa-fw"></i>Adicionou Nova Categoria
	                        <span class="pull-right text-muted small"><em>Steam</em>
	                        </span>
	                    </a>
	                    <a href="#" class="list-group-item">
	                        <i class="fa fa-comment fa-fw"></i>Transações Efectuadas - 03/06/17
	                        <span class="pull-right text-muted small"><em>2</em>
	                        </span>
	                    </a>
	                    <a href="#" class="list-group-item">
	                        <i class="fa fa-comment fa-fw"></i>Salário - 01/06/17
	                        <span class="pull-right text-muted small"><em>+ 653,16 €</em>
	                        </span>
	                    </a>
	                </div>
	                <!-- /.list-group -->
	                <a href="#" class="btn btn-default btn-block">View All Alerts</a>
	            </div>
	            <!-- /.panel-body -->
	        </div>
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <i class="fa fa-bell fa-fw"></i>Resumo do Mes
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	                <div class="list-group">
	                	<div class="list-group-item">
	                		consegui poupar os <b>400</b> € prentendidos e ainda poupou dos lazeres <b>200</b> € do mes passado na qual tem: <br><br>
	                		<ul>
	                			<li>steam : 50 €</li>
	                			<li>compras online: 150 €</li>
	                		</ul>
                			<div class="text-right">
                				<h3>Balanço de + <b>600</b> €</h3>
                			</div>
	                	</div>
	                </div>
	            </div>
	            <!-- /.panel-body -->
	        </div>
	    </div>
	    <!-- /.col-lg-4 -->
	</div>
	<!-- /.row -->
</div>



<div class="modal fade add-cat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">        
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="apps/money/add-cat.php" method="POST">
					<div class="row">
						<div class="col-sm-10">
							<div class="form-group">
								<label for="">Categoria (se necessario) :</label>
								<select name="add-categoria" class="form-control" id="sel1">
								    <option selected>--</option>
								    <option value="Steam">Steam</option>
								    <option value="Compras Online">Compras Online</option>
								    <option value="Divertimentos/Outros">Divertimentos/Outros</option>
								    <option value="Despesas da casa">Despesas da casa</option>
								  </select>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<label for=""> <br> </label>
								<input type="submit" class="form-control">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade add-registo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">        
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="apps/money/add-registo.php" method="POST">
					<div class="row">
						<div class="col-sm-3">
							<div class="form-group">
								<label for="">Titulo :</label>
								<input name="Titulo" type="text" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for="">Valor :</label>
								<input name="Valor" type="number" step="any" lang="de" pattern="[\,.]" class="form-control">
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for="">Categoria (se necessario) :</label>
								<select name="Categoria" class="form-control" id="sel1">
								    <option selected>--</option>
								    <option value="Steam">Steam</option>
								    <option value="Compras Online">Compras Online</option>
								    <option value="Divertimentos/Outros">Divertimentos/Outros</option>
								    <option value="Despesas da casa">Despesas da casa</option>
								  </select>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for=""> <br> </label>
								<input type="submit" class="form-control">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


</body>
<script>

	// VS

		function vsChange() {
			dp_v = $('#s').val() - $('#pd').val();
			$('#dp').val(dp_v);
			$('.panel-green .huge').text(dp_v.toFixed(2));
			$('.sp').text(dp_v.toFixed(2));
		}

	// REMOVER REGISTO:

		function removerRegistro() {
			$('.rm').each(function(index,element) { // element == this 
				if ($(this).hasClass('hidden')) {
					$(this).removeClass("hidden");
				}else {
					$(this).addClass("hidden");
				}
			});
		}

	//  ARRAY OF RM ID:

		$('.rmchk-cat').on("change",function() {
			arrayofrmidCat()
		});

		$('.rmchk').on("change",function() {
			arrayofrmid()
		});

		function arrayofrmidCat() {
			var rmid_query = "";
			$('.rmchk-cat').each(function(index,element) {  
				if ( $(element).prop("checked") ) {
					rmid_query = rmid_query + $(this).data("value") + ",";
				}
			});
			$('#arrayofrmid-cat').val(rmid_query.split(","));
		}

		function arrayofrmid() {
			var rmid_query = "";
			$('.rmid').each(function(index,element) {  
				if ( $(this).parent().find(".rmchk").prop("checked") ) {
					rmid_query = rmid_query + $(element).val() + ",";
				}
			});
			$('#arrayofrmid').val(rmid_query.split(","));
		}


	// INICIAL SETUP

		var s_value = $('#s').val(),
			pd_value = $('#pd').val();

		
	// READY

		$(document).ready(function(){

			var stored_dp_value = $("#dp").val();
			vsChange();

			// STYLIZE CURRENT MONTH OF HISTORIC LIST :

				var currentDate = new Date();
				var currentMonth = currentDate.getMonth() + 1;
				var comprasEfectuadas = 0;

				if(currentMonth < 10) {
					currentMonth = '0' + currentMonth;
				} else {
					currentMonth = '' + currentMonth;
				}
				
				$('.date-month').each(function(index,element) { // element == this 
					if ( $(element).text().split("-")[1] == currentMonth ) {
						comprasEfectuadas = comprasEfectuadas + 1;
					  	$(element).css({"font-weight":"bold"});
					}
				});

				$('.panel-yellow .huge').text(comprasEfectuadas);


			// SHORTCUT TO REVEAL ADD POPUP :

				$(document).keydown(function( event ) {
				  if ( event.ctrlKey && ( event.which === 65 ) ) {
				  	event.preventDefault();
				   $(".add-registo").modal('show');
				  }
				});

			// GET VALUES OF EACH SLIDERS :
				
				function GetValueOfEachSliders() {
					var sliders_sum_value = 0;
					$(".cat-slider").each(function(i,element) {
						sliders_sum_value = sliders_sum_value + $(element).slider("option","value");
					});
					return sliders_sum_value;
				}

			// UPDATE SLIDERS :

				$('#pd').on("change",function() {
					var dp_v = $('#s').val() - $('#pd').val();
					$('#dp').val(dp_v);
					stored_dp_value = dp_v;
					updateSliders(stored_dp_value);
				});

				function updateSliders(val) {
					$(".cat-slider").each(function(i,element) {
						$(element).slider("option","max",val);
					});
				}

			// SLIDER RANGE
				
				var new_dp_value = 0;

				$(".cat-slider").each(function(i,element) {

					// start with (default) :
					$( "#amount"+i ).val(0+" €" );

					$(element).slider({
				    	value: 0,
				    	min: 0,
			    		max: $('#dp').val(),
				    	step: 5,
					    slide: function( event, ui ) {
					      	$( "#amount"+i ).val( ui.value +" €" );
					    },
					    stop: function( event, ui ) {
				      		new_dp_value = stored_dp_value - GetValueOfEachSliders(); // set in variable to be fixed(2)
					      	$('#dp').val(new_dp_value.toFixed(2));
					      	if ($('#dp').val()<=0) {
					      		$('#dp').parent().addClass("has-error");
					      	}else{
					      		$('#dp').parent().removeClass("has-error");
					      	}
					      	$('.panel-green .huge').text(new_dp_value.toFixed(2));
					    }
					})
				});
		
		});


</script>
</html>