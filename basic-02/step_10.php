<?php
function palindrome($string) {
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}
echo palindrome('hello olleh')."\n";
?>