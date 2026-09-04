<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "21. Sanitize & Validate.php" method = "post">
        <label>Username: </label> <br>
        <input type = "text" name = "username"> <br> Age: <br>
        <input type = "text" name = "age" > <br> Email: <br>
        <input type = "text" name = "email" >
        <input type = "submit" name = "login" value = "Login"> <br>
    </form>
</body>
</html>

<?php

    // Sanitize Input

    /*if(isset($_POST["login"]))
    {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        echo "Hello {$username} <br>";
        echo "You are {$age} old <br>";
        echo "Your email is {$email} <br>";
    }*/

    // Validate Input

    if(isset($_POST["login"]))
    {
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if(empty($email))
        {
            echo "That email was not valid";
        }
        else
        {
            echo "Your email is {$email}";
        }
    }
?>