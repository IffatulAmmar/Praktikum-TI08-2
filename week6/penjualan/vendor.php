<?php
$model = new Vendor();
$data_vendor = $model->tampil();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vendor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Vendor</li>
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
                        <th>id</th>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Kota</th>
                        <th>Kontak</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- cetak data array produk -->
                    <?php
                    foreach ($data_vendor as $value) {
                    ?>
                    <tr>
                        <td><?= $value ['id'] ?> </td>
                        <td><?= $value ['nomor'] ?> </td>
                        <td><?= $value ['nama'] ?> </td>
                        <td><?= $value ['kota'] ?> </td>
                        <td><?= $value ['kontak'] ?> </td>
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