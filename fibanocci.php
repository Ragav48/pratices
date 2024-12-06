<?php
function fibonacci($n)
{
    $a = 0;
    $b = 1;
    echo "$a, $b";
    for ($i = 2; $i < $n; $i++) {
        $c = $a + $b;
        echo ", $c";
        $a = $b;
        $b = $c;
    }
}

fibonacci(10);

///There is an another methods are there//
