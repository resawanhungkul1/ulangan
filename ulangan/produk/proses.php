<?php
    include '../database.php';
    $produk= new Produk();
    
    $aksi =$_GET['aksi'];
    if (isset($_POST['sim'])) {
        $id=$_POST['id'];
        $nama=$_POST['nama_produk'];
        $jenis=$_POST['jenis_produk'];
        $harga=$_POST['harga_satuan'];
        $jumlah=$_POST['jumlah_barang'];
        $total=$harga*$jumlah;
        

    }
    if ($aksi=="tambah") {
        $produk->create($nama,$jenis,$harga,$jumlah,$total);
        header("location:index.php");
    }elseif ($aksi=="update") {
        $produk->update($id,$nama,$jenis,$harga,$jumlah,$total);
        header("location:index.php");
    }elseif ($aksi=="delete") {
        $produk->delete($_GET['id']);
        header("location:index.php");
    }

?>
