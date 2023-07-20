<?php 

$a = date("H");

if($a<12) {
    echo "Have a good morning!";
} 
elseif($a>12 and $a<20) {
    echo "Have a good day!";
}
else {
    echo "Have a good night!";
}