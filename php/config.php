<?php
  $hostname = "localhost";
  $username = "root";
  $password = "felix4christ";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname) or die( "Database connection error".mysqli_connect_error($conn));
  
?>
