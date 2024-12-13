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

<!-- Using predefined method -->

<?php

$array = [1, 2, 34, 67, 90];
$test1 = array_sum($array);

echo $test1;

?>

<!-- for the associative array -->

<?php
$arr = ["car" => 10, "Bike" => 12, "Destiny" => 10];
$sums = 0;

foreach ($arr as $key => $value) {
    $sums += $value;
}

echo $sums;

?>