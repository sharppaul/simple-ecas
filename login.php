<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/cas_settings.php';

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
