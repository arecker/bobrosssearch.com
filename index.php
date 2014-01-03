<!doctype html>
<head>
	<link rel="stylesheet" href="lib/css/bootstrap.min.css"> <!-- Bootstrap -->
	<link rel="stylesheet" href="lib/css/font-awesome.min.css"> <!-- Font Awesome -->
	<link rel="stylesheet" href="css/main.css"> <!-- Site css -->
	<script type="text/javascript" src="lib/js/jquery.min.js"></script> <!-- Jquery -->
	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>

	<br><br>
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

	<!-- Bob Ross quote -->
	<div class="container col-lg-4 col-lg-offset-4">
		<br><br>
		<h3 class="text-center"><em>
			<?php
				$homepage = file_get_contents('http://www.bobrossquotes.com/text');
				echo $homepage;
			?>
		</em></h3><br>
		<img src="img/bob.jpg" id="bob">
	</div>
</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42540208-5', 'bobrosssearch.com');
  ga('send', 'pageview');

</script>
