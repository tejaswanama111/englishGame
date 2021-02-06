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
    <title>Weight Calculator</title>

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

    <h1 class="text-center mb-5">Weight Converter</h1>
    <!--style="background:skyblue"-->
    <div class="text-center mt-3 container mb-5">
    
    <h4>
      <label>Kilogram</label>
      <input id="inputKilogram" type="number" placeholder="Kilogram" oninput="kilogramConverter(this.value)">
      = <span id="outputKilogram"></span> kg</h4>
  <h4>
    <label>Gram</label>
    <input id="inputGram" type="number" placeholder="Gram" oninput="gramConverter(this.value)">
    = <span id="outputGram"></span> g</h4>
  <h4>
    <label>Milligram</label>
    <input id="inputMilligram" type="number" placeholder="Milligram" oninput="milligramConverter(this.value)">
    = <span id="outputMilligram"></span> mg</h4>
    <h4>
        <label>Microgram</label>
        <input id="inputMicrogram" type="number" placeholder="Microgram" oninput="microgramConverter(this.value)">
        = <span id="outputMicrogram"></span> mcg</h4>
    <h4>
        <label>Tonne</label>
        <input id="inputTonne" type="number" placeholder="Tonne" oninput="tonneConverter(this.value)">
        = <span id="outputTonne"></span> t</h4>
    <h4>
        <label>Stone</label>
        <input id="inputStone" type="number" placeholder="Stone" oninput="stoneConverter(this.value)">
        = <span id="outputStone"></span> st</h4>
    <h4>
        <label>Pound</label>
        <input id="inputPound" type="number" placeholder="Pound" oninput="poundConverter(this.value)">
        = <span id="outputPound"></span> lb</h4>
    <h4>
        <label>Ounce</label>
        <input id="inputOunce" type="number" placeholder="Ounce" oninput="ounceConverter(this.value)">
        = <span id="outputOunce"></span> oz</h4>
    </div><br>
      
      <script>
      function kilogramConverter(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputGram").innerHTML=(num * 1000);
        document.getElementById("outputMilligram").innerHTML=(num * 1000000);
        document.getElementById("outputMicrogram").innerHTML=(num * 1000000000);
        document.getElementById("outputTonne").innerHTML=(num / 1000);
        document.getElementById("outputStone").innerHTML=(num * 0.15747);
        document.getElementById("outputPound").innerHTML=(num / 0.45359237);
        document.getElementById("outputOunce").innerHTML=(num * 35.274);

        //Blank
        document.getElementById("outputKilogram").innerHTML=num;
        document.getElementById("inputGram").value="";
        document.getElementById("inputMilligram").value="";
        document.getElementById("inputMicrogram").value="";
        document.getElementById("inputTonne").value="";
        document.getElementById("inputStone").value="";
        document.getElementById("inputPound").value="";
        document.getElementById("inputOunce").value="";
      }

    function gramConverter(num) {
    num = parseFloat(num);
    document.getElementById("outputKilogram").innerHTML=(num / 1000);
    document.getElementById("outputMilligram").innerHTML=(num * 1000);
    document.getElementById("outputMicrogram").innerHTML=(num * 1000000);
    document.getElementById("outputTonne").innerHTML=(num / 1000000);
    document.getElementById("outputStone").innerHTML=(num / 6350);
    document.getElementById("outputPound").innerHTML=(num / 453.59237);
    document.getElementById("outputOunce").innerHTML=(num / 28.34952);
    //////////////////////////////////////////
    document.getElementById("outputGram").innerHTML=num;
    document.getElementById("inputKilogram").value="";
    document.getElementById("inputMilligram").value="";
    document.getElementById("inputMicrogram").value="";
    document.getElementById("inputTonne").value="";
    document.getElementById("inputStone").value="";
    document.getElementById("inputPound").value="";
    document.getElementById("inputOunce").value="";
  }

  function milligramConverter(num) {
    num = parseFloat(num);
    ///////////////////////////////////////////
    document.getElementById("outputKilogram").innerHTML=(num / 1000000);
    document.getElementById("outputGram").innerHTML=(num / 1000);
    document.getElementById("outputMicrogram").innerHTML=(num * 1000);
    document.getElementById("outputTonne").innerHTML=(num / 1000000000);
    document.getElementById("outputStone").innerHTML=(num / 6.35e+6);
    document.getElementById("outputPound").innerHTML=(num / 453592);
    document.getElementById("outputOunce").innerHTML=(num / 28350);
    ///////////////////////////////////////////
    document.getElementById("outputMilligram").innerHTML=num;
    document.getElementById("inputKilogram").value="";
    document.getElementById("inputGram").value="";
    document.getElementById("inputMicrogram").value="";
    document.getElementById("inputTonne").value="";
    document.getElementById("inputStone").value="";
    document.getElementById("inputPound").value="";
    document.getElementById("inputOunce").value="";
  }

  function microgramConverter(num) {
    num = parseFloat(num);
    ///////////////////////////////////////////
    document.getElementById("outputKilogram").innerHTML=(num / 1000000000);
    document.getElementById("outputGram").innerHTML=(num / 1000000);
    document.getElementById("outputMilligram").innerHTML=(num / 1000);
    document.getElementById("outputTonne").innerHTML=(num / 1000000000000);
    document.getElementById("outputStone").innerHTML=(num / 6.35e+9);
    document.getElementById("outputPound").innerHTML=(num / 4.536e+8);
    document.getElementById("outputOunce").innerHTML=(num / 2.835e+7);
    ///////////////////////////////////////////
    document.getElementById("outputMicrogram").innerHTML=num;
    document.getElementById("inputGram").value="";
    document.getElementById("inputMilligram").value="";
    document.getElementById("inputKilogram").value="";
    document.getElementById("inputTonne").value="";
    document.getElementById("inputStone").value="";
    document.getElementById("inputPound").value="";
    document.getElementById("inputOunce").value="";
  }

  function tonneConverter(num) {
    num = parseFloat(num);
    ///////////////////////////////////////////
    document.getElementById("outputKilogram").innerHTML=(num * 1000);
    document.getElementById("outputGram").innerHTML=(num * 1000000);
    document.getElementById("outputMilligram").innerHTML=(num / 1000000000);
    document.getElementById("outputMicrogram").innerHTML=(num * 1000000000000);
    document.getElementById("outputStone").innerHTML=(num * 157);
    document.getElementById("outputPound").innerHTML=(num * 2205);
    document.getElementById("outputOunce").innerHTML=(num * 35274);
    ///////////////////////////////////////////
    document.getElementById("outputTonne").innerHTML=num;
    document.getElementById("inputGram").value="";
    document.getElementById("inputMilligram").value="";
    document.getElementById("inputMicrogram").value="";
    document.getElementById("inputKilogram").value="";
    document.getElementById("inputStone").value="";
    document.getElementById("inputPound").value="";
    document.getElementById("inputOunce").value="";
  }

  function stoneConverter(num) {
    num = parseFloat(num);
    ///////////////////////////////////////////
    document.getElementById("outputKilogram").innerHTML=(num * 6.35);
    document.getElementById("outputGram").innerHTML=(num * 6350);
    document.getElementById("outputMilligram").innerHTML=(num * 6.35e+6);
    document.getElementById("outputMicrogram").innerHTML=(num * 6.35e+9);
    document.getElementById("outputTonne").innerHTML=(num / 157);
    document.getElementById("outputPound").innerHTML=(num * 14);
    document.getElementById("outputOunce").innerHTML=(num * 224);
    ///////////////////////////////////////////
    document.getElementById("outputStone").innerHTML=num;
    document.getElementById("inputGram").value="";
    document.getElementById("inputMilligram").value="";
    document.getElementById("inputMicrogram").value="";
    document.getElementById("inputTonne").value="";
    document.getElementById("inputKilogram").value="";
    document.getElementById("inputPound").value="";
    document.getElementById("inputOunce").value="";
  }

  function poundConverter(num) {
    num = parseFloat(num);
    ///////////////////////////////////////////
    document.getElementById("outputKilogram").innerHTML=(num / 2.205);
    document.getElementById("outputGram").innerHTML=(num * 454);
    document.getElementById("outputMilligram").innerHTML=(num * 453592);
    document.getElementById("outputMicrogram").innerHTML=(num * 4.536e+8);
    document.getElementById("outputTonne").innerHTML=(num / 2205);
    document.getElementById("outputStone").innerHTML=(num / 14);
    document.getElementById("outputOunce").innerHTML=(num / 16);
    ///////////////////////////////////////////
    document.getElementById("outputPound").innerHTML=num;
    document.getElementById("inputGram").value="";
    document.getElementById("inputMilligram").value="";
    document.getElementById("inputMicrogram").value="";
    document.getElementById("inputTonne").value="";
    document.getElementById("inputStone").value="";
    document.getElementById("inputKilogram").value="";
    document.getElementById("inputOunce").value="";
  }

  function ounceConverter(num) {
    num = parseFloat(num);
    ///////////////////////////////////////////
    document.getElementById("outputKilogram").innerHTML=(num / 35.274);
    document.getElementById("outputGram").innerHTML=(num * 28.35);
    document.getElementById("outputMilligram").innerHTML=(num * 28350);
    document.getElementById("outputMicrogram").innerHTML=(num * 2.835e+7);
    document.getElementById("outputTonne").innerHTML=(num / 35274);
    document.getElementById("outputStone").innerHTML=(num / 224);
    document.getElementById("outputPound").innerHTML=(num / 16);
    ///////////////////////////////////////////
    document.getElementById("outputOunce").innerHTML=num;
    document.getElementById("inputGram").value="";
    document.getElementById("inputMilligram").value="";
    document.getElementById("inputMicrogram").value="";
    document.getElementById("inputTonne").value="";
    document.getElementById("inputStone").value="";
    document.getElementById("inputPound").value="";
    document.getElementById("inputKilogram").value="";
  }

      </script>
<br>
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