<?php
$model = new Pelanggan();
$data_pelanggan = $model->tampil();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Pelanggan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<section class="content">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                        <th>Kartu Id</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- cetak data array produk -->
                    <?php
                    foreach ($data_pelanggan as $value) {
                    ?>
                    <tr>
                        <td><?= $value ['id'] ?> </td>
                        <td><?= $value ['kode'] ?> </td>
                        <td><?= $value ['nama'] ?> </td>
                        <td><?= $value ['jk'] ?> </td>
                        <td><?= $value ['tmp_lahir'] ?> </td>
                        <td><?= $value ['tgl_lahir'] ?> </td>
                        <td><?= $value ['email'] ?> </td>
                        <td><?= $value ['namakartu'] ?> </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- /.content -->
</div>