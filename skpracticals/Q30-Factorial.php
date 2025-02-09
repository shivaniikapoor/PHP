<?php
// Function to calculate factorial
function factorial($num) {
    if ($num < 0) {
        return "Factorial is not defined for negative numbers.";
    }
    
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}

// Example usage
$number = 5;
echo "Factorial of $number is: " . factorial($number);
echo "<br> This program is written and executed by Shivani Kapoor-0221BCA140";
?>