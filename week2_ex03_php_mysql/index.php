<?php
// index.php
// Landing page. Lists all employees with Add/Edit/Delete links.
// Also includes an optional department search (stretch goal) using $_REQUEST.

require_once 'db_connect.php';

// Optional search filter (stretch goal 24). Works whether the department
// value arrives via GET or POST, hence $_REQUEST.
$search = trim($_REQUEST['department'] ?? '');

if ($search !== '') {
    $stmt = $conn->prepare("SELECT id, name, email, department FROM employees WHERE department LIKE ? ORDER BY id ASC");
    $like = "%" . $search . "%";
    $stmt->bind_param("s", $like);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = $conn->query("SELECT id, name, email, department FROM employees ORDER BY id ASC");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TechVibe Employee Management</title>
</head>
<body>
    <h1>TechVibe Employee Management</h1>

    <p><a href="create.php">+ Add New Employee</a></p>

    <form action="index.php" method="GET">
        <label for="department">Filter by department:</label>
        <input type="text" id="department" name="department" value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Search</button>
        <?php if ($search !== ''): ?>
            <a href="index.php">Clear</a>
        <?php endif; ?>
    </form>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Actions</th>
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
                        <td>
                            <a href="update.php?id=<?= urlencode($row['id']) ?>">Edit</a>
                            |
                            <a href="delete.php?id=<?= urlencode($row['id']) ?>"
                               onclick="return confirm('Delete this employee?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="5">No employees found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <p style="color:#888; font-size:0.9em;">
        Served by <?= htmlspecialchars($_SERVER['SERVER_NAME'] ?? 'localhost') ?>
        via <?= htmlspecialchars($_SERVER['REQUEST_METHOD']) ?>
    </p>
</body>
</html>
<?php $conn->close(); ?>
