<?php 
    require('../connect.php');

    if(isset($_POST['register'])){
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        // if($)
    }
?>



<form action="" method="post">
    <div>
        <label for="">Email:</label>
        <div>
            <input type="text" name="email" placeholder="Email">
        </div>
    </div>
    <div>
        <label for="">Password:</label>
        <div>
            <input type="text" name="password" placeholder="Password">
        </div>
    </div>
    <div>
        <a href="../index.php">Login</a>
        <button type="submit" name="register">Register</button>
    </div>
</form>