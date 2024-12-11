<?php
function reverseArray($arr)
{
    $start = 0;
    $end = count($arr) - 1;

    while ($start < $end) {
        $temp = $arr[$start];
        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;
        $start++;
        $end--;
    }

    return $arr;
}

$numbers = array(1, 2, 3, 4, 5);
print_r(reverseArray($numbers));
