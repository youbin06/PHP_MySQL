<?php

    $conn = mysqli_connect("localhost", "root", "yoobin60", "opentutorials");

    echo "<h1>Single row</h1>";
    $sql = "SELECT * FROM topic WHERE id = 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];
    echo "<h1>Multi row</h1>";
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
      echo '<h2>'.$row['title'].'</h2>';
      echo $row['description'];
    }
?>
