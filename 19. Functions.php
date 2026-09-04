<?php

// Simple Function:
/*function HappyBirthday()
{
    echo "Happy Birthday to You! <br>";
    echo "Happy Birthday to You! <br>";
    echo "Happy Birthday Dear Zeeshan <br>";
    echo "Happy Birthday to You! <br>";
    echo "By the way, Birthday meri 13 January ko hai lol <br><br>";
}*/

// Parameterized Function:

/*function HappyBirthday($FirstName, $age)
{
    echo "Happy Birthday to You! <br>";
    echo "Happy Birthday to You! <br>";
    echo "Happy Birthday Dear {$FirstName} <br>";
    echo "Happy Birthday to You! <br>";
    echo "You are {$age} years old now! <br> <br>";
}

// Function Calling
HappyBirthday("Zeeshan", 20);
HappyBirthday("Imran", 24);
HappyBirthday("Shams", 21);
HappyBirthday("Hamza", 22);
*/

// Return value by a number

/*function is_even($Number)
{
    return $Number % 2;
}

echo is_even(10);*/

// Parameters with data type

function hypotenuse(float $a, float $b)
{
    $c = sqrt($a ** 2 + $b **2);
    return $c;
}

echo hypotenuse(3, 4);

?>