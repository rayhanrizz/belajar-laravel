@extends('layouts.header')
@section('content')
<div class="container">
		<div class="card">
			<h3><center>Data Barang</center></h3>
			<div class="card-body">
				<table class="table table-hover" id="mytable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Barang</th>
							<th>Stock</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Kategori</th>
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
						<td>{{$produk->kategori['nama_kategori']}}</td>
						<td><a href="{{url('Product/' .$produk->id. '/edit')}}" class="btn btn-warning">Edit</a> <a href="{{url('Product/' .$produk->id. '/delete')}}" class="btn btn-danger">Delete</a></td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@stop
