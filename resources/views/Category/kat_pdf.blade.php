<!DOCTYPE html>
<html>
<head>
	<title>Data Kategori</title>
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
		<h5>Laporan Data Kategori</h4>
	</center>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Kategori</th>
				</tr>
		</thead>
		<tbody>
			@foreach($data as $produk)
				<tr>
					<td>{{ $produk->id_kategori }}</td>
					<td>{{ $produk->nama_kategori }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>