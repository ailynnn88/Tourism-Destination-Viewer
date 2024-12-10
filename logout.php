<?php
session_start();
session_destroy(); // Destroy the session
header("Location: login.php"); // Redirect to login page
exit(); // Make sure no further code is executed
?>
