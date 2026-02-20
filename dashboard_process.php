<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = $_POST['email'];
    $cell = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role_id = (int)$_POST['role_id'];

    
    if (empty($firstname) || empty($lastname) || empty($email) || empty($cell) || empty($_POST['password']) || empty($role_id)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: dashboard.php#manageUsers");
        exit();
    }

  
    $check = $conn->prepare("SELECT * FROM users WHERE email = ? OR cell = ?");
    $check->bind_param("ss", $email, $cell);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Email or cell already exists.";
        header("Location: dashboard.php#manageUsers");
        exit();
    }

 
    $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, cell, password, role_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $firstname, $lastname, $email, $cell, $password, $role_id);

    if ($stmt->execute()) {
        $_SESSION['success'] = "User added successfully!";
        unset($_SESSION['temp_user']);
        header("Location: dashboard.php#manageUsers");
    } else {
        $_SESSION['error'] = "Error: " . $conn->error;
        header("Location: dashboard.php#manageUsers");
    }

    $stmt->close();
    $check->close();
} else {
    header("Location: dashboard.php#manageUsers");
    exit();
}
?>