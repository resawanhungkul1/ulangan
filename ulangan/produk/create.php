<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
     <link rel="icon" type="image/png" href="logo.png" >
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
		<!-- Header -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand" href="#">RESAWAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> PRODUK<span class="sr-only">(current)</span></a>
      </li>
 
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0" action="index.php" method=" post">
 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Exit</button>
    </form>
  </div>
</nav>
		<!-- End Header -->

		<!-- Content -->


		<div class="container">
			<div class="row">
				<div class="col-md-12" style="padding:20px">
					<div class="card">
						<div class="card-header"><center>Tambah Data</center></div>

						<div class="card-body">
							<form action="proses.php?aksi=tambah" method="post">
								<div class="form-group">
									<label >Nama Produk </label>
									<input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk"required >
								</div>
								<div class="form-group">
									<label >Jenis Produk</label>
									<input type="text" name="jenis_produk" class="form-control" placeholder="Jenis Produk"required>
								</div>
								<div class="form-group">
									<label >Harga Satuan</label>
                                    <input type="text" name="harga_satuan" class="form-control" placeholder="Harga Satuan"required>
								</div>
								<div class="form-group">
									<label >Jumlah Barang</label>
									<input type="text" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang" required>
								</div>
					

								<div class="form-group">
									<button type="submit" name="sim" class="btn btn-primary btn-block">simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- End Content-->

		<!-- footer -->
		<footer>
			<center><b>&copy; 2019 SMK ASSALAAM</b></center>

		</footer>
		<!--  End Footer-->

		<!-- Js -->
		<script  src="assets/js/jquery-3.4.1.min.js"></script>
		<script src=" assets/js/bootstrap.bundle.min.js"></script>
		<script src=" assets/js/bootstrap.bundle.js"></script>

		<!-- End Js -->

</body>
</html>