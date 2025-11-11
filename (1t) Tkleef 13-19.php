<?php

$a = "web";
$b = $a;
$a = & $b;


echo "web";
echo $a;
echo $b;

echo "</br>";



$a = 100;
$a = 200;
$b = $a;

echo $b; // 100


?>