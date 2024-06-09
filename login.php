<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            header("Location: dashboard.php");
        } else {
            echo "<script>
                alert('Invalid Password!'); 
                window.location.href = 'http://localhost/MyRecipe/login.php';
              </script>";
        exit();
    }
} else {
    echo "<script>
            alert('No user found!'); 
            window.location.href = 'http://localhost/MyRecipe/login.php';
          </script>";
    exit();
}

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFF</title>
