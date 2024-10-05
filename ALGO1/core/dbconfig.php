<?php
//way to interact with the database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "algo"; //this is the database file name that will be used in the activity
$dsn = "mysql:host={$host};dbname={$dbname}";

$pdo = new PDO($dsn, $user, $password);
$pdo->exec("SET time_zone = '+08:00';");

?>