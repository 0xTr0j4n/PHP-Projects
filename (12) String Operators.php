<?php


/*
    Operators
    - Used To Perform Operations On Value.

    String Operators
    - Concatinate String.

*/

$a = "Omar";
$b = "Loai";
$c = "Muhammad";

echo "$a $b $c";   //Omar Loai Muhammad
echo "</br>";

echo "{$a} {$b} {$c}"; //Omar Loai Muhammad
echo "</br>";

echo $a . $b . $c;   //OmarLoaiMuhammad
echo "</br>";

echo $a . " " . $b . " " . $c;  //Omar Loai Muhammad
echo "</br>";


define("Omar", "33");
echo "$a $b $c" . " " . Omar . " " . test();

function test() {

    return 1;
}

echo "</br>";



$x = "elzero ";
$x .= "web ";  // $x = $x . web ==> elzero web
$x .= "School "; // $x = $x . school ==> elzero web school 

echo $x;


?>