<!doctype html>
<head>
        <title>Bob Ross Search</title>
        <link rel="icon" type="image/gif" href="img/favicon.gif"> <!-- Favicon -->
        <meta name="description" content="Begin each Internet query with wisdom from Bob Ross.">
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
		<a href="https://github.com/arecker/bobrosssearch.com" title="Fork me on GitHub"><img src="img/bob.jpg" id="bob" alt="Bob Ross"></a>
	</div>
</body>

<footer>
<link rel="stylesheet" href="lib/css/bootstrap.min.css"> <!-- Bootstrap -->
        <link rel="stylesheet" href="lib/css/font-awesome.min.css"> <!-- Font Awesome -->
       
        <script type="text/javascript" src="lib/js/jquery.min.js"></script> <!-- Jquery -->

<style>

#searchBox {
        margin: 0 auto;
        width: 60%;
        font-size: 20px;
        padding: 10px;
        border-radius: 5px;
        border-style: solid;
        border-color: #E6E6E6;
}

#bob {
        position: relative;
        left: 40%;
}
</style>

<script>
// main.js
$(document).ready(function(){

        searchListen();
        searchTrigger();
        focusOnSearch();

});


// Helper functions
function focusOnSearch()
{
        $('#searchBox').val('');
        $('#searchBox').focus();
}

function searchListen()
{
        $('#searchBox').on('keyup change', function(){

                var val = $(this).val();

                if ( val == "" )
                {
                        $('#searchBox').css('border-color', '#E6E6E6');
                }

                else {
                        $('#searchBox').css('border-color', 'black');
                }

        });
}

function searchTrigger()
{
        $('#searchBox').keypress(function(event){

                var keycode = (event.keyCode ? event.keyCode : event.which);
                if(keycode == '13' && $('#searchBox').val() !== ""){
                        searchIt();
                }

        });
}

function searchIt()
{
        var box=document.getElementById('searchBox');
    window.location.href='http://www.google.com/search?q='+escape(box.value);
}
</script>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42540208-5', 'bobrosssearch.com');
  ga('send', 'pageview');

</script>
</footer>
