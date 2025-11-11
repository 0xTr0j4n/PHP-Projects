<?php

// // echo "Hello PHP!";
// // echo '</br>';

// // /* 
// // ============================================
// // = Data Types                               =
// // = ----------                               =
// // = bool  => Boolean                         =
// // = int   => Integer                         =
// // = float => Floating Point Number | Double  =
// // = string                                   =
// // = array                                    =
// // = Other Types                              =
// // = gettype()  tell you type of data         =
// // ============================================
// // */

// // //=======================
// // // To Get Type of Concept
// // //=======================

// // echo 1+ '2'; //3
// // echo '</br>';


// // echo gettype(1+'2'); // in finally -- answer is 'Integer'
// // echo '</br>';

// // echo gettype(0);  //Integer
// // echo '</br>';

// // echo gettype(True); //boolean
// // echo '</br>';

// // echo gettype(False); //boolean
// // echo '</br>';

// // echo gettype(70.5);  //DOuble
// // echo '</br>';

// // echo gettype('Omar Loai'); //string
// // echo '</br>';

// // echo gettype('o'); #string 
// // echo '</br>';

// /*
// ====================================================================
// = Type Castign
// --------------
// */
// // echo 5 +  "5 Lessons";  // warning
// echo 5 + (int) "5 Lessons"; // = 10
// echo "</br>";

// echo 10 + 10.5;   //20.5
// echo "</br>";

// echo gettype(10 + 10.5); //double
// echo "</br>";


// echo 10 + (int) 10.5; //20 
// echo "</br>";

// echo gettype( 10 + (int) 10.5);
// echo "</br>";

// /*
// ====================================
// = Boolean + Converating to Boolean =
// =--------------------------------- =
// */

// var_dump((bool) '');
// echo "</br>";

// var_dump((bool) array());
// echo "</br>";

// var_dump((bool) 0);
// echo "</br>";

// var_dump((bool) '0');
// echo "</br>";

// var_dump((bool) 'Tr0jen');
// echo "</br>";

// var_dump((bool) array(1));
// echo "</br>";

// var_dump((bool) 3);


/*
 =====================
 = String & Escaping =
 =====================
*/

//ECHO 'Hello \'PHP\''; //But [Back Slash (\)] befor (') to tell compiller this is mine , display it like it.

//if i want write string in multiple Lines , to next :
//====================================================

// echo nl2br(
//     'Omar Loai
//     Age 22 old
//     Studnt'
// );


/*
 ====================================================================
 = String & Escaping
 -------------------
*/

// $name = "Tr0j3n";

// //Here Doc  [ Escape but do Proccess ( Do Parsing) ]
// echo <<<"Here"
// Hello PHP!
// Special character ''""  == \\\\  ==&*/*
// My Name is $name

// Here;

// echo "</br>";

// // Now Doc [ Escape All ]
// echo <<<'NOW'
// Hello PHP!
// Special character ''""  ==  \\\\  == &*/*
// My Name is $name

// NOW;

// echo "</br>";
// echo "</br>";
// echo "</br>";


// echo '<ul>';
//   echo "<li>" . $name . "</li>";
//   echo "<li>" . $name . "</li>";
//   echo "<li>" . $name . "</li>"; 
// echo '</ul>';




// echo <<<"Nav"

// <ul> 

//     <li>$name </li>
//     <li>$name </li>
//     <li>$name </li>

// </ul>

// Nav;




/*
===============================================
= Data Types                                  =
= ----------                                  =
= [ Array]                                    =
=---------                                    =
= - Array with Key                            =
= - Array Without Key                         =
= - Array with One Key                        =
= - Array Value Override                      =
= ------------------------------------------  =
= print_r()                                   =
===============================================
*/

// echo '<pre>';  // pre is html tag allow write code human readable

// print_r([

//     0 => "Omar",
//     1 => "Loai",
//     "Muhammad", // Automatic will be 3
//     5 => "Ali",
//     "Ziad",  // automatic will be 6 34n el abloo 5  [ Array DOn't sort itself]
//     "Loll" => [ "zoz ","yasser" ,"M7mood"] //Array Modmg
// ]);
// echo '</pre>';



// echo (int) 15.2 + (int) 14.7 + (int) (10.5 + 10.5); // 50
// echo 15.2 + 14.7 + (10.5 + 10.5); // Integer

// echo gettype( (int)15.2 + (int) 14.7 + (int) (10.5 + 10.5));


// echo gettype(100);
// echo '</br>';

// var_dump((int) '100');

// echo ' Hello "Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"';

// echo "We \n Love \n Elzero \n Web \n School";
// echo '</br>';

// echo nl2br(
// 'We
// \\n
// Love
// \\n
// Web
// \\n
// school'

// );

// echo '<pre>';
// print_r([

// 'FrontEnd'=>['HTML' ,
//              'CSS' ,
//              'js'=> [
//                 'vue.js'=> [ 
//                     2=>'v2' ,
//                     3=>'v3'],
//                 0=> 'reactjs',
//                 1=> 'svelte'
//                 ]
//                 ],
// 'backEnd'=>[ 'PHP' , 'MySQL' , 'Security'],
// 'Git','Github'

// ]);
// echo '</pre>';







?>