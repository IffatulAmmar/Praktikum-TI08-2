<?php
class Kartu{
    private $koneksi;
    // akses properti yang bersifat private menggunakan $this
    public function __construct(){
        // function construck adalah function yang pertama kali dijalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil(){
    // cetak seluruh data tabel produk menggunakan query select
        $sql = "SELECT * FROM kartu";
        
    // gunakan method prepare untuk mengirim data $sql
        $ps = $this->koneksi->prepare($sql);
    // eksekusi data yang sudah disiapkan menggunakan method prepare
        $ps->execute();
    // siapkan data sql yang sudah di eksekusi menggunakan method fetchALL
        $data = $ps->fetchALL();
    // kembalikan data produk yang dalam bentuk array 
        return $data;
    }
}
?>