<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan List 2</title>
</head>
<body>
    <?php 
        $program = array('Bobo','Doraemon','Spiderman'); 
        list($Majalah, , $Film) = $program; 
        echo "Jenis Buku & Hiburan :"; 
        echo "<br />"; 
        echo "Cerpen : $Majalah"; 
        echo "<br />"; 
        echo "Bioskop : $Film"; 
    ?>
</body>
</html>