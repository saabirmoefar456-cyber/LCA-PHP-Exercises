<?php
// create.php
// Displays a form to add a new employee, and handles the submission
// using $_POST + a prepared INSERT statement.

require_once 'db_connect.php';

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name       = trim($_POST['name'] ?? '');
    $email      = trim($_POST['email'] ?? '');
    $department = trim($_POST['department'] ?? '');

    if ($name === '' || $email === '' || $department === '') {
        $errors[] = "Name, email, and department are all required.";
    } else {
        $stmt = $conn->prepare("INSERT INTO employees (name, email, department) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $department);

        if ($stmt->execute()) {
            $success = true;
            header("Location: index.php");
            exit;
        } else {
            $errors[] = "Error saving employee: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee - TechVibe</title>
</head>
<body>
    <h1>Add New Employee</h1>

    <?php foreach ($errors as $error): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endforeach; ?>

    <form action="create.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="department">Department:</label><br>
        <input type="text" id="department" name="department" required><br><br>

        <button type="submit">Add Employee</button>
    </form>

    <p><a href="index.php">&larr; Back to employee list</a></p>
</body>
</html>
<?php $conn->close(); ?>
