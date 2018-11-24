<?php
$conn = mysqli_connect("localhost","sigoswvq_sigo","sigosoft","sigoswvq_sigosoft");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>