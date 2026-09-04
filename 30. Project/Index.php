<?php

    include("Database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "<?php htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method = "post">
    <h2> Welcome to Fakebook! </h2>
    <label>Username: </label> <br>
    <input type = "text" name = "username"> <br>
    <label>Password: </label> <br>
    <input type = "password" name = "password"> <br> <br>
    <input type = "submit" name = "submit" value = "Submit">
    </form>
</body>
</html>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username))
        {
            echo "Please Enter Username";
        }
        elseif(empty($password))
        {
            echo "Please Enter Password";
        }
        else
        {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password)
                    VALUES ('$username', '$hash')";
            try
            {
                mysqli_query($connection, $sql);
                echo "You are registered";
            }
            catch(mysqli_sql_exception)
            {
                echo "Username is Taken";
            }
        }
    }

    mysqli_close($connection);

?>