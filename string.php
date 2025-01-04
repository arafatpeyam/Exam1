<?php

function processStrings($strings) {
    foreach ($strings as $string) {
        // count vowels
        $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);

        // reverse this string
        $reversedString = strrev($string);

        // print results
        echo "Original String:$string" .", ";
        echo "Vowel Count:$vowelCount".", ";
        echo "Reversed String:$reversedString\n";
    }
}

//  input values in array
$inputStrings = ["Hello", "World", "PHP", "Programming"];
processStrings($inputStrings);

?>