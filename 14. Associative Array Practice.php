<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "14. Associative Array Practice.php" method="post">
    <label>Enter a Country</label>
    <input type = "text" name = "country">
    <input type = "submit" value = "Submit">
    </form>
</body>
</html>
<?php

$capitals = array("USA"=>"DC Washington", "Japan"=>"Kyoto",
                   "South Korea"=>"Seoul", "India"=>"New Delhi");

$capital = $capitals[$_POST["country"]];

echo"The capital of this country is {$capital}";

?>