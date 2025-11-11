<?php


// Tkleef (1);
//-------------

function greeting($name, $sex = "")
{
    if ($sex == "Male") {
        $sex = "Mr";
    } elseif ($sex == "Female") {
        $sex = "Mis";
    } else {
        $sex = "";
    }
    return "Hello $sex $name ";
}


echo greeting("Osama", "Male"); // Hello Mr Osama

echo "<br>";

echo greeting("Eman", "Female"); // Hello Miss Eman
echo "<br>";

echo greeting("Sameh"); // Hello Sameh


echo "<br>#################################################################################<br>";


//Tkleef (3);
//===========

function sum_all()
{
    echo "<pre>";
    print_r(func_get_args());
    echo "</pre>";

    $result = 0;
    foreach (func_get_args() as $arg) :
        if ($arg == 5) {
            $arg = 0;
        } elseif ($arg = 10) {
            $arg = 11;
        }
        $result += $arg;
    endforeach;

    echo $result;
}


sum_all(5, 10, 15, 20, 10, 10, 5, 25);
