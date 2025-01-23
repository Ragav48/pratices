<?php

function longestPalindromicSubstring($str)
{
    $n = strlen($str);
    $start = 0;
    $maxLength = 1;

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            $isPalindrome = true;

            for ($k = 0; $k < ($j - $i + 1) / 2; $k++) {
                if ($str[$i + $k] !== $str[$j - $k]) {
                    $isPalindrome = false;
                    break;
                }
            }

            if ($isPalindrome && $j - $i + 1 > $maxLength) {
                $start = $i;
                $maxLength = $j - $i + 1;
            }
        }
    }

    return substr($str, $start, $maxLength);
}

echo longestPalindromicSubstring("babad");
