<?php
    echo "Tabel Perkalian";
    echo "<br>==================";
    $angka=12;
    for($i=15; $i<=45; $i++){
        if($i%2==0){
            continue;
        }else{
            print("$angka * $i = ".($angka*$i)."<br>";
        }
    }
?>