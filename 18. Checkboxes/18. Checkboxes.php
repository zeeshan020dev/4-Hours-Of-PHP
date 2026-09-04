<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "18. Checkboxes.php" method = post>
    <input type = "checkbox" name = "foods[]" value = "Pizza">Pizza<br>
    <input type = "checkbox" name = "foods[]" value = "Burger">Burger<br>
    <input type = "checkbox" name = "foods[]" value = "HotDog">HotDog<br>
    <input type = "checkbox" name = "foods[]" value = "Taco">Taco<br>
    <input type = "submit" name = "Submit">
    </form>
</body>
</html>
<?php

if(isset($_POST["Submit"]))
{
    /*if(isset($_POST["pizza"]))
    {
        echo "You like Pizza! <br>";
    }
    if(isset($_POST["burger"]))
    {
        echo "You like Burger! <br>";
    }
    if(isset($_POST["hotdog"]))
    {
        echo "You like HotDogs! <br>";
    }
    if(isset($_POST["taco"]))
    {
        echo "You like Taco! <br>";
    }
    if(empty($_POST["pizza"]))
    {
        echo "You don't like Pizza! <br>";
    }
    if(empty($_POST["burger"]))
    {
        echo "You don't like Burger! <br>";
    }
    if(empty($_POST["hotdog"]))
    {
        echo "You don't like HotDogs! <br>";
    }
    if(empty($_POST["taco"]))
    {
        echo "You don't like Taco! <br>";
    }*/
    
    $foods = $_POST["foods"];
    foreach($foods as $food)
    {
        echo $food . "<br>";
    }
}

?>