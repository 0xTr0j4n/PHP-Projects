<?php


/*
    Operators
    - Used To Perform Operations On Value.

    Logical Operators
    - Compare Condetion

    and => And => Tow Are True
    &&  => And => Tow Are True ["&&" Has a Greater Precedence Than "And"]
    or  => Or  => One Or Both Is True
    ||  => Or  => One Or Both Is True ["||" Has a Greater Precedence Than "Or"]
    xor => Xor => One is True but Not Both
    !   => Not => Note True
*/

var_dump(100 > 80 && 100 > 90); //True
echo "</br>";

var_dump(100 > 80 && 100 > 150); //False
echo "</br>";

var_dump(100 > 80 || 100 > 90); //True
echo "</br>";

var_dump(100 > 80 || 100 > 220); //True
echo "</br>";

var_dump(100 > 80 xor 100 > 90); //False
echo "</br>";

var_dump(100 > 80 xor 100 > 120); //True
echo "</br>";



?>