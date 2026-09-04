<?php
    include("Database.php");

    /*$username = "Ali";
    $password = "Data123";

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$password')";
    $sql = "INSERT INTO users (user, password)
            VALUES ('Zeeshan', 'Bitcoin123')";*/
    
   // Password Hashing:
    $username = "Shams";
    $password = "Linux123";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username', '$hash')";

    try
    {
        mysqli_query($connection, $sql);
        echo "User Registered";
    }
    catch(mysqli_sql_exception)
    {
        echo "User did not registered";
    }

    mysqli_close($connection);
?>