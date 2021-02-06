<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../assets/Baloo2-Medium.ttf"> -->
    <title>Time Calculator</title>

    <style>
        *{
            font-family: 'Baloo 2', cursive;
        }
        
 @media only screen and (max-width: 770px) {
   body{
       background: pink;
   }
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">MGGS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <h1 class="text-center mb-5">Time Converter</h1>
    <!--style="background:skyblue"-->
    <div class="text-center mt-3 container mb-5">
    
    <h4>
      <!-- <label>Square Kilometer</label> -->
      <input id="inputNanosecond" type="number" placeholder="Nanosecond" oninput="Nanosecond(this.value)">
      = <span id="outputNanosecond"></span></h4>
  <h4>
    <!-- <label>Square Meter</label> -->
    <input id="inputMicrosecond" type="number" placeholder="Microsecond" oninput="Microsecond(this.value)">
    = <span id="outputMicrosecond"></span></h4>
  <h4>
    <!-- <label>Square Mile</label> -->
    <input id="inputMillisecond" type="number" placeholder="Millisecond" oninput="Millisecond(this.value)">
    = <span id="outputMillisecond"></span></h4>
    <h4>
        <!-- <label>Square Yard</label> -->
        <input id="inputSecond" type="number" placeholder="Second" oninput="Second(this.value)">
        = <span id="outputSecond"></span></h4>
    <h4>
        <!-- <label>Square Foot</label> -->
        <input id="inputMinute" type="number" placeholder="Minute" oninput="Minute(this.value)">
        = <span id="outputMinute"></span></h4>
    <h4>
        <!-- <label>Square Inch</label> -->
        <input id="inputHour" type="number" placeholder="Hour" oninput="Hour(this.value)">
        = <span id="outputHour"></span></h4>
    <h4>
        <!-- <label>Day</label> -->
        <input id="inputDay" type="number" placeholder="Day" oninput="Day(this.value)">
        = <span id="outputDay"></span></h4>
    <h4>
        <!-- <label>Week</label> -->
        <input id="inputWeek" type="number" placeholder="Week" oninput="Week(this.value)">
        = <span id="outputWeek"></span></h4>
    <h4>
        <!-- <label>Month</label> -->
        <input id="inputMonth" type="number" placeholder="Month" oninput="Month(this.value)">
        = <span id="outputMonth"></span></h4>
    <h4>
        <!-- <label>Year</label> -->
        <input id="inputYear" type="number" placeholder="Year" oninput="Year(this.value)">
        = <span id="outputYear"></span></h4> 
    <h4>
        <!-- <label>Decade</label> -->
        <input id="inputDecade" type="number" placeholder="Decade" oninput="Decade(this.value)">
        = <span id="outputDecade"></span></h4>
    <h4>
        <!-- <label>Century</label> -->
        <input id="inputCentury" type="number" placeholder="Century" oninput="Century(this.value)">
        = <span id="outputCentury"></span></h4> 
    </div>
      
      <script src="time.js"></script>

<footer class="footer mt-auto py-3 bg-dark">
    <div class="container text-center">
      <span class="text-muted">Copyright MGGS School © 2020-2021 || All Rights Reseved</span>
    </div>
  </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

  </body>
</html>