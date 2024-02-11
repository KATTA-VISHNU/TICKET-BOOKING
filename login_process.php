<?php
session_start();

// Database connection setup
$host = 'localhost';
$db = 'login_signup';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["loginUsername"];
    $password = $_POST["loginPassword"];

    $sql = "SELECT id, username FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["username"] = $row["username"];
        header("Location: dashboard.php");
    } else {
        echo "Invalid login credentials.";
    }
}

$conn->close();
?>
