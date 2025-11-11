<?php

/*
    Control Structure
    - Loop

    Break , Continue
    - Break Ends Excution of (for - while - foreach - do while - switch)
    - skip curent interation 

*/


$countries = ["EG", "SA", "KU", "GER", "IY", "USA", "SY"];

foreach ($countries as $country) {

    echo $country . "<br>";
    if ($country == "IY") {
        break; //STOP WHEN REACH in IY 
    }
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//=======================================================================================

$countries = ["EG", "SA", "KU", "GER", "IY", "USA", "SY"];

foreach ($countries as $country) {

    echo $country . "<br>";
    if ($country == "IY") {
        continue;   //skip IY
    }
}
