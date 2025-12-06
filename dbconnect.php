<?php 
$databaseHost="localhost";
$databaseUser="Manzy";
$databasePassword="emmanuel";
$databaseName="destination";

//create connection
$conn = mysqli_connect('localhost','Manzy','emmanuel','destination');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>