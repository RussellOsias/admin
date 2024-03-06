<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();
}

// Redirect to the login page with a parameter indicating successful logout
header("Location: login.php?logout=success");
exit(); // Stop further execution
?>
