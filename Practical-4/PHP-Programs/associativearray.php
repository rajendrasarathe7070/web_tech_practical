<?php
  $student = array(
    "Name"   => "Rahul",
    "Age"    => 20,
    "Course" => "BCA"
  );
  echo "Student Details:<br>";
  foreach ($student as $key => $value) {
    echo $key . " : " . $value . "<br>";
  }
?>
