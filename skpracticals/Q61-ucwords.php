<?php
// Original string
$text = " program written by Shivani!";

// Capitalize the first letter of each word
$ucwordsText = ucwords($text);

// Display the result
echo "Original Text: " . $text . "<br>";
echo "After ucwords(): " . $ucwordsText . "<br>";

// Add author line
echo "<br> This program is written and executed by Shivani Kapoor-0221BCA140";
?>