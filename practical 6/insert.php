
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "studentdb"; 
$conn = mysqli_connect( 
    $servername, 
    $username, 
    $password, 
    $database 
); 
if(!$conn) { 
    die("Connection Failed"); 
} 
$name = $_POST['name']; 
$email = $_POST['email']; 
$sql = "INSERT INTO students(name, email) 
VALUES('$name', '$email')"; 
if(mysqli_query($conn, $sql)) { 
    echo "<h2>Record Inserted Successfully</h2>"; 
} 
else { 
    echo "Error: " . mysqli_error($conn); 
} 
mysqli_close($conn); 
?>