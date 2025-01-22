<?php

$str = "neppah lliw tI";

$strev =  strrev($str);

echo $strev;

?>
<!-- using the for loop -->

<?php
$str = "EPOH";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    echo $str[$i];
}

?>