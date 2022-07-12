<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<title> HomePage</title> 
<link rel = "stylesheet" href="./style/home-page.css" type="text/css">

<head>
    <?php include ('includes/navigation.php'); ?>  
</head>


<body style = "background-color:black">
      
    <div class="content">
        <img id= "monk" src="images/monk.png">
        <div class="rectangle_1"><h2><b>HOST A VIRTUAL PARTY WITH <br>YOUR FRIEND</b><h2></div>
        <a href="newsignup.php" class="bookButton"> Book Now </a>
        <h1 class = "header"> PARTEI provies fully virtual party with different themes!</h1>
        <p class ="paragraph"> Party with your friend and experience a virtual party that you never experienced before.</p>
        <a href="newsignup.php" class="signUpButton"> Sign Up </a>
        <img id= "dude" src="images/dude.png">
        <iframe id="video" width= "1500" height= "500" src="vp_vid_latest.mp4" style="border:none;"> 
        </iframe>
        <h3 class = "header3"><b>  About us </b> </h3>
        <br>
    

        <div id="rectangle_2"> 

            <p id="innertext"> PARTEI. goal is to bring people together through fun 
                and interactive games. In PARTEI. , we want to create a culture <br>
                that encourages fun and meaningful interaction through the mean of people
                new and innovative way to party. 
            </p>
            <p> &nbsp; </p>
            <p> &nbsp; </p>
            <p> &nbsp; </p>
            <p> &nbsp; </p>
            <p> &nbsp; </p>
            <p> &nbsp; </p>
        </div>


    

    </div>
    <?php include ("includes/footer.php"); ?>
</body>


</html>