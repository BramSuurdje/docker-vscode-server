<?php 

$dsn = "mysql:host=mysql;dbname=users";
$un = "root";
$ps = "qwerty";

try {
    $pdo = new PDO($dsn, $un, $ps);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "BOEM!";
} catch (Exception $e) {
    echo "something went wrong: <br>" . $e;
}

?>