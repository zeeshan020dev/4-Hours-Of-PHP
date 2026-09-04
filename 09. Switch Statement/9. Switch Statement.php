<?php

$grade = "A";

switch($grade)
{
    case "A":
        echo "You did great";
        break;
    case "B":
        echo "You did good";
        break;
    case "C":
        echo "You did Okay";
        break;
    case "D":
        echo "You did poor";
        break;
    case "F":
        echo "You failed";
        break;
    default: //else part. Do not need any break as you are outside of switch case.
        echo "{$grade} is not a valid grade";
}

//$date = date("l");
//echo $date;
?>