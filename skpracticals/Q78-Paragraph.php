<?php
$file = fopen("aboutme.txt", "w"); // Open the file in write mode
$text = "My name is Shivani Kapoor. I am passionate about Artificial Intelligence, Cloud Computing and programming.
I love exploring new technologies and working on projects that enhance my skills.\n";
$text .= "This program is written and executed by Shivani Kapoor-0221BCA140";
fwrite($file, $text);
fclose($file);
echo "File 'aboutme.txt' has been created successfully.<br>";
echo "<br> This program is written and executed by Shivani Kapoor-0221BCA140";

?>