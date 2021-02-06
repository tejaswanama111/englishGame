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
    <title>Frequency Calculator</title>

    <style>
        *{
            font-family: 'Baloo 2', cursive;
        }
        .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: white;
    text-align: center;
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

    <h1 class="text-center mb-5">Frequency Converter</h1>
    <!--style="background:skyblue"-->
    <div class="text-center mt-3 container mb-5">
    <h4>
        <input id="inputHertz" type="number" placeholder="Hertz" oninput="Hertz(this.value)">
    = <span id="outputHertz"></span> Hz</h4>
    <h4>
      <input id="inputKilohertz" type="number" placeholder="Kilohertz" oninput="Kilohertz(this.value)">
      = <span id="outputKilohertz"></span> KHz</h4>
  <h4>
    <input id="inputMegahertz" type="number" placeholder="Megahertz" oninput="Megahertz(this.value)">
    = <span id="outputMegahertz"></span> MHz</h4>
    <h4>
        <input id="inputGigahertz" type="number" placeholder="Gigahertz" oninput="Gigahertz(this.value)">
        = <span id="outputGigahertz"></span> GHz</h4>
    </div>
      
      <script>
      function Hertz(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputKilohertz").innerHTML=num / 1000;
        document.getElementById("outputMegahertz").innerHTML=num / 1e+6;
        document.getElementById("outputGigahertz").innerHTML=num / 1e+9;
        document.getElementById("outputHertz").innerHTML=num;

        //Manage
        document.getElementById("inputKilohertz").value="";
        document.getElementById("inputMegahertz").value="";
        document.getElementById("inputGigahertz").value="";
      }
      function Kilohertz(num){
        num = parseFloat(num);
        //Formula
        document.getElementById("outputHertz").innerHTML=num * 1000;
        document.getElementById("outputMegahertz").innerHTML=num / 1000;
        document.getElementById("outputGigahertz").innerHTML=num / 1e+6;

        //Manage
        document.getElementById("outputKilohertz").innerHTML=num;
        document.getElementById("inputHertz").value="";
        document.getElementById("inputMegahertz").value="";
        document.getElementById("inputGigahertz").value="";
      }
      function Megahertz(num){
        num = parseFloat(num);
        //Formula
        document.getElementById("outputHertz").innerHTML=num * 1e+6;
        document.getElementById("outputKilohertz").innerHTML=num * 1000;
        document.getElementById("outputGigahertz").innerHTML=num / 1000;

        //Manage
        document.getElementById("outputMegahertz").innerHTML=num;
        document.getElementById("inputKilohertz").value="";
        document.getElementById("inputHertz").value="";
        document.getElementById("inputGigahertz").value="";
      }

        function Gigahertz(num){
        num = parseFloat(num);
        //Formula
        document.getElementById("outputHertz").innerHTML=num * 1e+9;
        document.getElementById("outputKilohertz").innerHTML=num * 1e+6;
        document.getElementById("outputMegahertz").innerHTML=num * 1000;
        
        document.getElementById("outputGigahertz").innerHTML=num;
        document.getElementById("inputKilohertz").value="";
        document.getElementById("inputHertz").value="";
        document.getElementById("inputMegahertz").value="";
      }
      </script>

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