<!DOCTYPE html>
<html>
<link rel = "stylesheet" href="../style/booking-page.css" type="text/css">

    <head>
        
    </head>

    <?php include ('../includes/navigation_member.php'); ?>
    <?php include ("../includes/footer_member.php"); ?>

    <body style ="background-color:black"> 

        <div id="headerText"> Let's Have A Party!</div>
        
        <div id="bookForm">
            <form action ="/action_page.php">
                <label for="fname"> First Name </br></label>
                <input type="text" id = "fname" name="firstName" placeholder="Your Name...">
                </br>
                <label for="lname"> Last Name </br> </label>
                <input type="text" id = "lname" name="lastName" placeholder="Your Last Name...">
                </br>
                <label for="noOfPax"> Number of Participants </br> </label>
                <input type="text" id = "noOfPax" name="numberOfPax" placeholder="Enter Number Of Pax...">

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

                <label for="date"> Date </label>
                </br>
                <input type="date" id="dateOfInterest" name="date">

                <input type ="submit" value="Submit">
            </form>

    </body>
</html>
