<?php

// Define the CAS server details
$cas_server_version = CAS_VERSION_3_0;
$cas_server_hostname = 'ecas.ec.europa.eu';
$cas_server_port = 443;
$cas_server_uri = '/cas';
$service_base_url = 'https://maris.nl/paul/ecas/';  // Replace with your actual base URL

header('Location: login.php');