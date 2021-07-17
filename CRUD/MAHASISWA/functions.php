<?php 

    //konek ke database 
    //urutan connect database , 
    //nama host,username mysql,password,namadb
    $conn=mysqli_connect("localhost","nura","","lat_mahasiswa_php_CRUD_LOGIN");

    function query($query){
        //mengatasi undefined $conn
        //kenapa global,agar bisa kebaca anjay
        
        global $conn;
        //www
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


    function tambah($data){
        global $conn;
        //htmlspecialchars berguna mengamankan data,
        //jadi data html yang diinput melalui database 
        //tidak bisa mengutak katik html
        
        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        $query ="INSERT INTO mhs(nama,nrp,email,jurusan) VALUES('$nama','$nrp','$email','$jurusan')"; //query insert

        $result=mysqli_query($conn,$query); //akhir data dilemparkan ke result

        return mysqli_affected_rows($conn);//." ".mysqli_error($conn);//berguna agar mengetahui apakah data masuk atau tidak
    }

    function hapus($id){
        //$id bisa digantikan dengan $data
        global $conn;
        $query="DELETE FROM mhs WHERE id=$id";
        $result = mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }


?>