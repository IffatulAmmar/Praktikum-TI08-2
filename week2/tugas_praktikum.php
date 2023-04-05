<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>Form Belanja Online</title>
</head>
<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-8">
                <h2>Belanja Online</h2>
                <hr>

                <!-- formulir -->
                <form method="POST" action="tugas_praktikum.php">
                  <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4">Product</label> 
                    <div class="col-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TELEVISION"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                  </div> 
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                        <input type="submit" value="Kirim" name="proses" class="btn btn-success">
                    </div>
                  </div>
                </form>
            </div>
            
            <!--table harga -->
            <div class="col-4">
                <table class="table">
                    <tr>
                        <td class="bg-primary" style="border-top-right-radius:10px; border-top-left-radius:10px; color:white">Daftar Harga</td>
                    </tr>
                    <tr>
                        <td class="table-bordered">TV : 4.200.000</td>
                    </tr>
                    <tr>
                        <td class="table-bordered">KULKAS : 3.100.000</td>
                    </tr>
                    <tr>
                        <td class="table-bordered">MESIN CUCI : 3.800.000</td>
                    </tr>
                    <tr>
                        <td class="bg-primary" style="border-bottom-right-radius:10px; border-bottom-left-radius:10px; color:white">HARGA DAPAT BERUBAH SETIAP SAAT</td>
                    </tr>
                </table>
            </div>
        </div>
        <hr>

        <?php
        // ambil data dari formulir
        $customer = $_POST['customer'];
        $product = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        // if produk
        if ($product == 'TELEVISION'){
            $harga = 4200000;
        }
        elseif ($product == 'KULKAS'){
            $harga = 3100000;
        }
        elseif ($product == 'MESIN CUCI'){
            $harga = 3800000;
        }

        // totalisasi harga
        $total_belanja = $jumlah * $harga;
        $total_belanja_formatted = number_format ($total_belanja);

        // cetak data formulir
        echo "Nama Customer : $customer";
        echo "<br> Product Pilihan : $product";
        echo "<br> Jumlah Beli : $jumlah";
        echo "<br> Total Belanja : Rp.$total_belanja_formatted,-";

        ?>
        
    </div>
</body>
</html>