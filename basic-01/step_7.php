<?php
$birth_year = rand (1990, 2015);
$current_year = "2023";
$age = $current_year - $birth_year;

if($age > 18){
    echo "$birth_year";
    echo "<br/>";
    echo "You can drive";
}
    else{
    echo "$birth_year";
    echo "<br/>";
    echo "You still a kid, go and play GTA";
    }

?>