<?php

    $foods = array("apple", "orange", "banana", "coconut");
    //echo $food[0];
    /*for($i = 0; $i < 4; $i++)
    {
        echo $food[$i] ."<br>";
    }*/
    
    //$foods[0] = "Mango";
    array_push($foods, "Mango", "Pineapple");
    //array_pop($foods);
    //array_shift($foods);
    //$reverse = array_reverse($foods);


    foreach($foods as $food)
    {
        echo $food . "<br>";
    }
    
    //echo count($foods);


?>