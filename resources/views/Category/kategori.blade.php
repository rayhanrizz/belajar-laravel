@extends('layouts.header')
@section('content')
<div class="container">
		<div class="card">
			<h3><center>Data Kategori</center></h3>
			<div class="card-body">
				<table class="table table-hover" id="mytable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Kategori</th>
							<th>Product ID</th>
							<th>Option</th>
						</tr>
					</thead>
					<tbody>
					@foreach($data as $produk)
					<tr>
						<td>{{ $produk->id }}</td>
						<td>{{ $produk->nama_kategori }}</td>
						<td>{{ $produk->product_id }}</td>
						<td><a href="{{url('Category/' .$produk->id. '/edit')}}" class="btn btn-warning">Edit</a> <a href="{{url('Category/' .$produk->id. '/delete')}}" class="btn btn-danger">Delete</a></td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@stop