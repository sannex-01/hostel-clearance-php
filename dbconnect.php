<?php
$db = mysqli_connect("localhost", "root", "", "has") or die("Could not connect.");

if(!$db){
  die("Error: Failed to connect to database!");
}
?>