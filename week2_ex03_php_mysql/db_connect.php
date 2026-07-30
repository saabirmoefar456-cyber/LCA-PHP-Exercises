<?php
// db_connect.php
// Shared MySQLi database connection used by all other scripts.
// MySQL is running on a non-default port (3307), so it must be passed
// explicitly as the 5th argument to mysqli().

$host     = "localhost";
$username = "root";
$password = "";
$dbname   = "techvibe";
$port     = 3307;

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
