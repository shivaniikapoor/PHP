<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO students (Stud_ID,Stud_Name, Stud_Email,Stud_Contact)
        VALUES (101,'Shivani Kapoor', 'shivani@gmail.com','9999888823')";

if ($conn->query($sql) === TRUE) {
    echo "New student inserted successfully.<br>";
} else {
    echo "Error inserting student: " . $conn->error . "<br>";
}

$conn->close();
echo"	This program is written and executed by Shivani Kapoor-0221BCA140"
?>