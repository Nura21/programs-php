<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Is array</title>
</head>
<body>
<?php 
    $var = array(1,2,3,4,5,6,7); 
    $scan = is_array($var); 
    if ($scan == false) { 
    $status = "bukan"; 
    } else { 
    $status = ""; 
    } 
    echo "\$var = array(1,2,3,4,5,6,7)"; 
    echo "<br>"; 
    echo "Variabel \$var $status merupakan array"; 
?>
</body>
</html>