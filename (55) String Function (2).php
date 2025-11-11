<?php


/*
    String Function
    - Implode ( Seperator [ Optional], Array[Required]) => join () is Alias
    - explode ( Seperator [ Optional], String[Required], limit [optional])
    - str_shuffle (string [Required])
    - strrev (string [Required])
    - trim (String[Required], charlist[Optional])
    - ltrim (String[Required], charlist[Optional])
    - rtrim (String[Required], charlist[Optional])
    --- Space ""
    --- tabe \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical tab "\x0B"
    --- Null "\0"
*/



//    - Implode ( Seperator [ Optional], Array[Required]) => join () is Alias
$friends = ["Ahmed", "Osama", "Omar", "Muhammad"];
echo implode(" ", $friends) . "<br>";
echo implode("-", $friends) . "<br>";
echo implode("@", $friends) . "<br>";
echo implode("", $friends) . "<br>";




//    - explode ( Seperator [ Optional], String[Required], limit [optional])
$str = "Elzero Web School Is Cool";

echo "<pre>";
print_r(explode("I", $str . "<br>"));
echo "</pre>";


//    - str_shuffle (string [Required])
echo str_shuffle("Elzero") . "<br>";   //rzolEe




//    - strrev (string [Required])
echo strrev("Elzero") . "<br>";   //orezlE




//    - trim (String[Required], charlist[Optional])
echo trim("#Elzero", "#") . "<br>";  //Elzero




//    - ltrim (String[Required], charlist[Optional])
echo ltrim("#Elzero#", "#") . "<br>";  //Elzero#




//    - rtrim (String[Required], charlist[Optional])
echo rtrim("#Elzero#", "#") . "<br>";  //#Elzero
