<?php
// setup.php
// Run this once (visit it in the browser) to create the techvibe database
// and the employees table. Uses $_SERVER purely to report how it was run.

$host     = "localhost";
$username = "root";
$password = "";
$port     = 3307;

// Connect WITHOUT selecting a database yet, since it may not exist.
$conn = new mysqli($host, $username, $password, "", $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1. Create the database if it doesn't exist.
$sqlCreateDb = "CREATE DATABASE IF NOT EXISTS techvibe";
if (!$conn->query($sqlCreateDb)) {
    die("Error creating database: " . $conn->error);
}

// 2. Select the database.
$conn->select_db("techvibe");

// 3. Create the employees table if it doesn't exist.
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    department VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (!$conn->query($sqlCreateTable)) {
    die("Error creating table: " . $conn->error);
}

echo "<h2>Setup complete</h2>";
echo "<p>Database <strong>techvibe</strong> and table <strong>employees</strong> are ready.</p>";
echo "<p>Requested via: " . htmlspecialchars($_SERVER['REQUEST_METHOD']) . " " . htmlspecialchars($_SERVER['PHP_SELF']) . "</p>";
echo '<p><a href="index.php">Go to the employee list &rarr;</a></p>';

$conn->close();
