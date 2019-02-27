<?php

  $conn = mysqli_connect("localhost", "root", "yoobin60", "opentutorials");
  $sql = "INSERT INTO topic(title, description, created) values (
    'MySQL', 'MySQL is ....', NOW()
  )";

  $result = mysqli_query($conn, $sql);
  if($result == false){
    echo mysqli_error($conn);
  }
?>
