<?php
function greaterFn($num){
    if($num>30 || $num > 20 || $num > 10){
        return 'string';
    }
}
if (greaterFn(40)){
    echo "40 is greater than 30 <br/>";
}
if (greaterFn(21)){
    echo "21 is greater than 20 <br/>";
}
if (greaterFn(12)){
    echo "12 is greater than 10 <br/>";
}
if (greaterFn(8)){
    echo "8 is less than 10 <br/>";
}
?>