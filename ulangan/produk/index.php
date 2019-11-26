<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link rel="icon" type="image/png" href="logo.png" >
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
  
</head>
<body>
<div class="card badge-dark">

<div class="card-header" ><center>Data pembelian<center></div>
</div>
   

        <table id="example" class="table table-borderless" id="data-produk" style="width:100%">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Harga Satuan</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
                <th colspan="4"><center>Aksi</center></th>
            </tr>
            <?php
                include '../database.php';
                $produk = new Produk();
                $no=1;
                $total_pem=0;
                foreach($produk->index() as $data){
                    
                    $total_pem= $total_pem+$data['total_harga'];
                    ?>
                 <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_produk']; ?></td>
                    <td><?php echo $data['jenis_produk']; ?></td>
                    <td><?php echo $data['harga_satuan']; ?></td>
                    <td><?php echo $data['jumlah_barang']; ?></td>
                    <td><?php echo $data['total_harga']; ?></td>
            
                    <td><a href="show.php?id=<?php echo $data['id'];?>" type="button" class="btn btn-outline-success">Show</a></td>
                    <td><a href="edit.php?id=<?php echo $data['id'];?>" type="button" class="btn btn-outline-primary">Edit</a></td>
                    <td><a href="proses.php?id=<?php echo $data['id'];?>& aksi=delete"
                    onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini?')" type="button" class="btn btn-outline-danger">Delete</a></button></td>
                    
                 </tr>
                 <?php
                }
            ?>
        </table>
        <table id="example" class="table table-striped " style="width:100%">
                <tr> 
                    <th>total pembayaran</th>
                    <td><center><?php echo $total_pem; ?></center></td>
                
                </tr>
        </table>
        <form action="create.php" method="post">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <tr>
                <td><button class="btn btn-block btn-outline-success my-2 my-sm-0" type="submit">  tambah data</a></button></td>
       </tr>
        </table>
        </form>
    </fieldset>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
</body>
</html>