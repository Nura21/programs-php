<?php
$mahasiswa =[
    [
        "nrp" => "181011402208",
        "nama" => "Muhammad Irfansyahfalah",
        "email" => "m.Irfansyahfalah@gmail.com",
        "jurusan" => "Teknik Informatika",
        "kampus" => "Universitas Pamulang"
    ],[
        "nrp" => "18101140220ay",
        "nama" => "Rindi Handika",
        "email" => "rnd@gmail.com",
        "jurusan" => "Nurse",
        "kampus" => "Politeknik Kesehatan Banten"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihanGET.php?nama=<?php echo $mhs["nama"]; ?>&nrp=<?php echo $mhs["nrp"]; ?>&email=<?php echo $mhs["email"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&kampus=<?php echo $mhs["kampus"]; ?>">  
                    <?php 
                            echo $mhs["nama"]; 
                    ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>