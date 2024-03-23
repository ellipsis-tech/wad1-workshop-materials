<?php

function isPalindrome($string)
{
    $lower_string = strtolower($string);
    // $reversestr = strrev(($string));

    #Alternative way to reverse a string
    $reverse_str = "";
    for ($i = strlen($lower_string)-1; $i >= 0; $i--) {
        $reverse_str .= $lower_string[$i];
    }

    if ($reverse_str == $string) {
        return true;
    } else {
        return false;
    }
}

var_dump(isPalindrome("madam"));
var_dump(isPalindrome("Ellipsis"));
?>