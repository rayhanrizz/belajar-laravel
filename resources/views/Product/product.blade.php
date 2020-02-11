@extends('layouts.header')
@section('content')
<div class="container">
		<div class="card">
			<h3><center>Data Barang</center></h3>
			<div class="card-body">
				<form method="GET" class="form-inline">
	              <div class="form-group">
	                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}" style="margin-bottom: 10px;">
	              </div>
	              <div class="form-group">
	                <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Search</button>
	              </div>
            	</form>
				<table class="table table-hover" id="mytable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Barang</th>
							<th>Stock</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Option</th>
						</tr>
					</thead>
					<tbody>
					@foreach($data as $produk)
					<tr>
						<td>{{ $produk->id }}</td>
						<td>{{ $produk->name }}</td>
						<td>{{ $produk->stock }}</td>
						<td>{{ $produk->harga }}</td>
						<td><img width="120px" src="{{ url('/image/'.$produk->gambar) }}"></td>
						<td><a href="{{url('Product/' .$produk->id. '/edit')}}" class="btn btn-warning">Edit</a> <a href="{{url('Product/' .$produk->id. '/delete')}}" class="btn btn-danger">Delete</a></td>
					</tr>
					@endforeach
					</tbody>
				</table>
				{!! $data->appends(request()->except('page'))->render() !!}
			</div>
		</div>
	</div>
	@stop