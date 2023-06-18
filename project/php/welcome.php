<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// User is logged in, display welcome message
$username = $_SESSION['username'];
//echo 'Welcome, ' . $username . '!';
?>
