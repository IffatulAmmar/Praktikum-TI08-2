<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<div class="content-wrapper">
    <br>
    <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            <i class="nav-icon fas fa-laptop-house"></i>
            Praktikum 2
        </h3>  
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content p-0">
            <?php
                include_once('backuppraktikum/form_nilai.php');
                include_once('../../week2/nilai_siswa.php');
            ?>
        </div>
      </div>
    </div>
    </div>
    
</div>

<?php
include_once('footer.php');
?>