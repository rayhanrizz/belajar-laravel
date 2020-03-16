@extends('layouts.public')
@section('contentpublic')

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
							<a href="/product_list">
								<h4 style="color: white;"><b>Find Now!</b></h4>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="deskripsi">
			<center><h3>Product</h3></center>
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
			<center>
		  		<button class="btn1" style="margin-top: 20px; margin-bottom: 20px;">
		  			<a href="/product_list">
						<h4 style="color: white;"><b>View All Product</b></h4>
					</a>
				</button>
			</center>
		</div>
		<div id="deskripsi">
			<div class="container">
				<div class="row">
					<h3><b>Why Should Us!</b></h3>
					<div class="col-md-4 ">
						<img src=" {{asset('asset/gambar/icon/icon1.png')}}" height="60" width="60">
						<h3>Best Deal</h3>
					</div>
					<div class="col-md-4">
						<img src=" {{asset('asset/gambar/icon/icon2.png')}}" height="60" width="60">
						<h3>Safe and Easy</h3>
					</div>
					<div class="col-md-4">
						<img src="{{asset('asset/gambar/icon/icon3.png')}}" height="60" width="60">
						<h3>Leading Experts</h3>
					</div>
	
				</div>
			</div>
		</div>	
		<br>
		<br>
		@stop