<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nim     = $_POST['nim'];
$nama         = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$jurusan       = $_POST['jurusan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tabel_mahasiswa SET nim = '$nim', nama = '$nama', kelamin = '$kelamin', jurusan ='$jurusan' WHERE nim = '$nim'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>