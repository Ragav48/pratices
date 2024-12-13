<?php

$arr = [12, 32, 45, 32, 1, 36];
$sum = 0;

foreach ($arr as $test) {
    $sum += $test;
}

echo " The sum is $sum";

?>

// Using for loop

<?php
$arr = [12, 45, 64, 23];
$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    $sum += $arr[$i];
}

echo $sum;
?>