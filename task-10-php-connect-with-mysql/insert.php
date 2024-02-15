<?php
include('./dbconn.php');
$name = "sara";
$email = "sara@gmail.com";
$pass = "sa@55";
$contactInfo = "010055505070";
$btn = false;
$query = "INSERT INTO student(name,contactInfo,email,pass) VALUES ('$name','$contactInfo','$email','$pass')"; 

if ($btn == true){
    $stmt = $conn->prepare($query);
    $stmt->execute();
    echo "<br>" . "<br>" . "Data inserted successfully" . "<br>";
}
else{
    echo "<br>" . "<br>" . "Data not inserted";
}