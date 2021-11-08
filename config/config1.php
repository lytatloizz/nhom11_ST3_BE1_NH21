<?php

$mysqli = new mysqli("localhost","root","","ly_tat_loi");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}
?>