<?php

//If

$page = "Home";
if ($page == "Home")
    echo "Home";

echo '<br>';





//if , else

$title = "";
if ($title == "")
    echo "Unknown Page";

    else {
    echo $title;
    }

    echo '<br>';





//if, elseif, else

$lang = "english";

if ($lang == "arabic"){
    echo "مرحباً";
}
elseif($lang =="english"){
    echo "Hello";
}

elseif ($lang == "frances"){
    echo "Bosnsoir";
}
else{
    echo "Unsupported Language";

}




?>