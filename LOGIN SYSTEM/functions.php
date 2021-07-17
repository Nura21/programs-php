<?php 

    //konek ke database 
    //urutan connect database , 
    //nama host,username mysql,password,namadb
    $conn=mysqli_connect("localhost","nura","","lat_mahasiswa_php_CRUD_LOGIN");

    function query($query){
        //mengatasi undefined $conn
        //kenapa global,agar bisa kebaca anjay
        
        global $conn;
        
        //menampung hasil akhir seperti biasanya,dengan koneksi dan querynya
        $result = mysqli_query($conn,$query);
        
        //sebagai tempat akhir untuk menempatkan data dari yang dihasilkan result
        $rows = [];
        
        //memulai pemasukkan data ke dalam array assosiatif
        while($row = mysqli_fetch_assoc($result)){
            //keren asli,di Java begini error,
            //tiap kotak dapat diisikan data biasa
            $rows[] = $row;
        }
        //pengembalian data berupa array assosiatif
        return $rows;
    }


?>