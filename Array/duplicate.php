<?php
function removeDuplicates($array)
{
    $uniqueArray = [];
    foreach ($array as $value) {
        $isDuplicate = false;
        foreach ($uniqueArray as $uniqueValue) {
            if ($value === $uniqueValue) {
                $isDuplicate = true;
                break;
            }
        }
        if (!$isDuplicate) {
            $uniqueArray[] = $value;
        }
    }
    return $uniqueArray;
}

// Example usage:
$array = [1, 2, 2, 3, 4, 4, 5];
$uniqueArray = removeDuplicates($array);

print_r($uniqueArray);
