<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$instansi = $_POST['instansi'];
$keperluan = $_POST['keperluan'];
$kesanpesan = $_POST['kesanpesan'];
$ttd = $_POST['ttd'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE bukuTamu SET tanggalTamu='$tanggal', namaTamu='$nama', instansiTamu='$instansi',keperluanTamu='$keperluan',kesanpesanTamu='$kesanpesan',ttdTamu='$ttd' WHERE idTamu='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>