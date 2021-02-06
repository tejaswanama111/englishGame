<!DOCTYPE html>
<html>

<head>
    <title>My Portfolio Page</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&display=swap" rel="stylesheet">

    <style>
    * {
        font-family: 'Baloo 2', cursive;
    }

    .txt {
        font-size: 70px;
        background: black;
        color: blue;
        border: 4px solid red;
        border-radius: 80px;
        width: 60%;
    }

    .txtclass {
        font-size: 30px;
        background: black;
        color: red;
        border: 4px solid blue;
        border-radius: 30px;
        width: 100%;
    }
    </style>
</head>

<body>

    <div class="parallax">
        <center>
            <h1 class="text-center txt" style="font-size: 100px;">Calculators</h1>
        </center>

        <div class="grid">
        <div class="parallax1">
        <iframe src="code/time.php" width="500" height="600" style="border:none;"></iframe>
        </div>
      
        <div class="parallax2">
        <iframe src="code/temperature.php" width="500" height="600" style="border:none;"></iframe>
        </div>

        <div class="parallax3">
        <iframe src="code/mass.php" width="500" height="600" style="border:none;"></iframe>
        </div>

        <div class="parallax4">
        <iframe src="code/length.php" width="500" height="600" style="border:none;"></iframe>
        </div>

        <div class="parallax5">
        <iframe src="code/frequency.php" width="500" height="600" style="border:none;"></iframe>
        </div>

        <div class="parallax6">
        <iframe src="code/speed.php" width="500" height="600" style="border:none;"></iframe>
        </div>

    </div>
    </div>
    <div style="height:auto;background-color:black;">
        <center>
            <h1 class="text-center txtclass">Only These Calculators But Not Least. 
                Tell Us About other Calculators If you know. So that we can make that calculator also as soon as possible.</h1>
        </center>
    </div>

    <!-- <br> -->
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container text-center">
            <h4 style="color:white;">Copyright MGGS © 2020-<?php echo date("Y");?> || All Rights Reseved</h4>
            <a href="https://www.facebook.com/MGGS-Kota-106406400781863/"><img src="images/fb.png" width="50"
                    height="50"></a>
            <a href="https://www.youtube.com/channel/UCmw7UiCvhKoiU0IvBvihDyQ"><img src="images/youtube.png" width="50"
                    height="50"></a>
            <a href="mailto:principalmggskota@gmail.com"><img src="images/gmail.png" width="50" height="50"></a>
        </div>
    </footer>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>