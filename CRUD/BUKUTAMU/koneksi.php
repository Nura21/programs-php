<?php 
    $koneksi = mysqli_connect("localhost","nura","","lat_bukuTamu");

    if(mysqli_connect_errno()){
        echo "Koneksi database gagal ->".mysqli_connect_error();
    }else{
        echo "";
    }
?>