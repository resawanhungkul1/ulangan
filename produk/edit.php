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

        <?php
    include '../database.php';
    $produk= new Produk();
    foreach ($produk->edit($_GET['id']) as $data){
        $id=$data['id'];
        $nama=$data['nama_produk'];
        $jenis=$data['jenis_produk'];
        $harga=$data['harga_satuan'];
        $jumlah=$data['jumlah_barang'];
        $total=$harga*$jumlah;
        $total_pem =$total;
       

    }
    ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10" style="padding:20px">
					<div class="card">
						<div class="card-header"><marque> Update Data</marque></div>

						<div class="card-body">
							<form action="proses.php?aksi=update" method="post">
							  <input type="hidden" name="id" value="<?php echo $id; ?>">
								<div class="form-group">
									<label >Nama Produk </label>
									<input type="text" name="nama_produk" class="form-control" value="<?php echo $nama?>"required >
								</div>
								<div class="form-group">
									<label >Jenis Produk</label>
									<input type="text" name="jenis_produk" class="form-control" value="<?php echo $jenis?>"required>
								</div>
								<div class="form-group">
									<label >Harga Satuan</label>
                                    <input type="text" name="harga_satuan" class="form-control"value="<?php echo $harga?>"required>
								</div>
								<div class="form-group">
									<label >Jumlah Barang</label>
									<input type="text" name="jumlah_barang" class="form-control" value="<?php echo $jumlah?>" required>
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