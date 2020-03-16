<!DOCTYPE html>
<html>
<head>
	<title>Data Product</title>
</head>
<body>
	<style type="text/css">
		h5{
          text-align:center; }
       table { 
          border-collapse:collapse;
          border-spacing:0;     
          font-family:Arial, sans-serif;
          font-size:16px;
          margin:auto; }
       table th {
          font-weight:bold;
          padding:10px;
          color:#fff;
          background-color:#2A72BA;
          border-top:1px black solid;
          border-bottom:1px black solid;
          color: black;
      }
       table td {
          padding:10px;
          border-top:1px black solid;
          border-bottom:1px black solid;
          text-align:center; 
          color: black;
        }         
       tr:nth-child(even) {
         background-color: #DFEBF8; }
    </style>
	</style>
	<center>
		<h5>Laporan Data Product</h4>
	</center>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Barang</th>
				<th>Stock</th>
				<th>Harga</th>
				<th>Gambar</th>
				<th>Category</th>
				</tr>
		</thead>
		<tbody>
			@foreach($data as $produk)
				<tr>
					<td>{{ $produk->id }}</td>
					<td>{{ $produk->name }}</td>
					<td>{{ $produk->stock }}</td>
					<td>{{ $produk->harga }}</td>
					<td>{{ $produk->gambar }}</td>
					<td>{{ $produk->kategori->nama_kategori }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>