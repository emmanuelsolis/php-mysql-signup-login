<?php
    require 'database.php';
    $message = '';

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
        if($stmt->execute()){
            $message = 'Successfully created new user';
        }else{
            $message = 'Sorry there must have been an issue creating your account';
        }
    }
?>
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
    <title>Signup</title>
</head>
<body>

    <?php require 'partials/header.php' ?>
    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <h1>SigngUp</h1>
    <span>or<a href="login.php">Login</a></span>
    <form action="signup.php" method="post">
        <input type="email" name="email" id="email" placeholder="Ingresa tu email">
        <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña">
        <input type="password" name="confirm_password" id="password" placeholder="Confirma tu contraseña">
        <input type="submit" value="signup">
    </form>

</body>
</html>