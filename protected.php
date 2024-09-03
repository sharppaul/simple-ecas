<?php
session_start();

if (!isset($_SESSION['user'])) {
    // User is not authenticated, redirect to login
    header('Location: login.php');
    exit;
}

// Display protected content
echo "<h1>Welcome, " . htmlspecialchars($_SESSION['user']) . "!</h1>";
echo "<p>Here is some protected content.</p>";
