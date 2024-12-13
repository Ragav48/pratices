<?php
function valueExists($array, $value)
{
    foreach ($array as $element) {
        if ($element === $value) {
            return true; // Value found
        }
    }
    return false; // Value not found
}

// Example usage
$array = [1, 2, 3, 4, 5];
$value = 3;

if (valueExists($array, $value)) {
    echo "Value $value exists in the array.";
} else {
    echo "Value $value does not exist in the array.";
}
