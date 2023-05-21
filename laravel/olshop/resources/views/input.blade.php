<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
    <div class="container">
         <h1 style="text-align:center;">Form Registrasi</h1>
         <!-- form -->
         <form action="{{ url('output') }}" method="POST">
            {{ csrf_field() }}
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Name</label>
            <div class="col-8">
              <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">E-mail</label>
            <div class="col-8">
              <input id="email" name="email" placeholder="Masukan E-mail Anda" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Gender</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki-Laki">
                <label for="jenis_kelamin_0" class="custom-control-label">Laki Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan">
                <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
