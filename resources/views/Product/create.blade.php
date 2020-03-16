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
					<div class="form-group">
		                <label for="product_kategori" class="control-label">Category</label>
		                <select class="form-control" name="product_kategori" style="height: 40px;">
		                    @foreach($data as $category)
		                      <option value="{{ $category->id_kategori }}">{{ $category->nama_kategori }}</option>
		                    @endforeach
		                </select>
                	</div>
					<button type="submit" class="btn btn-primary" style="margin-bottom: 10px; margin-top: 10px;">Submit</button>
				</form>
			</div>
		</div>
	</div>
@stop