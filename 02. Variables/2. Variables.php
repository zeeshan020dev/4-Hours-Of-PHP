<?php
    // Strings
    $name = "Bro Code";
    $food = "Pizza";
    $email = "fake123@gmail.com";

    // Integers
    $age = 21;
    $users = 2;
    $quantity = 3;

    // Float
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    // Boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo "Hello {$name} <br>";
    echo "You Like {$food} <br>";
    echo "Your email is {$email} <br>";
    echo "You are {$age} years old <br>";
    echo "There are {$users} users online <br>";
    echo "You would like to buy {$quantity} items <br>";
    echo "Your GPA is: {$gpa} <br>";
    echo "Your pizza is \${$price} <br>";
    echo "The sales tax rate is: {$tax_rate}% <br>";
    echo "Online status: {$online} <br>";
    echo "You ordered {$quantity}x {$food}s <br>";
    
    $total = $quantity * $price;

    echo "Your total is: \${$total} <br>";


?>