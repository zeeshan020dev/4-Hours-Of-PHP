<?php

    include("Database.php");

    // Retrieve one row from the table:

    /*$sql = "SELECT * from users WHERE user = 'Sandy'";
    $result = mysqli_query($connection, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result); // our $row is an associative now
        echo $row["id"] . "<br>"; // These are the column names actually.
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
    else
    {
        echo "No user found";
    }*/

    // For retrieving multiple rows:

    $sql = "SELECT * from users";
    $result = mysqli_query($connection, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row["id"] . "<br>"; // These are the column names actually.
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        } // our $row is an associative now
    }
    else
    {
        echo "No user found";
    }

    mysqli_close($connection);
?>