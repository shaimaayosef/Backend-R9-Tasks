<?php
$serverName ="localhost";
$userName="root";
$pw ="";
$db = "school";

try {
    $conn = new PDO(
        "mysql:host=$serverName;dbname=$db",
        $userName,
        $pw
    );    //set the pdo error mode to exception
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    ); 
     echo "Connected successfully";  
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

