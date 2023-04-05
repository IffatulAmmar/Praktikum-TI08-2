<?php
class Pelanggan{
    private $koneksi;
    // akses properti yang bersifat private menggunakan $this
    public function __construct(){
        // function construck adalah function yang pertama kali dijalankan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampil(){
    // cetak seluruh data tabel produk menggunakan query select
        $sql = "SELECT p.*, k.nama AS namakartu
        FROM pelanggan p INNER JOIN kartu k ON k.id= p.kartu_id
        ORDER BY p.id";
        
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