<?php
// logout.php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the login page
header(header: "Location: login.php");
exit;
?>