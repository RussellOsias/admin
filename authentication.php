<?php
// Start the session if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    // Set a message
    $_SESSION['message'] = "Please log in to access this page";
    // Redirect to the login page
    header("Location: login.php");
    exit(); // Stop further execution
}

// Check if there's a message to display
if (isset($_SESSION['message'])) {
    // Output the message
    echo '<div class="alert alert-info">' . $_SESSION['message'] . '</div>';
    // Clear the message to prevent it from being displayed again
    unset($_SESSION['message']);
}
?>
