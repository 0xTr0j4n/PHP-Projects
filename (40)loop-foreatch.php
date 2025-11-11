<?php


$countries = ["EG", "SA", "QA", "SY"];

echo "<pre>";
print_r($countries);
echo "</pre>";


// foreach ($array as $value) {}

foreach ($countries as $country) {
    echo $country . "<br>";
}

// foreach ($array as $key => $value)









$countries_with_discount = ["EG" => 60, "SA" => 30, "QA" => 15, "SY" => 66];

echo "<pre>";
print_r($countries_with_discount);
echo "</pre>";

foreach ($countries_with_discount as $country => $discount) {
    echo "Country name is $country and Discount is $discount <br>";
}
