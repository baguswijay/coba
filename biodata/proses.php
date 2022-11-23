<?php

    require('koneksi.php');

    if(isset($_POST['Tambah'])){
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $umur = $_POST['umur'];

        $result = mysqli_query($conn, "INSERT INTO biodata (nama,jenis_kelamin,umur) VALUES ('$nama', '$jk', '$umur')");

        header('Location: index.php');
    }

    if (isset($_GET['Hapus'])) {
        $id = $_GET['id'];

        $result = mysqli_query($conn, "DELETE FROM biodata WHERE id='$id'");

        header('Location: index.php');
    }

    if (isset($_POST['Ubah'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $umur = $_POST['umur'];

        $result = mysqli_query($conn, "UPDATE biodata SET nama='$nama', jenis_kelamin='$jk', umur='$umur' WHERE id ='$id'");

        header('Location: index.php');
        
    }
?>