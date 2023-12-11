<?php
// index.php

// Get the requested URI
$uri = $_SERVER['REQUEST_URI'];

// // Remove the base path from the URI
$basePath = str_replace('/', '', $_SERVER['SCRIPT_NAME']);
 $path = trim(str_replace($basePath, '', $uri), '/');
echo $path;
// Simple example routing logic
switch ($path) {
    case 'home':
        // Home page logic
        require 'about.php';
        break;
    case 'about':
        // About page logic
        echo 'This is the about page.';
        break;
    // Add more cases for additional routes
    default:
        // Handle 404 or other routes
        http_response_code(404);
        echo '404 Not Found';
        break;
}