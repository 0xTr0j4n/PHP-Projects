<?php

$countries = ["EG", "SA", "QA", "SY", "KU", "UE"];

$countries_with_discount = ["EG" => 50, "SA" => 40, "QA" => 35, "SY" => 60, "KU" => 10, "UE" => 20];

foreach ($countries as $country) {
    echo $country . "<br>";
}

foreach ($countries_with_discount as $country => $discount) {
    echo "Country is $country and Discount is $discount <br>";
}
