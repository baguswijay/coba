<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
            <form action="login/proses.php" method="post">
                <h3>Login Now</h3>
                <label for="">Email:</label>
                <input type="email" name="email" id="email" required>
                <label for="">Password:</label>
                <input type="password" name="password" id="password" required>
                <input type="submit" name="submit" value="Login" class="btn">
                <p>don't have an account? <a href="login/form_register.php">Register Now</a></p>
            </form>
    </div>
</body>
</html>
