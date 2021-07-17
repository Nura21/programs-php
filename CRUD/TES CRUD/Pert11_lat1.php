<?php 

$servername='localhost';

$dbusername='nura';
$dbpassword='';
$link=mysqli_connect("$servername","$dbusername","$dbpassword") or die("Not able to connect to server");

if($link){
    echo "ok ..... koneksi berhasil";
}

?>