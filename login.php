<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Login</title>
</head>

<body>
    <?php require 'partials/header.php' ?>
    <h1>Login</h1>
    <span>or <a href="signup.php">Signup</a></span>
    <form action="login.php" method="post">
        <input type="email" name="email" id="email" placeholder="Ingresa tu email">
        <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Login">
    </form>
</body>

</html>