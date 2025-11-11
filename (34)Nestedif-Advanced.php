<?php


$name = 'Omar';
$country = "egypt";
$is_student = true;
$price = 1000;
$country_discount = 150;
$student_discount = 250;

if ($country == "egypt") {
    if ($is_student == true) {
        echo "Hello $name";
        echo "Your Price is " . $price - $country_discount - $student_discount;
    }
    else {
        echo "Hello $name ,";
        echo "Your Price is" . $price-$country_discount;
    }
    echo "";
}
else {
    echo "Hello $name ,";
    echo "You Have Not Discount";
}






?>

