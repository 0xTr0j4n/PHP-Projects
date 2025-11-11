<?php

$a = "Omar";
$b = &$a;
$b = "Loai";

echo $a; /* Loai */                     echo "</br>";
echo $b; /* Loai */




?>