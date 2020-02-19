@extends('layouts.header')
@section('content')
	<div class="container">
		<div class="card">
      <h3 style="margin: 10px;"><center>Edit Kategori</center></h3>
			<div class="card-body">
				<form action="{{ url('Category/' . $kategori->id . '/update') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nama" class="control-label">Nama Kategori</label>
						<input name="nama_kategori" type="text" class="form-control" value="{{$kategori->nama_kategori}}">
					</div>
					<div class="form-group">
						<label for="stock" class="control-label">Product ID</label>
						<input name="product_id" type="text" class="form-control" value="{{$kategori->product_id}}">
					</div>
					<button type="submit" class="btn btn-primary" style="margin-bottom: 10px; ">Edit</button>
				</form>
			</div>
		</div>
	</div>
@stop