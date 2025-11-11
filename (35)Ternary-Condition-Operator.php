<?php


/*
    Control Structure
    - Ternary Operator => Short if
*/

$a = 10;
if ($a > 8) {
    echo "Good";
} else {
    echo "Bad";
}

echo "<br>";


echo "I Love PHP , Because it's A " . ($a > 99 ? "Good" : "Bad") . " Language";
