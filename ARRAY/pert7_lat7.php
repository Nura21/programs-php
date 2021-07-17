<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// $date = "17/05/2010"; 
// list($hari,$bulan,$tahun) = split('[/.-]',$date); 
// echo "Hari = $hari"; 
// echo "<br />"; 
// echo "Bulan = $bulan"; 
// echo "<br />"; 
// echo "Tahun = $tahun"; 
?>


</body>
</html> -->

<HTML> 
<HEAD> 
<TITLE> Penggunaan Split </TITLE> 
</HEAD> 
<BODY> 
<?php 
$tanggal = "17-05-2010"; 
list($hari, $bulan, $tahun) = explode("-", $tanggal); 
echo "Hari = $hari"; 
echo "<br />"; 
echo "Bulan = $bulan"; 
echo "<br />"; 
echo "Tahun = $tahun"; 
?> 
</BODY> 
</HTML>