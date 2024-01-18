<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('./lib/db-connect.php')
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <button type="submit">submit</button>
    </form>
</body>
</html>