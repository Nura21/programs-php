<?php 
    require 'functions.php';
    //GET mengambil data yang ada di url,dengan nama id sesuai di databasenya,kemudian dimasukkan ke dalam variabel id

    $id = $_GET['id'];
    
    if(hapus($id)>0){
        //masuk ke fungsi hapus dengan id tersebut
        echo "<script> alert('Data berhasil dihapus!')
                document.location.href='admin.php'
                </script>";
    }else{
        echo "<script> alert('Data tidak berhasil dihapus!')</script> <br>";
        echo mysqli_error($conn);
    }
?>