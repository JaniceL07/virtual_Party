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

$ID = ''; 
if( isset( $_GET['ID'])) {
    $ID = $_GET['ID']; 
} 
$result = mysqli_query($mysqli, "SELECT * from booking where ID='".$ID."'");
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Record</title>
</head>

<style>
    *{
        box-sizing: border-box;
    }

    html, body{  
        height: 100%;
        width: 100%;  
        position:fixed;
        overflow-x: hidden; 
    }

    body{
        border: 0px;
        margin: 0px;
        padding: 0px;   
    }

    #headerText{
        color: black;
        display:flex;
        text-align: center;
        justify-content: center;
        position:relative;
        top: 50px;
        font-size: 35px;
        background-color: #E7CACF;
        border:none;
        border-radius:25px;
        padding: 5px;
        width:300px;
        height:100px;
        align-items: center;
        left: 40%;
        z-index: -1;        
    }

    input[type="text"], select{
        color: black;
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display:inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;

    }

    input[type="submit"]{
        width: 100%;
        background-color: #E7CACF;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border:none;
        border-radius: 4px;
        cursor: pointer;
    }

    #bookForm{
        width:50%;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 90px;
        position: relative;
        top:80px;
        align-items: center;
        left: 25%;
        z-index: 5;

    }

   h3 {
   font-family: Arial;
   font-size: 40px;
   color: #e7cacf;
   font-style: italic;
   margin-left:850px;
   padding-top: 80px;
   padding-bottom: 80px;
   text-decoration: underline;
   }

   h2 {
   font-family: Arial;
   font-size: 40px;
   color: #e7cacf;
   font-style: italic;
   margin-left:400px;
   padding-top: 80px;
   padding-bottom: 80px;
   text-decoration: underline;
   }

   button {
  background-color: #e7cacf;
  border: none;
  color: black;
  padding: 15px 32px;
  border-radius: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 35px;
  margin-left: 830px;
  font-weight: bold;
  margin-bottom: 90px;
  cursor: pointer;
  margin-top: 100px;
}



</style>
<?php include ('includes/navigation_admin.php'); ?>
<body style ="background-color:black"> 
<div class="form">
    
<h3>Update Record</h3>
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

$status = "";
if(isset($_POST['id']) && $_POST['id']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$phone =$_REQUEST['phone'];
$email =$_REQUEST['email'];
$numofpax =$_REQUEST['numofpax'];
$theme =$_REQUEST['theme'];
$date =date('Y-m-d', strtotime($_REQUEST['date']));
$time =date('H:i', strtotime($_REQUEST['time']));

$update="UPDATE booking SET Name='".$name."',
PhoneNumber='".$phone."', Email='".$email."',
NumberofParticipants='".$numofpax."' , Theme='".$theme."', PartyDate='".$date."', PartyTime='".$time."'where id='".$id."'";

mysqli_query($conn, $update) or die(mysqli_error());

$status = "<h2> Please Click the button below to view the updated record</h2><a href='viewbookinglist_admin.php'><button>Updated Record</button></a>";
echo '<p style="color:#e7cacf;">'.$status.'</p>';
}else {
?>


<div id="bookForm">
<form method="POST" action=""> 


<label for="name"> ID </br></label>
<input type="hidden" name="new" value="1">
<input type="text" name="id" type="hidden" value="<?php echo $row = 'id' ?>">

<label for="name"> Name </br></label>
<p><input type="text" name="name" placeholder="Name" 
required value="<?php echo $row = 'name'?>" ></p>

<label for="phone"> Phone Number </br></label>
<p><input type="text" name="phone" placeholder="Phone" 
required value="<?php echo $row = 'phone'?>" ></p>

<label for="email"> Email </br></label>
<p><input type="text" name="email" placeholder="Email" 
required value="<?php echo $row = 'email'?>" ></p>

<label for="numofpax"> Number of Participants </br></label>
<p><input type="text" name="numofpax" placeholder="Number of Participants" 
required value="<?php echo $row = 'numofpax'?>" ></p>

<label for = "theme"> Theme </label>
                <select id ="theme" name ="theme">
                    <table class="table">
                    <option value = "IT">  
                        <tr><img id= "IT_IMG" src="images/it.jpg"> </tr>
                        <tr>IT: Return of PennyWise </tr>
                    </option>
                    <option value = "Meow-Meow" > Meow-Meow </option>
                    <option value = "KFC vs McDonald"> KFC vs McD </option>
                    </table>
                </select>

<label for="date"> Party Date </br></label>
<p><input type="date" name="date" placeholder="Party Date" 
required value="<?php echo $row = 'date'?>" ></p>

<label for="time"> Party Time </br></label>
<p><input type="time" name="time" placeholder="Party Time" 
required value="<?php echo $row = 'time'?>"></p>

<p><input name="submit" type="submit" value="Update"></p>
</form>
<?php } ?>
</div>
</div>
</body>
<?php include ("includes/footer_admin.php"); ?>
</html>