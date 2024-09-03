<?php

require_once __DIR__ . '/vendor/autoload.php';

// Define the CAS server details
$cas_server_version = CAS_VERSION_3_0;
$cas_server_hostname = 'ecas.ec.europa.eu';
$cas_server_port = 443;
$cas_server_uri = '/cas';
$service_base_url = 'https://maris.nl/paul/ecas/';  // Replace with your actual base URL

// Initialize phpCAS with the correct parameters
phpCAS::client(
    $cas_server_version, 
    $cas_server_hostname, 
    $cas_server_port, 
    $cas_server_uri, 
    $service_base_url
);
// Disable SSL validation for the CAS server
// This is not recommended for production environments
phpCAS::setNoCasServerValidation();

// Check if the user is authenticated
if (phpCAS::checkAuthentication()) {
    // Retrieve the user's login
    $user = phpCAS::getUser();

    // Additional attributes can also be fetched, if provided by the CAS server
    $attributes = phpCAS::getAttributes();

    // Handle user authentication and session creation here
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['attributes'] = $attributes;

    // Redirect to a protected page or homepage
    header('Location: protected.php');
    exit;
} else {
    // If authentication failed, redirect back to login page or show an error
    header('Location: login.php');
}
