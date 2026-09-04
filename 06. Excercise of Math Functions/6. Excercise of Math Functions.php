<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "6. Excercise of Math Functions.php" method = post>
        <label> Radius: </label>
        <input type = "text" name="radius">
        <input type="submit" value = "Calculate">
    </form>
</body>
</html>
<?php

$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;


$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4 / 3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference is {$circumference}cm <br>";
echo "Area is {$area}cm^2 <br>";
echo "Volume is {$volume}cm^3 <br>";


?>