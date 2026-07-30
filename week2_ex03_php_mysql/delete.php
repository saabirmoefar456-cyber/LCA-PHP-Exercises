<?php
// delete.php
// Receives an employee ID via $_GET, deletes that record with a prepared
// statement, and redirects back to index.php.

require_once 'db_connect.php';

$id = intval($_GET['id'] ?? 0);

if ($id > 0) {
    $stmt = $conn->prepare("DELETE FROM employees WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

$conn->close();

header("Location: index.php");
exit;
