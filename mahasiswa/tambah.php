<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
    <style>
        body{
            background-image: url("img/assyfa.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH SISWA
            </div>
            <div class="card-body">
              <form action="simpan.php" method="POST">
                
                <div class="form-group">
                  <label>NIM</label>
                  <input type="number" name="nim" required placeholder="Masukkan NIM" class="form-control">
                </div>

                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama"required placeholder="Masukkan NAMA" class="form-control">
                </div>

                <div class="form-group" >
                  <label>KELAMIN</label>
                  <select name="kelamin" id="kelamin" class="form-control" >
                    <option value="L">L</option>
                    <option value="P">P</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>JURUSAN</label>
                  <select name="jurusan" id="jurusan" class="form-control">
                    <option value="TI">TI</option>
                    <option value="SI">SI</option>
                    <option value="MI">MI</option>
                    <option value="TK">TK</option>
                    <option value="KA">KA</option>
                  </select>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>