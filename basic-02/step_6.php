<?php
function sum($num) {
    $digits_sum = 0;
      for ($i = 0; $i < strlen($num); $i++) {
             $digits_sum += $num[$i];
               }
      return $digits_sum;
}
echo sum("12345")."<br/>";
echo sum("6789");
?>