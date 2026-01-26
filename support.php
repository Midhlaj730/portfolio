<?php
$servername = "db";
$username = "root";
$password = "root";
$database = "portfolio_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$requirement = $_POST['requirement'];

$sql = "INSERT INTO support_requests (name, email, phone, requirement)
        VALUES ('$name', '$email', '$phone', '$requirement')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Thank you! Your request has been submitted.</h2>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

