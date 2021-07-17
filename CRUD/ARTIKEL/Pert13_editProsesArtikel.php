<?php

//EDIT PROSES ARTIKEL
include "Pert13_koneksiArtikel.php";
global $koneksi; 
$time=date("d M Y, H:i"); 
//$lead = str_replace("\r\n","<br>",$lead); 
//$content= str_replace("\r\n","<br>",$content); 
$update="UPDATE articles SET judul='$title', penulis='$author', 
lead='$abstraksi', 
content='$content', waktu='$time' WHERE articleID ='$ID'"; 
$hasil=mysqli_query($koneksi,$update); 
if ($hasil) { 
 echo "Artikel berhasil di update<br>"; 
 echo "<a href=\"Pert13_tampilArtikel.php\">List</a>"; 
} else { 
 echo "Artikel gagal di update"; 
} 
?>