<?php

$arr = [12, 22, 43, 42];
$largest = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $largest) {
        $largest = $arr[$i];
    }
}

echo $largest;

?>
<!-- // smallest array  -->

<?php

$arr = [12, 3, 24, 23, 56];
$smallest = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] < $smallest) {
        $smallest = $arr[$i];
    }
}
echo $smallest
?>