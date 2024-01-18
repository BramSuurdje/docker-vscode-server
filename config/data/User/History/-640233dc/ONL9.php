<?php 
$dsn = "mysql:host=mysql;dbname=users;charset=utf8mb4";
$username = "root";
$password = "qwerty";
try {
    $pdo = new PDO($dsn, $username, $password, );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $e) {
    echo "something did not work: <br>" . $e;
}
?>