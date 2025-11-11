<?php

/*
    String Function
    
    - lcfirst (string [required])
    - ucfirst (string [required])
    - strtolower (string [required])
    - strtoupper (string [required])
    - ucwords (string [required], Delimiter [Optional])
    - str_repeat (string [required], Count [required])
*/


//    - lcfirst (string [required])
echo lcfirst("Elzero Web School    <br>");  //elzero Web School

//    - ucfirst (string [required])
echo ucfirst("elzero web school    <br>");  //Elzero web school


//    - strtolower (string [required])
echo strtolower("ELZERO WEB SCHOOL    <br>");  //elzero web school


//    - strtoupper (string [required])
echo strtoupper("elzero web school    <br>");  //ELZERO WEB SCHOOL


//    - ucwords (string [required], Delimiter [Optional])
echo ucwords("elzero web school    <br>");


//    - ucwords (string [required], Delimiter [Optional])
echo ucwords("elzero web school", " ");
