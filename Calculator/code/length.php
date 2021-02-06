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
    <title>Length Calculator</title>

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

    <h1 class="text-center mb-5">Length Converter</h1>
    <!--style="background:skyblue"-->
    <div class="text-center mt-3 container mb-5">
    
    <h4>
      <!-- <label>Square Kilometer</label> -->
      <input id="inputKilometer" type="number" placeholder="Kilometer" oninput="Kilometer(this.value)">
      = <span id="outputKilometer"></span></h4>
  <h4>
    <!-- <label>Square Meter</label> -->
    <input id="inputMeter" type="number" placeholder="Meter" oninput="Meter(this.value)">
    = <span id="outputMeter"></span></h4>
  <h4>
    <!-- <label>Square Mile</label> -->
    <input id="inputCentimeter" type="number" placeholder="Centimeter" oninput="Centimeter(this.value)">
    = <span id="outputCentimeter"></span></h4>
    <h4>
        <!-- <label>Square Yard</label> -->
        <input id="inputMillimeter" type="number" placeholder="Millimeter" oninput="Millimeter(this.value)">
        = <span id="outputMillimeter"></span></h4>
    <h4>
        <!-- <label>Square Foot</label> -->
        <input id="inputMicrometer" type="number" placeholder="Micrometer" oninput="Micrometer(this.value)">
        = <span id="outputMicrometer"></span></h4>
    <h4>
        <!-- <label>Square Inch</label> -->
        <input id="inputNanometer" type="number" placeholder="Nanometer" oninput="Nanometer(this.value)">
        = <span id="outputNanometer"></span></h4>
    <h4>
        <!-- <label>Mile</label> -->
        <input id="inputMile" type="number" placeholder="Mile" oninput="Mile(this.value)">
        = <span id="outputMile"></span></h4>
    <h4>
        <!-- <label>Yard</label> -->
        <input id="inputYard" type="number" placeholder="Yard" oninput="Yard(this.value)">
        = <span id="outputYard"></span></h4>
    <h4>
        <!-- <label>Foot</label> -->
        <input id="inputFoot" type="number" placeholder="Foot" oninput="Foot(this.value)">
        = <span id="outputFoot"></span></h4>
    <h4>
        <!-- <label>Inch</label> -->
        <input id="inputInch" type="number" placeholder="Inch" oninput="Inch(this.value)">
        = <span id="outputInch"></span></h4> 
    <h4>
        <!-- <label>NauticalMile</label> -->
        <input id="inputNauticalMile" type="number" placeholder="Nautical Mile" oninput="NauticalMile(this.value)">
        = <span id="outputNauticalMile"></span></h4>
    </div>
      
      <script src="length.js"></script>

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