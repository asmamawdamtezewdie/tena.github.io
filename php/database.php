<?php 

$con=mysqli_connect("localhost","root","","clinic");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>