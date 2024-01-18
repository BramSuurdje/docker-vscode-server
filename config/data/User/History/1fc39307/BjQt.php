<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);


    if (!isset($email)) {
        echo "email not correct... try again";

        if (!isset($password)) {
            echo "password not correct... try again";
        }
        var_dump()

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login page</h1>
    
    <form action="" method="post">
        <input type="email" name="email" id="email" placeholder="email...">
        <input type="password" name="password" id="password" placeholder="password...">
        <button type="submit">Sign in</button>
        <a href="./sign-up.php">Register...</a>
    </form>
</body>
</html>