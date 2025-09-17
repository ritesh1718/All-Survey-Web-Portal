<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Basic sanitization
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert into DB
$sql = "INSERT INTO users (full_name, email, password) VALUES ('$name', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
