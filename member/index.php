<!DOCTYPE html>
<html lang="en">
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

    #rectangle_2 {
    min-height: 150x;
    width: 1400px;
    background-color: #E7CACF;
    overflow: hidden;
    position: relative;
    top: 100px;
    left: 88px;
    padding-top: 70px;
    border: none;
    }

    p {
        position: relative;
        top: 80px;
        left: 100px;
        color: white;
        font-size: 25px;
    }

    h3 {
    font-size: 40px;
    font-weight: bold;
    color: white;
    position: relative;
    top: 120px;
    left: 45%;
    }

    #video {
    position: relative;
    top: 120px;
    left: 40px;
    align-items: center;
    z-index: 1;
    }

    #innertext {
    position: relative;
    top: 50px;
    color: black;
    text-align: justify;
    }

    .rectangle{
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

    #monster{
        position: absolute;
        left: 70%;
        bottom: 200px;
        z-index: -1;
    }

    #cool{
        position: absolute;
        z-index: -1;
        left:2px;
    }

    #title{
        position: relative;
        color: black;
        font-weight: bold;
        font-size:40px;
        left: 32%;
    }

    .bookButton{
        position: relative;
        left: 43%;
        bottom: 50px;
        color: white;
        text-decoration: none;
        padding: 35px 55px;
        background-color: #9C747C;
        border: none;
        border-radius: 40px;
        cursor: pointer;
        transition: all 0.3s ease 0s;
        z-index: 2;
    }

    .bookButton:hover {
    background-color: black;
    }

</style>
<head>
    <?php include ('../includes/navigation_member.php'); ?>  
</head>


<body style = "background-color:black">
      
    <div class="content">
        

        <img id="monster" src ="../images/monster.png">
        <img id="cool" src="../images/cool.png">
        <div class ="rectangle"><h1 id="title"> Book a virtual party today! </h1></div>
        <a class="bookButton" href="/assignment/addBook.php"> Book Now </a>

        <iframe id="video" width= "1500" height= "500" src="/assignment/vp_vid_latest.mp4" style="border:none;"> </iframe>


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
    <?php include ("../includes/footer_member.php"); ?>
</body>


</html>