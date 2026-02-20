<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int)$_POST['id'];
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $cell = trim($_POST['cell']);
    $role_id = (int)$_POST['role_id'];

    $stmt = $conn->prepare("UPDATE users SET firstname=?, lastname=?, email=?, cell=?, role_id=? WHERE id=?");
    $stmt->bind_param("ssssii", $firstname, $lastname, $email, $cell, $role_id, $id);
    $stmt->execute();
    header("Location: dashboard.php#manageUsers");
    exit();
} else if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    $roles_result = $conn->query("SELECT id, name FROM roles");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit User</title></head>
<body>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label>First Name:</label>
        <input type="text" name="firstname" value="<?php echo htmlspecialchars($user['firstname']); ?>" required>
        <label>Last Name:</label>
        <input type="text" name="lastname" value="<?php echo htmlspecialchars($user['lastname']); ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        <label>Phone:</label>
        <input type="text" name="cell" value="<?php echo htmlspecialchars($user['cell']); ?>" required>
        <label>Role:</label>
        <select name="role_id" required>
            <?php
            while ($role = $roles_result->fetch_assoc()) {
                $selected = ($role['id'] == $user['role_id']) ? 'selected' : '';
                echo "<option value=\"{$role['id']}\" $selected>" . htmlspecialchars($role['name']) . "</option>";
            }
            ?>
        </select>
        <button type="submit">Save</button>
        <a href="dashboard.php#manageUsers">Cancel</a>
    </form>
</body>
</html>