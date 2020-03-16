@extends('layouts.header')
@section('content')
	<div class="container">
		<div class="card">
      <h3 style="margin: 10px;"><center>Edit Barang</center></h3>
			<div class="card-body">
				<form action="{{ url('Product/' . $product->id . '/update') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nama" class="control-label">Nama Barang</label>
						<input name="name" type="text" class="form-control" value="{{$product->name}}">
					</div>
					<div class="form-group">
						<label for="stock" class="control-label">Stock</label>
						<input name="stock" type="text" class="form-control" value="{{$product->stock}}">
					</div>
					<div class="form-group">
						<label for="harga" class="control-label">Harga</label>
						<input name="harga" type="text" class="form-control" value="{{$product->harga}}">
					</div>
					<div class="form-group">
						<label for="harga" class="control-label">Gambar</label>
						<input name="gambar" type="file" class="form-control" value="{{ url('/image/'.$product->gambar) }}">
						<input name="hidden_image" type="hidden" class="form-control" value="{{$product->gambar}}">
					</div>
					<div class="form-group">
                            <label for="product_kategori" class="control-label">Category</label>
                            <select class="form-control" name="product_kategori" style="height: 40px;">
                                @foreach( $kategoris as $kategori)
		                            <option value="{{ $kategori->id_kategori }}" {{ $kategori->id_kategori == $product->product_kategori ? 'selected="selected"' : '' }}> {{ $kategori->nama_kategori }} </option>
		                        @endforeach
                            </select>
                        </div>
					<button type="submit" class="btn btn-primary" style="margin-bottom: 10px; ">Edit</button>
				</form>
			</div>
		</div>
	</div>
@stop