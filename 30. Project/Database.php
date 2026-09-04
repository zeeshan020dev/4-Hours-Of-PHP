<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "businessdb";
    $connection = "";

    $connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);

    // For checking the connection:

    /*if($connection)
    {
        echo "You are connected <br>";
    }
    else
    {
        echo "You could not connect <br>";
    }*/
    
?>