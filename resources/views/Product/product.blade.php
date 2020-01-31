<!DOCTYPE html>
<html>
<head>
	<title>Jordan Warehouse</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
	<center><img src="img/lo.png" width="160"></center>
	<nav class="navbar " style="background: #6495ED;">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 ">
      <ul class="nav navbar-nav ">
        <li class=""><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Galeri</a></li>
        <li><a href="#">T-Shirt</a></li>
        <li><a href="#">Hoodie</a></li>
        <li><a href="#">Shoes</a></li>
      </ul>
        <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
    </div>
  </div>
</nav>
	<div class="container">
		<div class="card">
			<div class="card-body">
				<table class="table table-hover" id="mytable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Barang</th>
							<th>Stock</th>
							<th>Harga</th>
						</tr>
					</thead>
					<tbody>
					@foreach($data as $produk)
					<tr>
						<td>{{ $produk->id }}</td>
						<td>{{ $produk->name }}</td>
						<td>{{ $produk->stok }}</td>
						<td>{{ $produk->harga }}</td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="container footercolor">
  <div class="row title text-center">
    <p><center>Jordan Warehouse ~ copyright &#169; 2020 All rights reserved</center></p>
  </div>
</div>
</body>
</html>