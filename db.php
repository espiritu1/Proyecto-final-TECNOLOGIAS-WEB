<?php
session_start();
  $servername = "localhost";
  $username = "espiritu";
  $password = "1234";
  $db = "uv";

    // Create connection
  $conn = new mysqli($servername, $username, $password ,$db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


?>