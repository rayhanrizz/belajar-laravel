@extends('layouts.header')
@section('content')
<div class="container">
	<div class="section-header">
            <h1>Data Barang</h1>
          </div>
		<div class="card">
			<div class="card-body">
				<div class="card-header">
					<form class="card-header-form">
                    <div class="input-group">
                       <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
                        <div class="input-group-btn">
                         <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                        </div>
                     </div>
                </form>
                <a href="export_excel" class="btn btn-success my-3" target="_blank" style="margin-left: 480px;"><i class="fas fa-print"></i> EXPORT EXCEL</a>
            	<a href="Product/cetak_pdf" class="btn btn-danger my-3" target="_blank" style="margin-left: 10px;"><i class="fas fa-print"></i> EXPORT PDF</a>
				</div>
				<table class="table table-hover" id="mytable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Barang</th>
							<th>Stock</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Category</th>
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
						<td>{{ $produk->kategori->nama_kategori }}</td>
						<td><a href="{{url('Product/' .$produk->id. '/edit')}}" class="btn btn-warning">Edit</a> <a href="{{url('Product/' .$produk->id. '/delete')}}"  onclick="return confirm('Are you sure to delete this data ?');" class="btn btn-danger">Delete</a></td>
					</tr>
					@endforeach
					</tbody>
				</table>
				{!! $data->appends(request()->except('page'))->render() !!}
			</div>
		</div>
	</div>
	@stop