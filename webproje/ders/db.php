<?php 

$db = mysqli_connect('localhost', 'root', '', 'readlearn');

if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

?>