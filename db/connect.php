<?php
$conn = new mysqli("localhost","root","","thuongmaidientu");
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>