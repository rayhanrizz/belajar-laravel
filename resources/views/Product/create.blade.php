@extends('layouts.header')
@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
        <h3 style="margin: 10px;"><center>Tambah Barang</center></h3>
				<form action="{{ url('Product') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nama" class="control-label">Nama Barang</label>
						<input name="name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="stock" class="control-label">Stock</label>
						<input name="stock" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="harga" class="control-label">Harga</label>
						<input name="harga" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="harga" class="control-label">Gambar</label>
						<input name="gambar" type="file" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary" style="margin-bottom: 10px; ">Submit</button>
				</form>
			</div>
		</div>
	</div>
@stop