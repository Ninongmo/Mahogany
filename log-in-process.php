<?php
include_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Username and password match, redirect to a success page or perform further actions
        header("Location: admin.html");
        exit();
    } else {
        // Username and password do not match, display an error message
        echo '<script>alert("Invalid username or password"); window.location.href = "log-in.php";</script>';
        exit();
    }
}

$conn->close();
?>
