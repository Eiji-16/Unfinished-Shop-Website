<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int)$_POST['id'];
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    $stmt = $conn->prepare("UPDATE roles SET name=?, description=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $description, $id);
    $stmt->execute();
    header("Location: dashboard.php#rolestab");
    exit();
} else if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM roles WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $role = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Role</title></head>
<body>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $role['id']; ?>">
        <label>Role Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($role['name']); ?>" required>
        <label>Description:</label>
        <input type="text" name="description" value="<?php echo htmlspecialchars($role['description']); ?>" required>
        <button type="submit">Save</button>
        <a href="dashboard.php#rolestab">Cancel</a>
    </form>
</body>
</html>