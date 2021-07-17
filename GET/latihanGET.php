<!--Percobaan-->
<?php //cek apakah tidak ada data di $_GET
/**
 * Kegunaan isset adalah,agar tidak ada data yang masuk melalui url
 * latihanPHP/latihanGET.PHP?nama=irfansyah
 */
    //Jika suatu nama atau nrp atau email atau jurusan atau kampus tidak pernah diisi,maka arahkan file ke fileGET.php
    if(!isset($_GET["nama"]) || !isset($_GET["nrp"]) || !isset($_GET["email"]) || !isset($_GET["jurusan"]) || !isset($_GET["kampus"])){
        //redirect
        header("Location: fileGET.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <ul>
        <li>Nama    : <?php echo $_GET["nama"]; ?></li>
        <li>Nim     : <?php echo $_GET["nrp"]; ?></li>
        <li>Email   : <?php echo $_GET["email"] ?></li>
        <li>Jurusan : <?php echo $_GET["jurusan"]; ?></li>
        <li>Kampus  : <?php echo $_GET["kampus"];?></li>
    </ul>

    <a href="fileGET.php">Kembali ke daftar Mahasiswa</a>
</body>
</html>