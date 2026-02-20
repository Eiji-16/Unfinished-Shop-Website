<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['roleName']);
    $description = trim($_POST['description']);

    if (empty($name) || empty($description)) {
        echo "All fields are required.";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO roles (name, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $description);

    if ($stmt->execute()) {
        header("Location: dashboard.php#rolestab");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}
?>