<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

        <!-- Bootstrap 3.3.0 -->
        <!-- <link href="assets/css_330/bootstrap.css" rel="stylesheet"> -->
        <!-- Bootstrap 3.3.7 -->
        <link href="{{asset('asset/assets/css_337/bootstrap.min.css')}}" rel="stylesheet"> 
        <!-- Bootstrap 3.4.0 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- CSS Utama -->
        <link href="{{asset('asset/css/index.css')}}" rel="stylesheet">
        <link href=" {{asset('asset/css/car_list.css')}}" rel="stylesheet">
        <!-- Assets -->
		<link rel="stylesheet" href=" {{asset('asset/assets/css_330/font-awesome.min.css')}}">
		<!-- Font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

        <title>Jordan House</title>
    </head>
    <style type="text/css">
		@media (max-width: 800px){
			#itemwrap h1 {
				margin-top: 150px;
				color: white;
				font-size: 60px;
				font-weight: 700;
				letter-spacing: 3px;
			}

			#itemwrap h2 {
				color: white;
				font-size: 30px;
				font-weight: 100;
				letter-spacing: 2px;
			}
		}
	</style>
    <body data-spy="scroll" data-offset="0" data-target="#theMenu">
        <script type="text/javascript " src="cordova.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src=" {{asset('asset/js/bootstrap.min.js')}}"></script>
    	<script src=" {{asset('asset/assets/js/jquery.min.js')}}"></script>
		<script src=" {{asset('asset/assets/js/Chart.js')}}"></script>
		<script src=" {{asset('asset/assets/js/modernizr.custom.js')}}"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script type="js/index.js"></script>
		
		<!-- Sidebar -->
		<nav class="menu" id="theMenu">
			<div class="menu-wrap">
				<h1 class="logo">
					<a href="#">Jordan House</b></a> 
				</h1>
				<i class="icon-remove menu-close" style="padding-right: 0.5cm; padding-top: 25px;"></i>
				<a href="/" class="smoothScroll"> Home </a>
				<a href="/product_list" class="smoothScroll"> Product </a>
				<a href="/aboutus" class="smoothScroll"> About us </a>
				<a href="{{ url('Product') }}" class="smoothScroll"> Admin </a>
				<a href="www.facebook.com" style="margin-left: 50px;">
					<i class="icon-facebook"></i>
				</a>
				<a href="www.twitter.com">
					<i class="icon-twitter"></i>
				</a>
				<a href="www.instagram.com">
					<i class="icon-instagram"></i>
				</a>
				<a href="www.gmail.com">
					<i class="icon-envelope"></i>
				</a>
			</div>
			<!-- Tombol Side Bar -->
			<div id="menuToggle"><i class="icon-reorder"></i></div>	
		</nav>
	
		<!-- ========== Header SECTION ========== -->
		<div id="itemwrap">
			<div class="container">
				<br>
				<br>
				<h2>Jordan<font color="#f69314">House</h2>
				<div class="row">
					<br>
					<br>
					<br>
					<div class="col-lg-6 col-lg-offset-3">
					</div>
				</div>
			</div><!-- /container -->
		</div><!-- /headerwrap -->

		<div class="container">
			@yield('contentpublic')
		</div>
		
		<!-- ========== Why Should us SECTION ========== -->	
		<br>
		<br
		<!-- ========== FOOTER SECTION ========== -->
		<div id="f">
			<div class="container">
				<div class="row">
						<h3><b>CONTACT US</b></h3>
						<div class="gras_foot"></div>
						<br>
						<div class="col-lg-4">	
							<h3><b>Call Us :</b></h3>
							<h3><font face="Lato">+6281 3984 4389</font></h3>
							<br>
						</div>
						<div class="col-lg-4">
							<h3><b>Send Us A Message :</b></h3>
							<h3><font face="Lato">jordanhouse@gmail.com</font></h3>
							<br>
						</div>
						<div class="col-lg-4">
							<h3><b>Social Media :</b></h3>
							<h3>
								<a href="www.facebook.com"><i class="icon-facebook"></i></a>
								<a href="www.twitter.com"><i class="icon-twitter"></i></a>
								<a href="www.instagram.com"><i class="icon-instagram"></i></a>
								<a href="www.google.com"><i class="icon-envelope"></i></a>
							</h3>
							<br>
						</div>
					</div>
				</div>
			</div><!-- /container -->
		</div><!-- /f -->
		
		<div id="c">
			<div class="container">
				<p>Jordan House</p>
			</div>
		</div>

		<!-- Bootstrap core JavaScript -->
	    <!-- ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
		<script src=" {{asset('asset/assets/js/classie.js')}}"></script>
	    <script src=" {{asset('asset/assets/js/bootstrap.min.js')}}"></script>
	    <script src=" {{asset('asset/assets/js/retina.js')}}"></script>
		<script src=" {{asset('asset/assets/js/main.js')}}"></script>
    </body>
</html>
