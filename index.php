<!doctype html>
<head>
  <meta charset="UTF-8">
  <title>Bob Ross Search</title>
  <link rel="icon" type="image/gif" href="img/favicon.gif" media="screen"/> <!-- Favicon -->
  <meta name="description" content="Begin each Internet query with wisdom from Bob Ross.">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
        BOB ROSS QUOTE HERE
    </em></h3><br>
    <a href="https://github.com/arecker/bobrosssearch.com" title="Fork me on GitHub"><img src="img/bob.jpg" id="bob" alt="Bob Ross"></a>
  </div>
</body>

<footer>
  <link rel="stylesheet" href="lib/css/bootstrap.min.css" media="screen" /> <!-- Bootstrap -->
  <link rel="stylesheet" href="lib/css/font-awesome.min.css" media="screen" /> <!-- Font Awesome -->
  
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



  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-42540208-5']);
    _gaq.push(['_trackPageview']);
    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 

    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</footer>
