<?php

/*
    Function
    - Anonymous Function
    --- WHen WE Creat a Function we giv It a Name so we can call it later with that Name
    --- sometimes we need to creat function for specific Task 


    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function


    Search
    -Closure
  */

// Normal Function With Prameter

function say_hello_to($someone)
{
    return "Hello $someone";
}
echo say_hello_to("Omar");

echo "<br>############<br>";


// Anonymous Function In Variable 

$say_hello = function () {
    return "Hello";
};

echo $say_hello();
echo "<br>############<br>";



//Anonymous Function With Prameter In Variable 


$say_hola = function ($one) {
    return "Hola $one";
};

echo $say_hola("Zozz");

echo "<br>############<br>";



//Inherit Function From Parent Scope


$msg = "hi";
$say_hi = function ($one) use ($msg) {
    return  $msg . $one;
};

echo $say_hi(" Zozz");


echo "<br>############<br>";



// Pass Anonymous Function To Function

$nums = [10, 20, 30, 40, 50];
function add_five($items)
{
    return $items + 5;
}

// $nums_after_add = array_map("Function", Array);
// Function htm4i 3la el items bta3 el array 1 by 1 
$nums_after_add = array_map("add_five", $nums);

echo "<pre>";
print_r($nums_after_add);
echo "</pre>";
