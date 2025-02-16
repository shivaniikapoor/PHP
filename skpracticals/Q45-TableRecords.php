<?php
// Associative array storing marks of students in 5 subjects
$students = [
    "Shivani" => ["C" => 100, "Algo" => 99, "DS" => 100, "DBMS" => 97, "Stats" => 96],
    "Shruti" => ["C" => 99, "Algo" => 98, "DS" => 100, "DBMS" => 70, "Stats" => 76],
    "Mohini" => ["C" => 100, "Algo" => 98, "DS" => 90, "DBMS" => 70, "Stats" => 91]
];

// Extract subjects dynamically
$subjects = array_keys($students["Shivani"]);

echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo "<tr>
        <th>SR No</th>
        <th>Subject</th>
        <th>Shivani</th>
        <th>Shruti</th>
        <th>Mohini</th>
      </tr>";

$totals = ["Shivani" => 0, "Shruti" => 0, "Mohini" => 0];

// Loop through subjects
$srNo = 1;
foreach ($subjects as $subject) {
    echo "<tr>
            <td>{$srNo}</td>
            <td>{$subject}</td>";

    foreach ($students as $name => $marks) {
        echo "<td>{$marks[$subject]}</td>";
        $totals[$name] += $marks[$subject]; // Calculate total marks
    }

    echo "</tr>";
    $srNo++;
}

// Calculate percentage
$percentages = [];
foreach ($totals as $name => $total) {
    $percentages[$name] = number_format($total / count($subjects), 2) . "%";
}

// Print total row
echo "<tr>
        <td colspan='2'><b>Total</b></td>";
foreach ($totals as $total) {
    echo "<td><b>$total</b></td>";
}
echo "</tr>";

// Print percentage row
echo "<tr>
        <td colspan='2'><b>Percentage</b></td>";
foreach ($percentages as $percentage) {
    echo "<td><b>$percentage</b></td>";
}
echo "</tr>";

echo "</table>";
echo "<br> This program is written and executed by Shivani Kapoor-0221BCA140";
?>
