<?php 
    // //koneksi database
    //JIKA INGIN TANPA FUNCTION,GUNAKAN SRC DIBAWAH
    // $conn=mysqli_connect("localhost","root","root_password","belajar_php_mahasiswa");

    
    //jika tombol submit ditekan
    //"submit" disini adalah name pada type button
    require 'functions.php'; //akan mendirect ke functions.php

    //ambil data di url
    $id = $_POST["id"];

    //query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
    //data nanti akan berbentuk array assosiatif
    var_dump($mhs);

    if( isset($_POST["submit"])){
        //JIKA INGIN TANPA FUNCTION,GUNAKAN SRC DIBAWAH
        //MEMBUAT VARIABEL $nama dan lainlain,bisa diubah untuk variabel tersebut
        //$POST["name"] adalah cara mengambil data yang diinput menggunakan form html dibawah
        // $nama = $_POST["name"];
        // $nrp = $_POST["nrp"];
        // $email = $_POST["email"];
        // $jurusan = $_POST["jurusan"];

        // $query ="INSERT INTO mhs VALUES('','$nama','$nrp','$email','$jurusan')"; //query insert

        // $result=mysqli_query($conn,$query); //akhir data dilemparkan ke result
        
        // //cek apakah data berhasil

        // if(mysqli_affected_rows($conn)>0){
        //     echo "Berhasil";
        // }else{
        //     echo "Gagal <br>";
        //     echo mysqli_error($conn);
        // }

        //DENGAN FUNCTION
            //koneksi dan query sudah dilakukan di functions.php
            //cek apakah data berhasil diinput atau tidak
            if(ubah($_POST)>0){
                echo "<script> alert('Data berhasil diubah!')
                document.location.href='admin.php'
                </script>";
            }else{
                echo "<script> alert('Data tidak berhasil diubah!')</script>".mysqli_error($conn);
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <!--Jika action tidak diisi,maka data akan masuk ke dalam halaman ini-->
    <form action="" method="post">
        <ul>
        
            <li>
                <label for="name">Name :</label>
                <input type="text" name="text" id="name" value="<?php echo $mhs['nama']; ?>" required>
            </li>
            <li>
            <!--required berguna agar data harus diisi,jika tidak diisi tidak bisa submit-->
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" value="<?php echo $mhs['nrp']; ?>" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" value="<?php echo $mhs['email']; ?>" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan"  value="<?php echo $mhs['jurusan']; ?>" required>
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
                <!--Gunakan name selalu,karena sangat penting-->
            </li>
        </ul>
    </form>
</body>
</html>