<?php

function PowerOfTwo($num) {    
    if ($num % 2 == 0) {
       return true;
    }   
}
$num = 4;
if(PowerOfTwo($num)){
    echo "$num is a power of 2";
}else{
    echo "$num is not a power of 2";
}

?>