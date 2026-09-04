<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="17. Radio Buttons.php" method="post">
        <input type = "radio" name = "credit_card" value = "Visa">Visa<br>
        <input type = "radio" name = "credit_card" value = "Master Card">Master Card<br>
        <input type = "radio" name = "credit_card" value = "American Express">American Express<br>
        <input type = "submit" name = "confirm" value = "Confirm">

    </form>
</body>
</html>
<?php

    if(isset($_POST["confirm"]))
    {
        $credit_card = null;
        if(isset($_POST["credit_card"]))
        {
            $credit_card = $_POST["credit_card"];
        }

        switch($credit_card)
        {
            case "Visa":
                echo "You selected Visa";
                break;
            case "Master Card":
                echo "You selected Master Card";
                break;
            case "American Express":
                echo "You selected American Express";
                break;
            default:
                echo "Please make a selection";
        }
        /*if($credit_card == "Visa")
        {
            echo "You selected Visa";
        }
        elseif($credit_card == "Master Card")
        {
            echo "You selected Master Card";
        }
        elseif($credit_card == "American Express")
        {
            echo "You selected Amercian Express";
        }
        else
        {
            echo "Please make a selection";
        }*/
    }

?>