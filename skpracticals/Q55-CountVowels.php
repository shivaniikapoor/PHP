<?php

$text = "Hello, Shivani! What's Up!.";


$text = strtolower($text);


$vowels = ['a', 'e', 'i', 'o', 'u'];


$vowelCount = 0;
for ($i = 0; $i < strlen($text); $i++) {
    if (in_array($text[$i], $vowels)) {
        $vowelCount++;
    }
}


echo "The number of vowels in the string is: " . $vowelCount;
echo "<br> This program is written and executed by Shivani Kapoor-0221BCA140";



?>