<?php


/*
    Function
    - Function Advanced Traning
    - UnBacking in Arguments

    Search
    - PHP  Variadic Function
    - Splat Operator

*/

function get_data($name, $country = "Private", ...$skills)
{
    echo "Hello $name , Your country is $country <br>";
    foreach ($skills as $skill) {
        echo "-- $skill <br>";
    }
}

get_data("Omar", "Egypt", "HTML", "CSS", "JS", "PHP");

echo "<br>";

// Another Way
//============

$skls1 = ["HTML", "CSS", "JS", "PHP"];
function get_data1($name1, $country1 = "Private", ...$skills1)
{
    echo "Hello $name1 , Your country is $country1 <br>";
    foreach ($skills1 as $skill1) {
        echo "-- $skill1 <br>";
    }
}

get_data("Omar", "Egypt", ...$skls1);
