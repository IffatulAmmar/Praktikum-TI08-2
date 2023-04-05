<?php
$model = new Pesanan();
$data_pesanan = $model->tampil();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Pesanan</li>
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
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Pelanggan Id</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- cetak data array produk -->
                    <?php
                    foreach ($data_pesanan as $value) {
                    ?>
                    <tr>
                        <td><?= $value ['id'] ?> </td>
                        <td><?= $value ['tanggal'] ?> </td>
                        <td><?= $value ['total'] ?> </td>
                        <td><?= $value ['namapelanggan'] ?> </td>
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