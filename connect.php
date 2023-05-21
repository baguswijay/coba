<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "sorum";

   
   $conn = new mysqli($servername, $username, $password, $dbname);
   
//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//    }
    // for($i=1; $i<=1000; $i++){
    //     $nama="Yamaha".$i;
    //     $jenis = "1";
    //     $merk = "1";
    //     $harga = "500000";
    //     mysqli_query($conn, "INSERT INTO produk (nama, jenis_id, merek_id, harga) VALUES ('$nama','$jenis','$merk','$harga')");
    // }
    // , jenis_id, merk_id, harga
    // ,'$jenis','$merk','$harga'
    // echo "data berhasil masuk";
    
?>