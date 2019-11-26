<?php
class Database
{
    public $host="localhost",$user="root",$pass,$db="produk";
    public $koneksi;
    public function __construct() {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if($this->koneksi){
            //echo "berhasil";
        }else{
            echo "koneksi data base gagal";
        }
    }
    
}
//Data Tabel Siswa
include 'produk.php';
//konekssi DB
$db=new Database();
?>