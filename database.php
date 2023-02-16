<?php
   
   $server = 'localhost';
   $username = 'root';
    $password = 'atlas100583';
    $database = 'php_login_database';

    try{
        $conexion = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    }catch (PDOException $e){
        die('Conexion fallida: ' . $e->getMessage());
    }
 ?>
