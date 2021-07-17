<?php 
//DELETE ARTIKEL
include "Pert13_koneksiArtikel.php";
global $koneksi;
$articleID = $_GET['articleID']; 
$perintah="DELETE FROM articles WHERE articleID =\"$articleID\""; 
$hasil= mysqli_query ($koneksi,$perintah); 
if ($hasil) { 
 echo "Artikel berhasil dihapus<br>"; 
 echo "<a href=\"Pert13_tampilArtikel.php\">Back</a>"; 
} else { 
 echo "Komentar gagal dihapus. Kemungkinan terjadi kegagalan koneksi 
 ke database MySQL."; 
 } 
?>