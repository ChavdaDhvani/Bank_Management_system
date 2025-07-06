<?php
// Database configuration


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'mkdir@31');
define('DB_NAME', 'banking_system');

// Establish secure database connection
$connection = mysqli_init();
if (!$connection) {
    die("MySQLi initialization failed");
}


// Set SSL options if needed (recommended for production)
// mysqli_ssl_set($connection, ...);

if (!mysqli_real_connect($connection, DB_HOST, DB_USER, DB_PASS, DB_NAME)) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset to utf8mb4 for full Unicode support
mysqli_set_charset($connection, "utf8mb4");

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>