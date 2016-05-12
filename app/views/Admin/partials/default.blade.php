<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Laravel</title>

<!-- Bootstrap Core CSS -->
    <link href="/cocra-conning/bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/cocra-conning/bootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/cocra-conning/bootstrap/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/cocra-conning/bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->

    <link href="/cocra-conning/bootstrap/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/cocra-conning/bootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Loader -->
	<link rel="stylesheet" href="/cocra-conning/loader/css/normalize.css">
	<link rel="stylesheet" href="/cocra-conning/loader/css/main.css">
	<script src="/cocra-conning/loader/js/vendor/modernizr-2.6.2.min.js"></script>

	
   

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">  

		<!--<div id="loader-wrapper">
	   		 <div id="loader"></div>
		</div>		!-->
			
	 			@yield('header')
	 		

	 		<div id="page-wrapper">
	 			@yield('content')
	 		</div>

	</div>


	  <!-- Loader -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="/cocra-conning/loader/js/main.js"></script>

<!-- jQuery -->
    <script src="/cocra-conning/bootstrap/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/cocra-conning/bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/cocra-conning/bootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>
 <!-- DataTables JavaScript -->
    <script src="/cocra-conning/bootstrap/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/cocra-conning/bootstrap/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
   

    <!-- Custom Theme JavaScript -->
    <script src="/cocra-conning/bootstrap/dist/js/sb-admin-2.js"></script>

     <!-- Morris Charts JavaScript -->
    <script src="/cocra-conning/bootstrap/bower_components/raphael/raphael-min.js"></script>
    <script src="/cocra-conning/bootstrap/bower_components/morrisjs/morris.min.js"></script>
    <script src="/cocra-conning/bootstrap/js/morris-data.js"></script>

    
 

   
	
</body>


</html>