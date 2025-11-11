<?php


// echo "Hello Osama <br>";
// echo "Hello ziad <br>";
// echo "Hello omar <br>";

function say_hello($name)  // $name is Prameter
{
    echo "Hello $name <br>";
}

say_hello("Osos");   // Osos is Argument
say_hello("omar");
say_hello("zozz");

//======================================================================================================
echo "========================================================================================= <br>";




function freezer($items)
{
    if ($items == "water") {
        echo "Make it ice";
    } elseif ($items == "fruite") {
        echo "Make it Fresh";
    } elseif ($items == "coca") {
        echo "Make it cold";
    } else {
        echo "UnKnown Item <br>";
    }
}
freezer("zbi");


//======================================================================================================
echo "========================================================================================= <br>";



$prizes = ["Play station", "Laptop", "PC", "Toy", "iPhone", "iPad", "XBOX"];

echo "<pre>";
print_r($prizes);
echo "<pre>";



function get_num($num1, $num2)
{
    return $num1 + $num2;
    echo 'will not echo anything , because it after \"Return\"';
}

get_num(3, 1);
echo $prizes[4] . "<br>";  // iphone



//======================================================================================================
echo "========================================================================================= <br>";


/*
    Function
    - Default Prameter Value
    --- Using
    --- Test Data
    --- Skip Argument
*/





function get_data($country = "Private Country", $name = "Private Name", $age = "Private Age", $address = "Private Adress")
{
    $line1 = "Your Country is $country & Your name is $name <br>";
    $line2 = "Your age is $age & Your Address is $address <br>";
    return $line1 . $line2;
}

echo get_data(country: "Egypt", name: "Omar", address: "Agami");


//======================================================================================================
echo "========================================================================================= <br>";


/*
    Function
    - Varuable Argument List
    =========================

    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()

    Spread Syntax in JS
*/


//======================================================================================================




function calculate()
{
    echo "number of Arguments is " . func_num_args() . "<br>";       // 5
    echo "Argument index Numer (3) is " . func_get_arg(3) . "<br>";  // 40
    print_r(func_get_args());

    $result = 0;
    foreach (func_get_args() as $arg) :
        $result += $arg;
    endforeach;
    echo $result;    // 150
}

calculate(10, 20, 30, 40, 50);



// Another Solution;

// function calculate(...$nums)
// {

//     print_r($nums);

//     echo "Argument index Numer (3) is " . $nums[3] . "<br>";

//     $result = 0;
//     foreach ($nums as $res) :
//         $result += $res;
//     endforeach;
//     echo $result;   // 150
// }
// calculate(10, 20, 30, 40, 50);



//======================================================================================================
echo "========================================================================================= <br>";
