<?php

/*
    Control Structre
    - Including Files

    Include
    Require

*/

include("test11.php");              // include when error , show error and continue excution
echo $a . "<br>"; // $a=10;
echo "Continue <br> ";



require("test11.php");             // require when error , show error and stoop excution
echo $a . "<br>"; //$a=10;

echo "Continue <br> ";
