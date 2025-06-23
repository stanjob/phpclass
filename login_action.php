<?php
session_start();

$host = 'localhost';
$db = 'login_system';
$user = 'root';      // change if needed
$pass = '';          // change if needed

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        header("Location: member.php");
        exit();
    } else {
        echo "❌ Invalid password.";
    }
} else {
    echo "❌ User not found.";
}

$conn->close();
?>
