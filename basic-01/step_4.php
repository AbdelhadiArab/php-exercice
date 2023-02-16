<?php
$name = "abdelhadi";
$position = "web developer";
$github_url = "https://github.com/abdelhadicodi";

//Using the double quotation " and the .
echo "Hello I'm ".$name.", I'm a" .$position. " ,please check my github link" .$github_url;

//Using the double quotation " and without using the .
echo "\n Hello I'm $name, I'm a $position ,please check my github link $github_url";

//Without using the double quotation "
echo '\n Hello I\'m' .$name. ', I\'m a' .$position. ',please check my github link' .$github_url;
?>