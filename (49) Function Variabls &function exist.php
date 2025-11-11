<?php

/*
    FUnction
    - Variable Function
    - PHP Allow To use Variable LIke Function
    - Whem\n you Append Parentheses () to variable php will look for function with that name
    - Function Exist 
    - function_exist ("func name" )
 */

function one()
{
    return "One From Function";
}

// 

$func1 = "one";
echo $func1();  // = echo one(); 

echo "<br>";


// function_exist()
//=================

function testing()
{
    return "Testing From Function";
}


if (function_exists("testing")) {
    echo testing();
} else {
    echo "Function NOt FOund";
}

echo "<br>";

// strlen
//========
echo strlen("Omar");   // strlen ==> to count number of character in word.
