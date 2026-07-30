<?php
// read.php
// Fetches all employees and displays them in an HTML table.

require_once 'db_connect.php';

$result = $conn->query("SELECT id, name, email, department FROM employees ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Employees - TechVibe</title>
</head>
<body>
    <h1>All Employees</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['department']) ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="4">No employees found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <p><a href="index.php">&larr; Back to home</a></p>
</body>
</html>
<?php $conn->close(); ?>
