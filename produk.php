<?php
class Produk extends Database
{
    //Menamapilkan Semua Data
    public function index(){
        $data_produk=mysqli_query($this->koneksi,"select*from produk1");
        return $data_produk;
    }
    //Menambah Data
    public function create($nama,$jenis,$harga,$jumlah,$total){
        mysqli_query($this->koneksi,"insert into produk1 values(null,'$nama','$jenis','$harga','$jumlah','$total')");
        
    }
    //Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $data_produk = mysqli_query($this->koneksi,"select*from produk1 where id='$id'");
        return    $data_produk;
    }
    public function edit($id)
    {
        $data_produk = mysqli_query($this->koneksi,"select*from produk1 where id='$id'");
        return    $data_produk;
    }
    public function update($id,$nama,$jenis,$harga,$jumlah,$total)
    {
        mysqli_query($this->koneksi,"update produk1 set nama_produk='$nama',
        jenis_produk='$jenis', harga_satuan='$harga', jumlah_barang= '$jumlah', total_harga='$total' where id ='$id' ");

    }
    //menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from produk1 where id=' $id'");
    }
}
?>