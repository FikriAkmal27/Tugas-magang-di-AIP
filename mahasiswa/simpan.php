<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nim           = $_POST['nim'];
$nama = $_POST['nama'];
$kelamin       = $_POST['kelamin'];
$jurusan       = $_POST['jurusan'];

//query insert data ke dalam database
$query = "INSERT INTO tabel_mahasiswa (nim, nama, kelamin, jurusan) VALUES ('$nim', '$nama', '$kelamin','$jurusan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>