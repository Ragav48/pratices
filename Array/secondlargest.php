<?php

function findSecondLargest($arr)
{
    if (count($arr) < 2) {
        return "Array must have at least two elements.";
    }

    $largest = $secondLargest = PHP_INT_MIN;

    foreach ($arr as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } elseif ($num > $secondLargest && $num != $largest) {
            $secondLargest = $num;
        }
    }

    return $secondLargest == PHP_INT_MIN ? "No second largest number found." : $secondLargest;
}

// Test the function
$array = [10, 20, 4, 45, 99];
echo "Second Largest Number: " . findSecondLargest($array);
