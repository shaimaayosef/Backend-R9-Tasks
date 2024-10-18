<?php
include('./dbconn.php');
$id = $_GET['id'];
$deleteQuery = "DELETE FROM student WHERE id=$id";
$conn->exec($deleteQuery);
echo "<script>alert('deleted successfully!')</script>";
