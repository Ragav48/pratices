<?php
function isPrime($num)
{
    if ($num < 2) {
        return false; // Numbers less than 2 are not prime
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // Divisible by a number other than 1 and itself
        }
    }
    return true; // Prime number
}

$num = 29;
if (isPrime($num)) {
    echo "$num is a prime number.";
} else {
    echo "$num is not a prime number.";
}
