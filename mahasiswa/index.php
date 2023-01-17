<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data MAHASISWA</title>
    <style>
        body{
            background-image: url("img/assyfa.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
  </head>

  <body>
    <div class="container" style="margin-top: 40px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
             DATA MAHASISWA
            </div>
            <div class="card-body">
              <a href="tambah.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-striped" >
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">KELAMIN</th>
                    <th scope="col">JURUSAN</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                  </tr>
                </thead>
                <tbody>
                  <?php     
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($koneksi,"SELECT * FROM tabel_mahasiswa");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nim'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['kelamin'] ?></td>
                      <td><?php echo $row['jurusan'] ?></td>
                      <td class="text-center">
                        <a href="editdata.php?id=<?php echo $row['nim'] ?>" class="btn btn-sm btn-primary">EDIT</a>  
                      </td>
                      <td class="text-center">
                        <a href="delete.php?id=<?php echo $row['nim'] ?>" class="btn btn-sm btn-danger">DELETE</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>