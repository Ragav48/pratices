<?php

$test = "hope";
$rev = "";

for ($i = strlen($test) - 1; $i >= 0; $i--) {
    $rev .= $test[$i];
}
if ($rev == $test) {
    echo 'It is a Palindrome';
} else {
    echo "It is not a palindrome";
}
