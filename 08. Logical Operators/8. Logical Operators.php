<?php
    $temp = 31;
    $cloudy = true;

    if($temp >= 0 || $temp <= 30)
    {
        echo "The weather is good. <br>";
    }
    else
    {
        echo "The weather is bad. <br>";
    }

    if($cloudy)
    {
        echo "It's cloudy. <br>";
    }
    else
    {
        echo "It's sunny. <br>";
    }
?>