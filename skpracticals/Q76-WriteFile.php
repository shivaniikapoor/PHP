<?php
$filename = "output.txt"; // File name

// Open the file in write mode (creates the file if it doesn't exist)
$file = fopen($filename, "w");

if ($file) {
    $content = "Hello, this is some sample content written to the file.\n";
    fwrite($file, $content); // Write content
    fclose($file); // Close the file
    echo "<p>Content written successfully to '$filename'.</p>";
} else {
    echo "<p>Failed to open the file.</p>";
}

echo "<br> This program is written and executed by Shivani Kapoor-0221BCA140";
?>
