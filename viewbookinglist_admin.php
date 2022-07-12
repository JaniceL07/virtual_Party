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

  $result = mysqli_query($mysqli, "SELECT * FROM booking ORDER BY id");

  $mysqli->close();

?>

<!DOCTYPE>
<html>
<head>
<title> Edit Booking List </title>

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

h2 {
   font-size: 35px;
   color: white;
   text-align: center;
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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  text-align: center;
  color: black;
  margin-left: auto;
  margin-right: auto;
  background-color: white;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.ulStyle {
  overflow: hidden;
  background-color: #e7cacf;
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 70px;
}

</style>
<?php include ('includes/navigation_admin.php'); ?>
</head>

<body>

<!-- <ul>
  <li><a href="#list"><img src="image/list.jpg" width: 50px height: 50px></a></li>
  <h1> Virtual Party </h1>  
  <li style="float:right"><a href="#profile"><img src="image/button1.jpg" width: 50px height: 50px></a></li>
  <li style="float:right"><a href="#announce"><img src="image/announce.jpg" width: 50px height: 50px></a></li>
</ul> -->

<h2> Booking List <h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Phone Number</th>
<th>Email</th>
<th>Number of Participants</th>
<th>Theme</th>
<th>Party Date</th>
<th>Party Time</th>
<th>Edit</th>

</tr>

<?php 
 foreach ($result as $row) {         
 echo "<tr>";
 echo "<td>".$row['ID']."</td>";
 echo "<td>".$row['Name']."</td>";
 echo "<td>".$row['PhoneNumber']."</td>"; 
 echo "<td>".$row['Email']."</td>";
 echo "<td>".$row['NumberofParticipants']."</td>";		
 echo "<td>".$row['Theme']."</td>";
 echo "<td>".$row['PartyDate']."</td>";
 echo "<td>".$row['PartyTime']."</td>";
 echo "<td><a href='editbookinglist_admin.php'>Edit</a></td>";
 echo "</tr>";
}
?>    

</table>

<!-- <div class="ulStyle">
<ul>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="#term">Term of Service</a></li>
  <li style="float:right"><a href="#privacy">Privacy policy</a></li>
</ul>
</div> -->

<?php include ('includes/footer_admin.php'); ?>

</body>