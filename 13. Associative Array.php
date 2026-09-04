<?php

$capitals = array("USA"=>"DC Washington", "Japan"=>"Kyoto",
                   "South Korea"=>"Seoul", "India"=>"New Delhi");

//array_pop($capitals);
//array_shift($capitals);

//$capitals = array_flip($capitals);
//$capitals = array_reverse($capitals);

//echo count($capitals) . "<br>";

foreach($capitals as $key=>$value)
{
    echo "{$key} = {$value} <br>";
}


//$values = array_values($capitals);
/*foreach($values as $value)
{
    echo "{$value} <br>";
}
*/
?>