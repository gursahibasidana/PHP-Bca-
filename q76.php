<?php
// Start the session
session_start();

// Destroy all session data
session_unset();  // Unset all session variables
session_destroy(); // Destroy the session

echo "Session has been destroyed.";

echo "\nCode by Gursahiba Kaur Sidana - 2220100267\n";
?>
