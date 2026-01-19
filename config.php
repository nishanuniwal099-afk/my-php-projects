<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'wp_user');
define('DB_PASS', 'Root#123');
define('DB_NAME', 'wordpress_db');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
