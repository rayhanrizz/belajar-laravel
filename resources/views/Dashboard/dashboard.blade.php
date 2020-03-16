@extends('layouts.header')
@section('content')
<div class="container">
	<div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-gift"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Product</h4>
                  </div>
                  <div class="card-body">
                    {{$count}}
                  </div>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kategori</h4>
                  </div>
                  <div class="card-body">
                    {{$hitkat}}
                  </div>
                </div>
              </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    {{$hitad}}
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4>Hoodie</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                      </tr>
                      @foreach($data as $produk)
                      <tr>
						<td>{{ $produk->name }}</td>
						<td>{{ $produk->harga }}</td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
            	<div class="card">
                <div class="card-header">
                  <h4>Shoes</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                      </tr>
                      @foreach($shoes as $produk)
                      <tr>
						<td>{{ $produk->name }}</td>
						<td>{{ $produk->harga }}</td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
    <div class="row">
    	<div class="col-md-6">
    		<div class="card">
                <div class="card-header">
                  <h4>Pants</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                      </tr>
                      @foreach($pants as $produk)
                      <tr>
						<td>{{ $produk->name }}</td>
						<td>{{ $produk->harga }}</td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
    	</div>
    	<div class="col-md-5">
    		<div class="card">
                <div class="card-header">
                  <h4>T-Shirt</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                      </tr>
                      @foreach($t as $produk)
                      <tr>
						<td>{{ $produk->name }}</td>
						<td>{{ $produk->harga }}</td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
    	</div>
    </div>
    <div class="row">
    	<div class="col-lg-7">
    		<div class="card">
                <div class="card-header">
                  <h4>Zip Hoodie</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                      </tr>
                      @foreach($zh as $produk)
                      <tr>
						<td>{{ $produk->name }}</td>
						<td>{{ $produk->harga }}</td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
    	</div>
    	<div class="col-lg-4">
    		<div class="card">
                <div class="card-header">
                  <h4>Hat</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                      </tr>
                      @foreach($hat as $produk)
                      <tr>
						<td>{{ $produk->name }}</td>
						<td>{{ $produk->harga }}</td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
    	</div>
    </div>
</div>
@stop