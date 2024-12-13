<!-- Array Programs: -->

<!-- To display an array in output: -->

<?php
$players = ['Raina', 'ABD', 'Jinx'];
foreach ($players as $player) {
    echo $player . "<br>";
}
?>


<!-- 2nd one -->

<?php
$arr = ["1", "22", "33"];
print_r($arr);
?>

<!-- // Insert a new element in the array -->

<?php
$fav = ["Thala", "vijay", "Jeeva"];
$fav[] = "dhanush";
print_r($fav);
?>


<!-- using array_push() -->

<?php
$fav = ["Raina", "ABD", "MSD"];
array_push($fav, "jadeja", "Kholi");

print_r($fav);
?>

<!-- Associative array -->

<?php
$fav = ["name" => "raga", "age" => "24"];
$fav["place"] = "chennai";
print_r($fav);
?>

<!-- array merge  -->

<?php
$array1 = ["A", "B", "C"];
$array2 = ["D", "E"];
$array3 = ["F"];

$merged = array_merge($array1, $array2, $array3);

print_r($merged);
?>

<!-- Delete an array -->

<?php
$fruits = ["Apple", "Banana", "Cherry"];
unset($fruits[1]);

print_r($fruits);
?>