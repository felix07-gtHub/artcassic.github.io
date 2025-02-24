<?php
    $host = "127.0.0.1";
    $user = "root";
    $password = "MySql47183";
    $database = "login_signup";

    try {
        $connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>
