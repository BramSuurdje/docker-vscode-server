<?php 
$dsn = "mysql:host=mysql";
$username = "root";
$password = "qwerty";
$db_name = '';
try {
    $pdo = new PDO($dsn; $db_name, $username, $password, );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $e) {
    echo "something did not work: <br>" . $e;
}
?>