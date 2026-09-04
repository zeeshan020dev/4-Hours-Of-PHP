<?php

    //$username = "Muhammad Zeeshan Islam";
    $phone = "123-456-7890";

    //$username = strtolower($username);
    //$username = strtoupper($username);
    //$username = trim($username);
    //$username = str_pad($username, 17, "0");
    //$phone = str_replace("-", "/", $phone);
    //$username = strrev($username);
    //$username = str_shuffle($username);
    //$compare = strcmp($username, "Muhammad Zeeshan");
    //$count = strlen($phone);
    //$index = strpos($username, "d");
    //$firstname = substr($username, 0, 9);
    //$lastname = substr($username, 9, 7);
    //$fullname = explode(" ", $username);

    /*foreach($fullname as $name)
    {
        echo $name . "<br>";
    }*/
    
    $username = array("Muhammad", "Zeeshan", "Islam");
    $username = implode("-", $username);
    echo $username;
?>