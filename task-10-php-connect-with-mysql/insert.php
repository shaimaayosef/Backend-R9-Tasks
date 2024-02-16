<?php
include('./dbconn.php');
$name = "sara";
$email = "sara@gmail.com";
$pass = "sa@55";
$contactInfo = "010055505070";
$query = "INSERT INTO student(name,contactInfo,email,pass) VALUES ('$name','$contactInfo','$email','$pass')"; 

$stmt = $conn->prepare($query);
$stmt->execute();
echo "<br>" . "<br>" . "Data inserted successfully" . "<br>";
