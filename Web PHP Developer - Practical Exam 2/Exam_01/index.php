<?php 
function check_plaindrome($string) {

    $string = str_replace(' ', '', $string);
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    $string = strtolower($string);
    $reverse = strrev($string);
    if ($string == $reverse) {
        return true;
    } 
    else {
       return false;
    }
}

$string = "nurses run";
echo check_plaindrome($string);

?>



 