<!doctype html>
<head>
	<link rel="stylesheet" href="lib/css/bootstrap.min.css"> <!-- Bootstrap -->
	<link rel="stylesheet" href="lib/css/font-awesome.min.css"> <!-- Font Awesome -->
	<link rel="stylesheet" href="css/main.css"> <!-- Site css -->
	<script type="text/javascript" src="lib/js/jquery.min.js"></script> <!-- Jquery -->
	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>

	<br><br><br><br>
	<!-- Search Box -->
	<div class="container text-center">
		<div class="container">
			<br><br><br>
		</div>
		<div>
			<i class="fa fa-search fa-fw" style="font-size: 30px;"></i>
			<input id="searchBox" type="text">
		</div>
	</div><br><br><br>
	<hr><br>

	<!-- Minecraft -->
	<div class="container col-lg-3 col-lg-offset-2">
		<h4><i class="fa fa-gamepad fa-fw"></i> Minecraft</h4>
		<table class="table table-hover">
			<tr>
				<td>Status</td>
				<td class="text-center">online</td>
			</tr>
			<tr>
				<td>Ping</td>
				<td class="text-center">Value</td>
			</tr>
			<tr>
				<td>Player</td>
				<td class="text-center">0/20</td>
			</tr>
		</table>
	</div>

	<!-- Bob Ross quote -->
	<div class="container col-lg-4 col-lg-offset-4">
		<br><br><hr><br><br>
		<h3 class="text-center"><em>
			<?php
				$homepage = file_get_contents('http://www.bobrossquotes.com/text');
				echo $homepage;
			?>
		</em></h3>
	</div>

</body>
