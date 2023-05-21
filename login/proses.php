<?php 
    session_start();
    require('../connect.php');

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' and password='$pass'");

        if (mysqli_num_rows($result)>0) {

            $_SESSION['email'] = $email;
            $_SESSION['status'] = "Login";

            header("Location: index.php");
        } else {
            echo "Email atau password salah!";
        }

    }


?>