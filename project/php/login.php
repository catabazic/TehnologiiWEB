<?php
session_start();
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password (you can replace this with your own validation logic)
    if ($username === 'admin' && $password === 'password') {
        // Successful login
        $_SESSION['username'] = $username;
        echo 'Welcome, ' . $username . '!';

    } else {
        // Invalid login
        echo 'Invalid username or password.';
    }
    header("Location: ../admin.php");
    exit();
}
?>
