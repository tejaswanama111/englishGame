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
    <title>Temperature Converter</title>

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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">Link</a>
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

    <h1 class="text-center mb-5">Temperature Converter</h1>
    <!--style="background:skyblue"-->
    <div class="text-center mt-3 container mb-5">
    <h4>
        <label>Fahrenheit</label>
        <input id="inputFahrenheit" type="number" placeholder="Fahrenheit" oninput="temperatureConverter(this.value)">
    = <span id="outputFahrenheit"></span>°F</h4>
    <h4>
      <label>Celsius</label>
      <input id="inputCelsius" type="number" placeholder="Celsius" oninput="celsiusToTemperature(this.value)">
      = <span id="outputCelsius"></span>°C </h4>
  <h4>
    <label>Kelvin</label>
    <input id="inputKelvin" type="number" placeholder="Kelvin" oninput="kelvinToTemperature(this.value)">
    = <span id="outputKelvin"></span>K</h4>
      <!-- <h4>Fahrenheit: <span id="outputFahrenheit"></span>°F</h4>
      <h4>Celsius: <span id="outputCelsius"></span>°C</h4>
      <h4>Kelvin: <span id="outputKelvin"></span>K</h4> -->
    </div>
      
      <script>
      function temperatureConverter(valNum) {
        valNum = parseFloat(valNum);
        document.getElementById("outputCelsius").innerHTML=(valNum-32)/1.8;
        document.getElementById("outputKelvin").innerHTML=(valNum-32)/1.8 + 273.15;
        document.getElementById("outputFahrenheit").innerHTML=0;
        document.getElementById("inputCelsius").value="";
        document.getElementById("inputKelvin").value="";
      }
      function celsiusToTemperature(num){
        num = parseFloat(num);
        document.getElementById("outputFahrenheit").innerHTML=(num*1.8) + 32;
        document.getElementById("outputKelvin").innerHTML=(num) + 273.15;
        document.getElementById("outputCelsius").innerHTML=0;
        document.getElementById("inputFahrenheit").value="";
        document.getElementById("inputKelvin").value="";
      }
      function kelvinToTemperature(num){
        num = parseFloat(num);
        document.getElementById("outputCelsius").innerHTML=(num) - 273.15;
        document.getElementById("outputFahrenheit").innerHTML=(num - 273.15) * 1.8 + 32;
        document.getElementById("outputKelvin").innerHTML=0;
        document.getElementById("inputCelsius").value="";
        document.getElementById("inputFahrenheit").value="";
      }

//       function myFunction(x) {
//   if (x.matches) { // If media query matches
//     document.body.style.backgroundColor = "pink";
//   } 
//   else{
//     document.body.style.backgroundColor = "white";
//   }
// }

// var x = window.matchMedia("(max-width: 770px)")
// myFunction(x)
// x.addListener(myFunction)
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