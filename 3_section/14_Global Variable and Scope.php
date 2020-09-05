<?php


$x = "outside"; //Globle variables

function convert(){
$global $x;
    $x = "inside"; //local variables

}

echo "";

convert();

echo $x;
echo "<br>";


?>