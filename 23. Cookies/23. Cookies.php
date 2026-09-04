<?php

    setcookie("Fav_Food", "Pizza", time() + (86400 *2), "/");
    setcookie("Fav_Drink", "Coffee", time() + (86400 *3), "/");
    setcookie("Fav_Dessert", "Ice Cream", time() + (86400 *4), "/");
    
    /*foreach($_COOKIE as $key => $value)
    {
        echo "{$key} = {$value} <br>";
    }*/

    // To display the advertisement based on favourite food.

    if(isset($_COOKIE["Fav_Food"]))
    {
        echo "Buy some {$_COOKIE["Fav_Food"]} !!";
    }
    else
    {
        echo "I don't know your favourite food";
    }
?>