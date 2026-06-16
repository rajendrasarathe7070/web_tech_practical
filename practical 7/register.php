<?php
$conn = mysqli_connect("localhost","root","","register_db");

if(!$conn) {
 die("Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name, email, password)
VALUES('$name', '$email', '$password')";

if(mysqli_query($conn, $sql)) {
 echo "<h2>Registration Successful</h2>";
 echo "<a href='display.php'>View Records</a>";
} else {
 echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>