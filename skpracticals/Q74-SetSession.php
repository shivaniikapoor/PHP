<?php
session_start(); // Start the session

// Set session variable if not already set
if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = "Shivani";
    echo $message = "Session variable 'SHIVANI' is now set.";
} else {
    $message = "Welcome back, " . $_SESSION["user"];
}
echo "<br> This program is written and executed by Shivani Kapoor-0221BCA140";

?>
