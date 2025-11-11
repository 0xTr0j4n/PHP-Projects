<?php

/*
        Function
        - Passing  Argument by Reference
        - By Default , Function Argument Are Passed By Value
        - If The Value of Argument Inside The FUnction changed it will not change Outside
        - To CHange it Outside Pass the Argument BY Reference 

        - Return Type Declarations

        Search
        - PHP Strict Mode
    */

function add_five(&$number)
{
    $number += 5;
    return $number;
}
$n = 10;

echo add_five($n); //20

echo "<br>";
echo $n; //10

echo "<br>";

// Return Type Decleration

function calculate($num1, $num2): int
{

    return $num1 + $num2;
}

echo calculate(10.5, 9.5);
echo "<br>";

echo gettype(calculate(10.5, 9.5));
