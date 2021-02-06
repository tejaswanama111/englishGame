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
    <title>Speed Calculator</title>

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

    <h1 class="text-center mb-5">Speed Converter</h1>
    <!--style="background:skyblue"-->
    <div class="text-center mt-3 container mb-5">
    <h4>
        <input id="inputMPH" type="number" placeholder="Miles Per Hour" oninput="MPH(this.value)">
    = <span id="outputMPH"></span> MPH</h4>
    <h4>
      <input id="inputFPS" type="number" placeholder="Foot Per Second" oninput="FPS(this.value)">
      = <span id="outputFPS"></span> FPS</h4>
  <h4>
    <input id="inputMPS" type="number" placeholder="Meter Per Second" oninput="MPS(this.value)">
    = <span id="outputMPS"></span> MPS</h4>
    <h4>
        <input id="inputKPH" type="number" placeholder="Kilometer Per Hour" oninput="KPH(this.value)">
        = <span id="outputKPH"></span> KPH</h4>
    <h4>
        <input id="inputKnot" type="number" placeholder="Knot" oninput="Knot(this.value)">
        = <span id="outputKnot"></span> kn</h4>
    </div>
      
      <script>
      function MPH(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputFPS").innerHTML=num * 1.46667;
        document.getElementById("outputMPS").innerHTML=num / 2.237;
        document.getElementById("outputKPH").innerHTML=num * 1.60934;
        document.getElementById("outputKnot").innerHTML=num / 1.151;
        document.getElementById("outputMPH").innerHTML=num;

        //Manage
        document.getElementById("inputFPS").value="";
        document.getElementById("inputMPS").value="";
        document.getElementById("inputKPH").value="";
        document.getElementById("inputKnot").value="";
      }

      function FPS(num){
        num = parseFloat(num);
        //Formula
        document.getElementById("outputMPH").innerHTML=num / 1.467;
        document.getElementById("outputMPS").innerHTML=num / 3.281;
        document.getElementById("outputKPH").innerHTML=num * 1.097;
        document.getElementById("outputKnot").innerHTML=num / 1.688;
        document.getElementById("outputFPS").innerHTML=num;

        //Manage
        document.getElementById("inputMPS").value="";
        document.getElementById("inputMPS").value="";
        document.getElementById("inputKPH").value="";
        document.getElementById("inputKnot").value="";
      }
      function MPS(num){
        num = parseFloat(num);
        //Formula
        document.getElementById("outputMPH").innerHTML=num * 2.237;
        document.getElementById("outputFPS").innerHTML=num * 3.281;
        document.getElementById("outputKPH").innerHTML=num * 3.6;
        document.getElementById("outputKnot").innerHTML=num / 1.944;
        document.getElementById("outputMPS").innerHTML=num;

        //Manage
        document.getElementById("inputMPH").value="";
        document.getElementById("inputMPS").value="";
        document.getElementById("inputKPH").value="";
        document.getElementById("inputKnot").value="";
      }

        function KPH(num){
        num = parseFloat(num);
        //Formula
        document.getElementById("outputMPH").innerHTML=num / 1.609;
        document.getElementById("outputFPS").innerHTML=num / 1.097;
        document.getElementById("outputMPS").innerHTML=num / 3.6;
        document.getElementById("outputKnot").innerHTML=num / 1.852;
        document.getElementById("outputKPH").innerHTML=num;

        //Manage
        document.getElementById("inputFPS").value="";
        document.getElementById("inputMPS").value="";
        document.getElementById("inputMPH").value="";
        document.getElementById("inputKnot").value="";
      }

      function Knot(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputMPH").innerHTML=num * 1.151;
        document.getElementById("outputFPS").innerHTML=num * 1.688;
        document.getElementById("outputMPS").innerHTML=num / 1.944;
        document.getElementById("outputKPH").innerHTML=num * 1.852;
        document.getElementById("outputKnot").innerHTML=num;

        //Manage
        document.getElementById("inputFPS").value="";
        document.getElementById("inputMPS").value="";
        document.getElementById("inputKPH").value="";
        document.getElementById("inputMPH").value="";
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