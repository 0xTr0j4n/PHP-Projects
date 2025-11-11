<?php

/*
    Switch
*/

$day = "thu";

switch ($day) {

    case "sat":
        echo "Heloo , Today is $day , we are open from 8 AM : 12 PM";
        break;


    case "sun":
        echo "Heloo , Today is $day , we are open from 6 AM : 2 PM";
        break;


    case "mon":
        echo "Heloo , Today is $day , we are open from 10 AM : 2 PM";
        break;


    case "thu":
        echo "Heloo , Today is $day , we are open from 10 AM : 2 PM";
        break;

    default:
        echo "UnKnown Day";
}

// Or Merage {dmg}

switch ($day) {

    case "mon":
    case "thu":
        echo " Hello , today is $day , we open from 7 to 8";
        break;
}
