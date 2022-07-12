<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'virtualparty';
  $db_port = 3306;

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: Connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;

  $mysqli->close();
?>
    
    
<?php 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'virtualparty';
  $db_port = 3306;

// Create connection
$conn = new mysqli ($db_host, $db_user, $db_password, $db_db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$numofpax = $_POST['numofpax'];
$theme = $_POST['theme'];
$date = date('Y-m-d', strtotime($_POST['date']));
$time = date('H:i', strtotime($_POST['time']));

$sql = "INSERT INTO booking (Name, PhoneNumber, Email, NumberofParticipants, Theme, PartyDate, PartyTime)
VALUES ('$name', '$phone', '$email', '$numofpax', '$theme', '$date',' $time')";

$result = $conn->query($sql);

if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->connect_error;
}

$conn->close();

?>