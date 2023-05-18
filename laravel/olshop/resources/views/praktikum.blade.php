<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
  <h1 style="text-align:center;">Form Pemeriksaan</h1>
<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
    <div class="col-8">
      <input id="tgl" name="tgl" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="lhr" class="col-4 col-form-label">Tanggal Lahir / Usia</label> 
    <div class="col-8">
      <input id="lhr" name="lhr" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L"> 
        <label for="jk_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <!-- <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div> -->
</form>

  <table border="1" style="margin-left:auto;margin-right:auto; min-width:50vw">
    <tr>
      <th>Jenis Tes</th>
      <th>Hasil Pemeriksaan</th>
      <th>Normal</th>
    </tr>
    <tr>
      <td>Tekanan Darah</td>
      <td></td>
      <td>120/80 mmhg</td>
    </tr>
    <tr>
      <td>Asam urat</td>
      <td></td>
      <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
    </tr>
    <tr>
      <td>Kolesterol total</td>
      <td></td>
      <td>< 200 mg/dl</td>
    </tr>
    <tr>
      <td rowspan="3"> Gula Darah</td>
      <td rowspan="3"></td>
      <td>Puasa: 70-110 mg/dl</td>
    </tr>
    <tr>
      <td>2 jam setelah makan: 100-150 mg/dl</td>
    </tr>
    <tr>
      <td>Sewaktu/acak : 70-125 mg/dl</td>
    </tr>
  </table>
</div>
</body>
</html>