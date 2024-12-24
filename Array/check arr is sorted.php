<?php

function isSorted($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            return false;
        }
    }
    return true;
}

echo isSorted([1, 2, 3, 4, 5]) ? "Sorted" : "Not Sorted";
