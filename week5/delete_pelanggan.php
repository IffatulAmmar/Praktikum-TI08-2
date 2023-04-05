<<<<<<< HEAD
<?php 
    require_once 'dbkoneksi.php';

    // id untuk delete
$id = $_GET['iddel'];

// search pesanan
$sql1 = "SELECT * FROM pesanan WHERE pelanggan_id=" .$id;
$rs = $dbh->query($sql1);

foreach ($rs as $pel){
    $sql1 = "DELETE FROM pesanan_items WHERE pesanan_id=?";
    $st = $dbh->prepare($sql1);
    $st->execute([$pel['id']]);
}

$sql2 = "DELETE FROM pesanan WHERE pelanggan_id=?";
$st = $dbh->prepare($sql2);
$st->execute([$id]);

// hapus produk
$sql = "DELETE FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$id]);

header('location:list_pelanggan.php');

=======
<?php 
    require_once 'dbkoneksi.php';

    // id untuk delete
$id = $_GET['iddel'];

// search pesanan
$sql1 = "SELECT * FROM pesanan WHERE pelanggan_id=" .$id;
$rs = $dbh->query($sql1);

foreach ($rs as $pel){
    $sql1 = "DELETE FROM pesanan_items WHERE pesanan_id=?";
    $st = $dbh->prepare($sql1);
    $st->execute([$pel['id']]);
}

$sql2 = "DELETE FROM pesanan WHERE pelanggan_id=?";
$st = $dbh->prepare($sql2);
$st->execute([$id]);

// hapus produk
$sql = "DELETE FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$id]);

header('location:list_pelanggan.php');

>>>>>>> 1175c45de0bc81556f2c66acb0309a453e4046b9
?>