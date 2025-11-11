<?php

$name = "Omar";
$country = "Egypt";
$is_student = true;
$is_orphan = true;
$price = 100;
$country_discount = 10;
$student_discount = 15;
$orphan_discount = 15;


if ($country == "Egypt") {
    if ($is_student == true) {
        if ($is_orphan == true) {
            echo "Hello $name";
            echo "<br>";
            echo "You Have country Discount = $country_discount and Student Discount = $student_discount and Orphan Discount = $orphan_discount";
        } else {
            echo "Hello $name";
            echo "<br>";
            echo "You Have country Discount = $country_discount and Student Discount = $student_discount ";
        }
    } else {
        echo "Hello $name";
        echo "<br>";
        echo "You Have Country Discount = $country_discount";
    }
} else {
    echo "Hello $name ";
    echo "You Have Not Discount";
}
