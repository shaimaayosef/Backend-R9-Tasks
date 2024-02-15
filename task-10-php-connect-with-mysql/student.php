<?php
include('./dbconn.php');
$query = "SELECT * FROM student";
$stmt = $conn->prepare($query);  // Prepare the SQL statement
$stmt->execute();  // Execute the SQL statement
$data = $stmt->fetchAll();  // Fetch all the results

foreach($data as $row) {
    echo "<br>" . "<br>" . $row['name'] . " " . "- " . $row['contactInfo'];
}