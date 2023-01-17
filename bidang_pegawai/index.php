<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>DATA PB</title>
    <style>
        body {
            background-image: url("img/gedung.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
		tr {
			box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
			border: 1px dashed gray;
		}
		table {
			box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
			padding: 10px;
			border: 1px dashed gray;
		}
    </style>
  </head>

  <body>
    <div class="container" style="margin-top: 40px">
	<h1><center>DATA PEGAWAI DAN BIDANG</center></h1>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
             TABEL PEGAWAI DAN BIDANG
            </div>
            <div class="card-body">
              <table class="table table-striped" >
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA PEGAWAI</th>
                    <th scope="col">NAMA BIDANG</th>
                    <th scope="col">JUMLAH PENDAPATAN</th>
                    <th scope="col">KETERANGAN</th>
                  </tr>
                </thead>
                <tbody>
                <?php     
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($koneksi,"SELECT a.nama_bidang,b.nama_pegawai, SUM(c.pendapatan) AS jumlah_pendapatan FROM master_bidang a
                      INNER JOIN master_pegawai b ON a.id=b.id INNER JOIN master_pendapatan c ON c.id_pegawai=b.id GROUP BY b.nama_pegawai
                      ORDER BY a.nama_bidang");
                      while($row = mysqli_fetch_array($query)){

                      $jumlah_pendapatan=$row['jumlah_pendapatan'];
                      if ($jumlah_pendapatan < 50000) {
                       $keterangan = "Di bawah UMR";
                       $color = "style='background-color: red;'";
                      } else if ($jumlah_pendapatan < 100000) {
                        $keterangan = "Standart UMR";
                      $color = "style='background-color: blue;'";
                    } else {
                      $keterangan = "Di atas UMR";
                      $color = "style='background-color: green;'";
                    }
                  ?>
                  
                  </tbody>
                  <tr   <?= $color ?> scope="row"><?php echo $no;?>
                    
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_pegawai'] ?></td>
                      <td><?php echo $row['nama_bidang'] ?></td>
                      <td><?php echo $row['jumlah_pendapatan'] ?></td>
                      <td><?php echo $keterangan ?></td>
                      </tr>

                      <?php } ?>


                
                      </tbody>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>