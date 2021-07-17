<?php 

//TAMPILAN ARTIKEL
include "Pert13_koneksiArtikel.php";
global $koneksi; 
$perintah="SELECT * FROM articles ORDER BY articleID DESC"; 
$hasil=mysqli_query($koneksi,$perintah); 
echo(" 
<h2>List Artikel</h2> 
<br><UL> 
"); 
while ($row=mysqli_fetch_array($hasil)) 
{ 
echo(" 
 <LI>$row[1] &nbsp;$row[2] &nbsp; $row[waktu] &nbsp;<a 
href=\"Pert13_editArtikel.php?articleID=$row[0]\">Edit</a> 
 &nbsp;<a 
href=\"Pert13_deleteArtikel.php?articleID=$row[0]\">Hapus</a></LI><br>"); 
} 
echo("</table>"); 
echo "<br><a href=\"Pert13_formArtikel.php\">Tambah</a>"; 
echo "<br><a href=\"Pert13_adminArtikel.php\">Admin Panel</a>"; 
?>