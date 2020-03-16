@extends('layouts.header')
@section('content')
	<div class="container">
		<div class="card">
      <h3 style="margin: 10px;"><center>Edit Kategori</center></h3>
			<div class="card-body">
				<form action="{{ url('Category/' . $kategori->id_kategori . '/update') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nama" class="control-label">Nama Kategori</label>
						<input name="nama_kategori" type="text" class="form-control" value="{{$kategori->nama_kategori}}">
					</div>
					<button type="submit" class="btn btn-primary" style="margin-bottom: 10px; ">Edit</button>
				</form>
			</div>
		</div>
	</div>
@stop