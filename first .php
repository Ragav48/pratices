 <!-- Using for loop  -->

 <?php
    $raga = "epoH";
    $rev = "";

    for ($i = strlen($raga) - 1; $i >= 0; $i--) {
        $rev .= $raga[$i];
    }
    echo $rev;

    ?>
 <!-- // using Recursion // -->
 <?php
    function reverseString($str)
    {
        if (strlen($str) == 0) { // Base case
            return $str; // Return the empty string if input is empty
        }
        return reverseString(substr($str, 1)) . $str[0]; // Recursive call
    }

    $str = "EPOH!";
    $reversed = reverseString($str);
    echo $reversed; // Output: !dlroW ,olleH



    ?>