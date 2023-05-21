<?php 
    session_start();

    require('../connect.php');
    if($_SESSION['status']!="Login"){
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>CRUD</title>
</head>
<body>
    <br>
    <br>
    <br>
    <h1>Halo Halo</h1>
    <h3>SELAMAT DATANG <?php echo $_SESSION['email']; ?></h3>
    <nav>
        <div class="navbar">
            <a href="">Home</a>
            <a href="../merek/index.php">Merek</a>
            <a href="../jenis/index.php">Jenis</a>
            <a href="../produk/index.php">Produk</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>
</body>
</html>