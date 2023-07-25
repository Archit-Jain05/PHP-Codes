<?php 

function palindrome($str1) 
{
    $str2=strrev($str1);
    if($str1==$str2) {
        return "Value is a palindrome";
    }

    else {
        return "Value is not a palindrome";
    }

};

echo palindrome("abc")

?>