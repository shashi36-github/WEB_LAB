<?php
session_start();

// Simulating user authentication (replace with your own authentication logic)
$validUsername = 'admin';
$validPassword = 'password';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $validUsername && $password === $validPassword) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header('Location: product.php');
    exit();
} else {
    echo "Invalid username or password.";
}
?>
