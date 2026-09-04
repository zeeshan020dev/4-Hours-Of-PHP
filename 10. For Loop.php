<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "10. For Loop.php" method="post">
        <label>Enter a Number to count to: </label><br>
        <input type = "text" name = "counter"><br>
        <input type = "submit" value = "start"><br>
    </form>
</body>
</html>
<?php
/*
for($i = 0 ; $i < 5; $i++)
{
    echo $i. "<br>";
}*/

$counter = $_POST["counter"];

for($i = 1; $i <= $counter; $i++)
{
    echo $i . "<br>";
}

?>