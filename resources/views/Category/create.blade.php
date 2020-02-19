@extends('layouts.header')
@section('content')
	<div class="container">
		<div class="card">
			<div class="card-body">
        <h3 style="margin: 10px;"><center>Tambah Kategori</center></h3>
				<form action="{{ url('Category') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nama" class="control-label">Nama kategori</label>
						<input name="nama_kategori" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="stock" class="control-label">Product ID</label>
						<input name="product_id" type="text" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary" style="margin-bottom: 10px; ">Submit</button>
				</form>
			</div>
		</div>
	</div>
@stop