@extends('layouts.public')
@section('contentpublic')
			<center>
				<h2>Product List</h2>
				<hr>
			</center>
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
@stop