<?php
// api/index.php

$requestUri = $_SERVER['REQUEST_URI'];

// Basic routing example
if ($requestUri === '/' || $requestUri === '/index.php') {
    // Include your main application logic or home file
    echo "Welcome to ABC Academy Site!";
    exit;
}

// Fallback for asset files or other paths
$file = dirname(__DIR__) . $requestUri;
if (file_exists($file) && !is_dir($file)) {
    return false; // Let the built-in server serve the static file directly
}

// Fallback error
http_response_code(404);
echo "404 Not Found";
