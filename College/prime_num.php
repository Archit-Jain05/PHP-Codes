<?php
function isPrime($number) {
    // 0 and 1 are not prime numbers
    if ($number <= 1) {
        return false;
    }

    // Check for divisibility from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}
for($i=0;$i<=500;$i++) {
if (isPrime($i)) {
    echo $i."</br>";
}

}
?>