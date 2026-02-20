<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifier = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? OR cell = ?");
    $stmt->bind_param("ss", $identifier, $identifier);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['users'] = $user['firstname'];
            header("Location: dashboard.php");
            exit();

        } else {
            echo "<a href='login.php'> Successful </a>";
    }
    } else {
        echo "<a href='login.php'> Unsuccessful </a>";
     }
    }
?>