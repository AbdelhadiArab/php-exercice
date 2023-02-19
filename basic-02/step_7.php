<?php
$input = " Hello PHP - - - Hello Python - - - Hello Python - - - Hello PHP";
$output = str_replace("Python", "Php", $input);
$output = str_replace("PHP", "Python", $output);

echo $output;
?>