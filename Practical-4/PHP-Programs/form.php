<!DOCTYPE html>
<html>
<head><title>PHP Form</title></head>
<body>
  <form method="POST">
    Name: <input type="text" name="username">
    <input type="submit" value="Submit">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['username'];
      echo "<h3>Hello " . $name . "</h3>";
    }
  ?>
</body>
</html>
