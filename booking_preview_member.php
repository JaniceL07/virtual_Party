<?php
 $db_host = "localhost";
 $db_user = "root";
 $db_password = "";
 $db_db = "virtualparty";

   $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );

  $result = mysqli_query($mysqli, "SELECT * FROM booking
INNER JOIN newuser ON booking.ID=newuser.id");

  $mysqli->close();

?>


<!DOCTYPE>
<html>
<head>
<title> Booking Preview </title>

<style>
body{
    background-color: black;
}

h1 {
   text-align: center;
   font-weight: bold; 
   font-size: 70px;
   display: inline-block;
   margin-left: 700px;
   margin-top: 20px;

}

.pageHeader {
    background-color: #e7cacf;
    height: 100px;
    width: 1890px;
}

.titleBanner {
    background-color: #e7cacf;
    height: 80px;
    width: 921px;
    margin-left: 520px;
    border-radius: 10px;
}

h2 {
    font-family: Russo One;
    font-weight: bold;
    text-align: center;
    font-size: 50px;
}

h3 {
   font-family: Arial;
   font-size: 40px;
   color: #e7cacf;
   font-style: italic;
   margin-left: 830px;
   padding-top: 80px;
   padding-bottom: 80px;
   text-decoration: underline;
}

p {
   font-family: Arial;
   font-size: 35px;
   font-weight: bold;
   color: #e7cacf;
   text-align: left;
   line-height: 200%;
   margin-left: 200px; 
}

button {
   background-color: #e7cacf; 
   border-radius: 10px;
   float: left;
   margin-top: 35px;
   margin-left: 30px;
   border-style: none;
   cursor: pointer;
}

button:hover {
   width: 50px;
   height: 50px;
   display: inline-block;
}

button.btn {
   background-color: #e7cacf; 
   border-radius: 10px;
   float: right;
   margin-top: 35px;
   margin-left: 30px;
   border-style: none;
}

.input {
  background-color: #e7cacf;
  border: none;
  color: black;
  padding: 15px 32px;
  border-radius: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 35px;
  margin-left: 890px;
  font-weight: bold;
  margin-bottom: 90px;
  cursor: pointer;
}

.qrCode{
   margin-left: 840px; 
   display: block;
}

.imageStyle {
   text-align: right;
   display: fixed;
}

p1 {
   font-family: Arial;
   font-weight: bold;
   font-size: 40px;
   margin-top: 60px;
   margin-left: 50px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #e7cacf;
}

li {
  float: left;
  margin-top: 40px;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 30px;
  font-weight: bold;
  font-family: roboto;
}

</style>
</head>

<?php include ('includes/navigation_member.php'); ?>
<body>

<!-- <div class="pageHeader">
<a href='http://virtualparty/home.html'><button><img src="image/button1.jpg" width: 50px height: 50px>
</button></a>
<h1> Virtual Party </h1>
<button style="float:right" onclick=""><img src="image/list.jpg" width: 50px height: 50px>
</button>
</div> -->

<div class="titleBanner">
<h2> Thanks for joining us! </h2>
</div>

<h3>Booking Preview</h3>


<?php
foreach ($result as $row) {
  echo "<p> Name: ".$row['Name']."</p>";
  echo "<p> Phone Number: ".$row['PhoneNumber']."</p>";
  echo "<p> Email: ".$row['Email']."</p>"; 
  echo "<p> Number of Participants: ".$row['NumberofParticipants']."</p>";
  echo "<p> Theme:".$row['Theme']."</p>";
  echo "<p> Party Date: ".$row['PartyDate']."</p>";
  echo "<p> Party Time: ".$row['PartyTime']."</p>";
}
?>

<div class="qrCode">
<img src="image/qrcode.jpg" width: 20px height: 20px>
</div>

<div class="imageStyle">
<img src="image/pic1.jpg" width: 20px height: 20px>
</div>

<!-- <ul>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="#term">Term of Service</a></li>
  <li style="float:right"><a href="#privacy">Privacy policy</a></li>
</ul> -->

</body>
<?php include ("includes/footer_member.php"); ?>
</html>