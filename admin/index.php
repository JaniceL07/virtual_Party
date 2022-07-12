<!DOCTYPE html>
<html>
<meta charset="UTF-8" />
<!-- <link rel = "stylesheet" href="../style/home-page.css" type="text/css"> -->
<style>
    * {
        box-sizing: border-box;
    }

    html, body {
        height: 100%;
        width: 100%;
        position: fixed;
        overflow-x: hidden;
        z-index: -2;
    }

    body {
        border: 0px;
        margin: 0px;
        padding: 0px;
    }


    #ice_mons{
       position: absolute;
       left: 75%;
        z-index: -1;
    }

    .rectangle_5 {
    min-height: 350px;
    width: 1400px;
    border-radius: 50px;
    background-color: #E7CACF;
    overflow: hidden;
    position: relative;
    left: 88px;
    top: 60px;
    padding-top: 70px;
    border: none;
    z-index: -2;
    }

    .adminDis{
        color: black;
        font-weight: bold;
        font-size:50px;
        position: relative;
        left:40%;
    }

    .viewButton{
        position: relative;
        left: 45%;
        bottom: 140px;
        color: white;
        text-decoration: none;
        padding: 35px 55px;
        background-color: #9C747C;
        border: none;
        border-radius: 40px;
        cursor: pointer;
        transition: all 0.3s ease 0s;
        
    }

    .editBookingButton{
        position: relative;
        left: 44%;
        bottom: 70px;
        color: white;
        text-decoration: none;
        padding: 35px 55px;
        background-color: #9C747C;
        border: none;
        border-radius: 40px;
        cursor: pointer;
        transition: all 0.3s ease 0s;
    }

    .editBookingButton:hover{
    background-color: black;
    }

    .viewButton:hover {
    background-color: black;
    }

    #yellow {
        width: 300px;
        height:300px;
        z-index: -2;
    }

</style>
<head>
    <?php include ('../includes/navigation_admin.php'); ?>  
</head>

    <body style = "background-color:black">
      
      <div class="content">
        
        <img id="ice_mons" src = "../images/ice-cream-monster.png">
        
        <div class="rectangle_5"><h1 class = "adminDis"> Admin Option </h1> <img id="yellow" src = "../images/yellow.png" > </div>
        <a class="viewButton" href="../viewbookinglist_admin.php" >View Data</a>
        </br>
        </br>
        <a class="editBookingButton" href="../editbookinglist_admin.php" >Edit Booking List</a>
  
      </div>
      <?php include ("../includes/footer_admin.php"); ?>
    </body>
</html>