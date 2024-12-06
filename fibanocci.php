<?php

function fib($n)
{
    $a = 0;
    $b = 1;
    echo $a, $b;

    for ($i = 2; $i < $n; $i++) {
        $c = $a + $b;
        echo $c;
        $a = $b;
        $b = $c;
    }
}

fib(10);
