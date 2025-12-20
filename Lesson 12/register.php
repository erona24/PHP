<?php
include_once("config.php");

if (isset($_POST['submit'])) {

    $name     = trim($_POST['name']);
    $surname  = trim($_POST['surname']);
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $tempPass = $_POST['password'];

    // Check empty fields
    if (empty($name) || empty($surname) || empty($username) || empty($email) || empty($tempPass)) {
        echo "You need to fill all the fields.";
        exit;
    }

    // Hash password
    $password = password_hash($tempPass, PASSWORD_DEFAULT);

    // Check if username exists
    $sql = "SELECT 1 FROM users WHERE username = :username";
    $checkSQL = $conn->prepare($sql);
    $checkSQL->bindParam(':username', $username);
    $checkSQL->execute();

    if ($checkSQL->rowCount() > 0) {
        echo "Username already exists!";
        header("refresh:2; url=signup.php");
        exit;
    }

    // Insert user
    $sql = "INSERT INTO users (name, surname, username, email, password)
            VALUES (:name, :surname, :username, :email, :password)";

    $insertSQL = $conn->prepare($sql);
    $insertSQL->bindParam(':name', $name);
    $insertSQL->bindParam(':surname', $surname);
    $insertSQL->bindParam(':username', $username);
    $insertSQL->bindParam(':email', $email);
    $insertSQL->bindParam(':password', $password);

    if ($insertSQL->execute()) {
        echo "You have registered successfully!";
        header("refresh:2; url=login.php");
        exit;
    } else {
        echo "Registration failed.";
    }
}
?>
