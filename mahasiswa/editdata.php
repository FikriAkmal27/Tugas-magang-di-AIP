<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM TABEL_MAHASISWA WHERE NIM =  $id LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);
  $nim = $row['nim'];
  $nama = $row['nama'];
  $kelamin = $row['kelamin'];
  $jurusan = $row['jurusan'];
  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
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
              EDIT SISWA
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
        
                  <div class="form-group">
                    <label>nim</label>
                    <input type="number" name="nim" value="<?php echo $row['nim'] ?>" placeholder="Masukkan NIM" class="form-control">
                  </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan NAMA" class="form-control">
                </div>
                <div class="form-group">
                  <label>KELAMIN</label>
                  <select name="kelamin" id="kelamin" class="form-control" >
                    <option <?php echo $kelamin == 'L' ? 'selected="selected"' : '' ?>>L</option>
                    <option <?php echo $kelamin == 'P' ? 'selected="selected"' : '' ?>>P</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>JURUSAN</label>
                  <select name="jurusan" id="jurusan" class="form-control">
                    <option value="TI"<?php echo $jurusan == 'TI' ? 'selected="selected"' : '' ?>>TI</option>
                    <option value="SI"<?php echo $jurusan == 'SI' ? 'selected="selected"' : '' ?>>SI</option>
                    <option value="MI"<?php echo $jurusan == 'MI' ? 'selected="selected"' : '' ?>>MI</option>
                    <option value="TK"<?php echo $jurusan == 'TK' ? 'selected="selected"' : '' ?>>TK</option>
                    <option value="KA"<?php echo $jurusan == 'KA' ? 'selected="selected"' : '' ?>>KA</option>
                  </select>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-danger">RESET</button>

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