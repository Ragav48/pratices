<?php

function isprime($num)
{

    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i < sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$num = 24;
if (isprime($num)) {
    echo "$num is a prime number";
} else {
    echo "$num is not an prime number";
}
