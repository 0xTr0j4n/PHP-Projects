<?php

/*
    Control Structure
    - Loop

    For
    - Expression One Run  Once at the Frist Of Loop
    - In THe Begining of Interation Expression Two is Checked [If True , Continue || Break]
    - At the End Of Interation Expression Thre are Excuted

*/




//for


for ($i = 0; $i < 4; $i++) {

    echo $i, "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";







$o = 0;

for (;; $o++) {

    if ($o == 4) {
        break;
    }

    echo $o, "<br>";
}





echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";






for ($p = 0; $p < 9; $p++) {
    echo $p . "<br>";
}
