<?php 
$dsn = "mysql:host=mysql";
$username = "root";
$password = "qwerty";
try {
    $pdo = new PDO($dsn, $username, $password, );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $e) {
    echo "something did not work: <br>" . $e;
}
?>