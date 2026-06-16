<?php
$conn = mysqli_connect("localhost","root","","register_db");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

echo "<h2>User Records</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
 echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['email'] . "</td>";
 echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>