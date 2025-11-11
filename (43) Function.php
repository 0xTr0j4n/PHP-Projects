<?php


/*
    Function
    -Introduction and DRY Concept    DRY= Don't Retry Yourself
    - Prameter
    - Argument
*/

// echo "Hello Osama <br>";
// echo "Hello Ziad <br>";
// echo "Hello Ahmed <br>";
// echo "Hello Omar <br>";

function say_hello($user)
{
    echo "Hello $user";
}

say_hello("Osama <br>");
say_hello("Khaled <br>");
say_hello("Ziad <br>");
