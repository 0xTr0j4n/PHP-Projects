<?php


/*
    Operators
    -Used To Perform Operations On Value

    Comparison Operators
    -Used To Compare Tow Value

    - Part (1)
    - ==    => Equal
    - !=    => Not Equal
    - <br>    => Not Equal
    - ===   => Identical
    - !==   => Note Identical
    - >     => Larger Than
    - >=    => Larger Than OR Equal
    - <     => Smaller Than
    - <=    => Smaller Than OR Equal
    - <=>   => SpaceShip [ Less Than , Equall , Grwater]
    
    Search
    - How Does PHP Compare Strings with Comparison Operator
*/

// Test Equal
var_dump(100 == 100);   //bool(true)
echo '</br>';

var_dump(100 == "100"); /// bool(true)
echo '</br>';

var_dump(100.0 == 100); //bool(true)
echo '</br>';

var_dump(100 === "100"); //bool(false)
echo '</br>';

var_dump(100 !== "100"); // bool(true)
echo '</br>';
echo "###############################################";
echo '</br>';


var_dump(100 < 100);  //bool(false)
echo '</br>';

var_dump(100 <= 100);  // bool(true)
echo '</br>';

var_dump(100 > 200);  //bool(false)
echo '</br>';

var_dump(100 >= 100); // bool(true)
echo '</br>';

var_dump(100 <=> 150); //int(-1)
echo '</br>';

var_dump(100 <=> 100); //int(0)
echo '</br>';

var_dump(100 <=> 50); //int(1)
echo '</br>';


?>