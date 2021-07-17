<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$instansi = $_POST['instansi'];
$keperluan = $_POST['keperluan'];
$kesanpesan = $_POST['kesanpesan'];
$ttd = $_POST['ttd'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO bukuTamu(tanggalTamu,namaTamu,instansiTamu,keperluanTamu,kesanpesanTamu,ttdTamu) values('$tanggal','$nama','$instansi','$keperluan','$kesanpesan','$ttd')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>