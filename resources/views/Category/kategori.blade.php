@extends('layouts.header')
@section('content')
<div class="container">
	<div class="section-header">
            <h1>Data Kategori</h1>
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
                <a href="export_excel_kat" class="btn btn-success my-3" target="_blank" style="margin-left: 480px;"><i class="fas fa-print"></i> EXPORT EXCEL</a>
                <a href="Category/cetak_pdf" class="btn btn-danger my-3" target="_blank" style="margin-left: 10px;"><i class="fas fa-print"></i> EXPORT PDF</a>
				</div>
				<table class="table table-hover" id="mytable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Kategori</th>
							<th>Option</th>
						</tr>
					</thead>
					<tbody>
					@foreach($data as $produk)
					<tr>
						<td>{{ $produk->id_kategori }}</td>
						<td>{{ $produk->nama_kategori }}</td>
						<td><a href="{{url('Category/' .$produk->id_kategori. '/edit')}}" class="btn btn-warning">Edit</a> <a href="{{url('Category/' .$produk->id_kategori. '/delete')}}" class="btn btn-danger">Delete</a></td>
					</tr>
					@endforeach
					</tbody>
				</table>
				{!! $data->appends(request()->except('page'))->render() !!}
			</div>
		</div>
	</div>
	@stop