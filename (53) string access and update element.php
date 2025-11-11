<?php


/*
    String
    - Access Elements
    - String is Array Of Character
    - Access Element by Index 
    - Negative Index of Array
    - Update Elements
    - Update Current Elements
    - Add New Elements

    Search
    - Single Bytes And Multi Bytes
*/

$str = "Trojen";

echo "Firist Letter is ==> $str[0] <br>"; // T
echo "4th Letter is ==> $str[3] <br>"; // j

echo "Last Letter is ==> $str[-1] <br>"; // n


echo $str . "<br>";
$str[0] = "A";           // set Frist Char [Index {0}] is A
echo $str, "<br>";

$str[6] = "A"; // Add A after Word
echo $str . "<br>";
