<!DOCTYPE html>
<html lang="en">

<head>
    <title> Booking </title>
</head>

<style>
    * {
        box-sizing: border-box;
    }
    
    html,
    body {
        height: 100%;
        width: 100%;
        position: fixed;
        overflow-x: hidden;
    }
    
    body {
        border: 0px;
        margin: 0px;
        padding: 0px;
    }
    
    #headerText {
        color: black;
        display: flex;
        text-align: center;
        justify-content: center;
        position: relative;
        top: 50px;
        font-size: 35px;
        background-color: #E7CACF;
        border: none;
        border-radius: 25px;
        padding: 5px;
        width: 300px;
        height: 100px;
        align-items: center;
        left: 40%;
        z-index: -1;
    }
    
    input[type="text"],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    input[type="submit"] {
        width: 100%;
        background-color: #E7CACF;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    #bookForm {
        width: 50%;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 90px;
        position: relative;
        top: 80px;
        align-items: center;
        left: 25%;
        z-index: -1;
    }
</style>
<?php include ('includes/navigation_member.php'); ?>
<?php include ('includes/footer_member.php'); ?>
<body style="background-color:black">

    <div id="headerText"> Let's Have A Party!</div>

    <div id="bookForm">
        <form action="server1.php" method="POST">
            <label for="name"> Name </br></label>
            <input type="text" id="name" name="name" placeholder="Enter Name">
            </br>
            <label for="phone"> Phone Number </br> </label>
            <input type="text" id="phone" name="phone" placeholder="Enter Phone Number">
            </br>
            <label for="email"> Email </br> </label>
            <input type="text" id="email" name="email" placeholder="Enter Email">
            </br>
            <label for="numofpax"> Number of Participants </br> </label>
            <input type="text" id="numofpax" name="numofpax" placeholder="Enter Number Of Pax">

            <label for="theme"> Theme </label>
            <select id="theme" name="theme">
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
            <input type="date" id="date" name="date" required>
            </br>
            </br>
            <label for="time">Time </label> </br>
            <input id="time" type="time" name="time" required>

            <input type="submit" value="Submit">
        </form>

</body>


</html>