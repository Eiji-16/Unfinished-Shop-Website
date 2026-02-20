<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->prepare("SELECT * FROM users WHERE email = ? OR cell = ?");
    $check->bind_param("ss", $email, $cell);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0){
        echo "duplicate data";
    } else {
        $stmt = $conn->prepare ("INSERT INTO users (firstname, lastname, email, cell, password) VALUES(?,?,?,?,?)");
        $stmt->bind_param("sssss", $firstname, $lastname, $email, $cell, $password);
      if ($stmt->execute()) {
            echo "<script> alert('Successfully Registered'); window.location.href='login.php'; </script>";
        } else
            echo "<a href='register.php'>Try again</a>";
        }
    }

?>