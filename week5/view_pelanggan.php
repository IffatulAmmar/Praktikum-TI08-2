<<<<<<< HEAD
<?php 
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];

    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();

?>

<table class="table table-striped">
    <tbody>
        <tr>   <td>ID</td><td><?=$row['id']?></td></tr>
        <tr>   <td>Kode</td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Jenis Kelamin</td><td><?=$row['jk']?></td></tr>
        <tr>   <td>Tempat Lahir</td><td><?=$row['tmp_lahir']?></td></tr>
        <tr>   <td>Tanggal Lahir</td><td><?=$row['tgl_lahir']?></td></tr>
        <tr>   <td>Email</td><td><?=$row['email']?></td></tr>
        <tr>   <td>Kartu ID</td><td><?=$row['kartu_id']?></td></tr>
    </tbody>
=======
<?php 
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];

    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();

?>

<table class="table table-striped">
    <tbody>
        <tr>   <td>ID</td><td><?=$row['id']?></td></tr>
        <tr>   <td>Kode</td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Jenis Kelamin</td><td><?=$row['jk']?></td></tr>
        <tr>   <td>Tempat Lahir</td><td><?=$row['tmp_lahir']?></td></tr>
        <tr>   <td>Tanggal Lahir</td><td><?=$row['tgl_lahir']?></td></tr>
        <tr>   <td>Email</td><td><?=$row['email']?></td></tr>
        <tr>   <td>Kartu ID</td><td><?=$row['kartu_id']?></td></tr>
    </tbody>
>>>>>>> 1175c45de0bc81556f2c66acb0309a453e4046b9
</table>