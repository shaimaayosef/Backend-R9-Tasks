<?php
session_start(); // Start the session

// Unset all of the session variables
unset($_SESSION['u-email']);
unset($_SESSION['pwd']);
unset($_SESSION['u-name']);
//or    session_unset();
//or    $_SESSION = array();

session_destroy(); // Destroy the session

echo "you'r logged out";
?>
