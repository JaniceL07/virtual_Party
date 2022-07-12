<?php 
require_once("config.php");
// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$email = $_POST['email'];
$telNo = $_POST['telNo'];
$password = $_POST['password'];


$sql = "INSERT INTO newuser (email, telNo, password)
VALUES ('$email', '$telNo', '$password')";

$result = $mysqli->query($sql);


if ($result == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->connect_error;
}

$mysqli->close();

?>