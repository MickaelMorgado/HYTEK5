<!DOCTYPE html>
<html>
<head>
	<title>PizzGrill | Admin</title>
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
?>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12"><h1>Admin Pizza-Grill</h1></div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<h3>Pizzas:</h3>
				<ul class="list-unstyled">
					<li>
						<input type="text" Margarita="text" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li>
						<input type="text" placeholder="Margarita" value="Margarita">
						<input type="number" value="6.00" min="6" max="10" step=".5">€
					</li>
					<li><input type="submit" value="+"></li>
					<li><input type="submit" value="Guardar"></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<h3>Grill</h3>
				<form action="apps/grill.php">
					<ul class="list-unstyled">
						<li>
							<input type="text" placeholder="Frango (1/2)" value="Frango (1/2)">
							<input type="number" value="6.00" min="6" max="10" step=".5">€
						</li>
						<li>
							<input type="text" placeholder="Frango (1)" value="Frango (1)">
							<input type="number" value="6.00" min="6" max="10" step=".5">€
						</li>
						<li>
							<input type="text" placeholder="Arroz" value="Arroz">
							<input type="number" value="6.00" min="6" max="10" step=".5">€
						</li>
						<li>
							<input type="text" placeholder="Sopa" value="Sopa">
							<input type="number" value="6.00" min="6" max="10" step=".5">€
						</li>
						<li><input type="submit" value="+"></li>
						<li><input type="submit" value="Guardar"></li>
					</ul>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h4>Na secção do/das 
					<select name="select-p-g" id="select-p-g">
						<option value="">Pizzas</option>
						<option value="">Grill</option>
					</select>
					o/a
					<select name="" id="">
						<option value="">Item1</option>
						<option value="">Item2</option>
						<option value="">Item3</option>
						<option value="">Item4</option>
						<option value="">Item5</option>
					</select>
					quero
					<input type="submit" value="Apagar">o seu registo
				</h4>
			</div>
		</div>
	</div>


</body>
</html> 