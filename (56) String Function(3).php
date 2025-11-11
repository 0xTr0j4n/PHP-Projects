<?php

/*
    String Function
    - Chunk Split (String[Required], Length[Optional], End[Optional])
    - strlen (String[Required])
    - str_split(String[Required], Length[Optional] )
    - strip_tag (String[Required], Allowed[Optional] )
    - nl2br (String[Required], XHTML[Optional] )
*/




//    - Chunk Split (String[Required], Length[Optional], End[Optional])
echo chunk_split("Elzero", 2, "@");  //El@ze@ro@




//    - str_split(String[Required], Length[Optional] )
echo "<pre>";
print_r(str_split("Elzero", 3)); //[0] => Elz [1] => ero
echo "</pre>";



//    - strip_tag (String[Required], Allowed[Optional] )
echo "<h1> Hello <i>Troj3n</i></h1>", "<br>";
echo strip_tags("<h3> Hello <i>Troj3n</i></h3>"), "<br>";



//    - nl2br (String[Required], XHTML[Optional] )
echo nl2br("Elzero\nWeb\nSchool", true);
