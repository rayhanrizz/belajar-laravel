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
				<a href="#" class="smoothScroll"> Home </a>
				<a href="#" class="smoothScroll"> Product </a>
				<a href="#" class="smoothScroll"> About us </a>
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
				<h1>Jordan<font color="#f69314">House.</h1>
				<div class="row">
					<br>
					<br>
					<br>
					<div class="col-lg-6 col-lg-offset-3">
					</div>
				</div>
			</div><!-- /container -->
		</div><!-- /headerwrap -->
		
		<!-- ========== Deskripsi SECTION ========== -->
		<div id="deskripsi">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<h3>
							<bold>WELCOME TO JORDAN HOUSE</bold>
							<br>
							Let's Find A Great Deal For Your Fashion
						</h3>
						<button class="btn1">
							<a href="#">
								<h4 style="color: white;"><b>Find Now!</b></h4>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			@foreach($data as $produk)
			<div class="col-md-4">
					<div class="card">
		  				<img width="120px" src="{{ url('/image/'.$produk->gambar) }}" style="width: 100%">
		  				<div class="box">
		  					<label>{{ $produk->name }}</label>
		    				<h4 style="margin-top: -7px; margin-bottom: 15px;">
		    					
		    				</h4> 
 							<hr>
		    				<p>
		    					<font face="Cabin" size="5">
		    						<b>IDR </b>{{ $produk->harga }}
		    					</font>
		    				</p> 
		  				</div>
					</div>
				</div>
			@endforeach
		</div>
		
		<!-- ========== Why Should us SECTION ========== -->
		<div id="g">
			<div class="container">
				<div class="row">
					<h3><b>Why Should Us!</b></h3>
					<br>
					<br>
					<div class="col-md-4 ">
						<img src=" {{asset('asset/gambar/icon/icon1.png')}}" height="60" width="60">
						<h3>Best Deal</h3>
						<p>One of our top priorities is to adjust each package we offer to our customer’s exact needs. We offer a variety of options that can 	enhance your experience, Always according to your necessities, and help you get the best out of your holidays or your business trip.</p>
					</div>
					<div class="col-md-4">
						<img src=" {{asset('asset/gambar/icon/icon2.png')}}" height="60" width="60">
						<h3>Safe and Easy</h3>
						<p>Our smart booking engine searches for for the best price, car category, extras, exclusive offers and discounts suiting your needs. You 	can securely book online today only with a small downpayment and pay the rest upon your arrival at the desk!</p>
					</div>
					<div class="col-md-4">
						<img src="{{asset('asset/gambar/icon/icon3.png')}}" height="60" width="60">
						<h3>Leading Experts</h3>
						<p>Otosnap. has provided many of customers with the best possible guaranteed price for their Car Rental. We welcome you to become our 	next satisfied customer.</p>
					</div>
	
				</div>
				<hr>
			</div>
		</div>		
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
