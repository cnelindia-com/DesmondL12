<?php
session_start();
$servername = "35.213.170.39";
$username = "ucqyo9gwi7rkn";
$password = "raman1234";
$dbname = "db39gag74jln7x";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
