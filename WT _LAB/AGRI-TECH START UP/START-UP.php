<?php
// Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$dob = $_POST['dob'];
$state = $_POST['state'];
$country = $_POST['country'];

// Validate form data (you can add more validation as per your requirements)
$errors = [];
if (empty($firstName) || empty($lastName) || empty($password) || empty($confirmPassword) || empty($dob) || empty($state) || empty($country)) {
    $errors[] = "All fields are required.";
}
if ($password !== $confirmPassword) {
    $errors[] = "Passwords do not match.";
}
if (!isset($_POST['terms'])) {
    $errors[] = "You must accept the terms and conditions.";
}

// If there are validation errors, display them; otherwise, proceed with registration
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
} else {
    // Perform database operations or any other actions you want to do with the user data
    // Here, we are simply displaying a success message
    echo "<p>Registration successful! Welcome, $firstName $lastName!</p>";
}
?>
