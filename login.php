<?php 
    include("server.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login Here!</h2>
    </div>
    <form action="login.php" method="post">
        <?php include('error.php') ?>

        <div class="input-group">
            <label for="name">Enter Usename</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="password">Enter Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>

        <p>
            New Here?
            <a href="register.php">
                Click Here to register!
            </a>
        </p>

    </form>
</body>
</html>
