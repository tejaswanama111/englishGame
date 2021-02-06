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
        font-size: 70px;
        background: black;
        color: red;
        border: 4px solid blue;
        border-radius: 80px;
        width: 60%;
    }
    </style>
</head>

<body>

    <div class="parallax">
        <center>
            <h1 class="text-center txt" style="font-size: 100px;">Calculators</h1>
        </center>
    </div>
    <div style="height:auto;background-color:black;">
        <center>
            <h1 class="text-center txtclass">All Calculators</h1>
        </center>
    </div>

    <div class="grid">
        <div class="parallax1">
            <!-- Parallex Starts Here -->
            <div class="container">
                <img src="images/time.jpg" alt="Time Calculator" class="image">
                <div class="overlay1">
                    <a href="code/time.php">
                        <div class="text txt">Time Calculator</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Parallex End Here -->

            <div class="container">
                <img src="images/length.png" alt="Length Calculator" class="image">
                <div class="overlay">
                    <a href="code/length.php">
                        <div class="text txt">Length Calculator</div>
                </div>
            </div>

        <div class="parallax2">
            <div class="container">
                <img src="images/temperature.jpg" alt="Temperature Converter" class="image">
                <div class="overlay">
                    <a href="code/temperature.php">
                        <div class="text txt">Temperature Converter</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="parallax3">
            <div class="container">
                <img src="images/mass.jpg" alt="Mass Calculator" class="image">
                <div class="overlay1">
                    <a href="code/mass.php">
                        <div class="text txt">Mass Calculator</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="parallax5">
            <div class="container">
                <img src="images/frequency.jpg" alt="Frequency Calculator" class="image" width="500" height="300">
                <div class="overlay1">
                    <a href="code/frequency.php">
                        <div class="text txt">Frequency Calculator</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="parallax6">
            <div class="container">
                <img src="images/area.png" alt="Area Calculator" class="image" width="500" height="300">
                <div class="overlay">
                    <a href="code/area.php">
                        <div class="text txt">Area Calculator</div>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <br>
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