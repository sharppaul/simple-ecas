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

// Force CAS authentication
phpCAS::forceAuthentication();

// If the user is authenticated, redirect to the callback script
header('Location: callback.php');
