<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data dengan POST</title>
</head>
<body>
    <form action="latihanPOST.php" method="post">
        Masukkan nama : 
        <input type="text" name="name" id="">
        <br>
        <button type="submit" name="submit">Send</button>
    </form>
    <!--
        Jika suatu form tidak memiliki action,atau actionnya kosong
        Maka data akan dikirim ke tempat dimana form berada

        Jika suatu form tidak memiliki method atau methodnya dikosongkan
        Maka method yang akan digunakan secara default adalah method GET

    -->
</body>
</html>