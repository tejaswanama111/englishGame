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
    <title>Area Calculator</title>

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
  <?php require '/MGGS/partials/_header.php';?>

    <h1 class="text-center mb-5">Area Converter</h1>
    <!--style="background:skyblue"-->
    <div class="text-center mt-3 container mb-5">
    
    <h4>
      <label>Square Kilometer</label>
      <input id="inputSKilometer" type="number" placeholder="Square Kilometer" oninput="SquareKilometer(this.value)">
      = <span id="outputSKilometer"></span></h4>
  <h4>
    <label>Square Meter</label>
    <input id="inputSMeter" type="number" placeholder="Square Meter" oninput="SquareMeter(this.value)">
    = <span id="outputSMeter"></span></h4>
  <h4>
    <label>Square Mile</label>
    <input id="inputSMile" type="number" placeholder="Square Mile" oninput="SquareMile(this.value)">
    = <span id="outputSMile"></span></h4>
    <h4>
        <label>Square Yard</label>
        <input id="inputSYard" type="number" placeholder="Square Yard" oninput="SquareYard(this.value)">
        = <span id="outputSYard"></span></h4>
    <h4>
        <label>Square Foot</label>
        <input id="inputSFoot" type="number" placeholder="Square Foot" oninput="SquareFoot(this.value)">
        = <span id="outputSFoot"></span></h4>
    <h4>
        <label>Square Inch</label>
        <input id="inputSInch" type="number" placeholder="Square Inch" oninput="SquareInch(this.value)">
        = <span id="outputSInch"></span></h4>
    <h4>
        <label>Hectare</label>
        <input id="inputHectare" type="number" placeholder="Hectare" oninput="Hectare(this.value)">
        = <span id="outputHectare"></span></h4>
    <h4>
        <label>Acre</label>
        <input id="inputAcre" type="number" placeholder="Acre" oninput="Acre(this.value)">
        = <span id="outputAcre"></span></h4>
    </div><br>
      
      <script>
      function SquareKilometer(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputSMeter").innerHTML=(num * 1000000);
        document.getElementById("outputSMile").innerHTML=(num / 2.59);
        document.getElementById("outputSYard").innerHTML=(num * 1.196000000);
        document.getElementById("outputSFoot").innerHTML=(num * 1.0760000000);
        document.getElementById("outputSInch").innerHTML=(num * 1.55000000000);
        document.getElementById("outputHectare").innerHTML=(num * 100);
        document.getElementById("outputAcre").innerHTML=(num * 247.105);

        //Blank
        document.getElementById("outputSKilometer").innerHTML=num;
        document.getElementById("inputSMeter").value="";
        document.getElementById("inputSMile").value="";
        document.getElementById("inputSYard").value="";
        document.getElementById("inputSFoot").value="";
        document.getElementById("inputSInch").value="";
        document.getElementById("inputHectare").value="";
        document.getElementById("inputAcre").value="";
      }

      function SquareMeter(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputSKilometer").innerHTML=(num / 1000000);
        document.getElementById("outputSMile").innerHTML=(num / 2.59e+6);
        document.getElementById("outputSYard").innerHTML=(num * 1.196);
        document.getElementById("outputSFoot").innerHTML=(num * 10.764);
        document.getElementById("outputSInch").innerHTML=(num * 1550);
        document.getElementById("outputHectare").innerHTML=(num / 10000);
        document.getElementById("outputAcre").innerHTML=(num / 4047);

        //Maintainence
        document.getElementById("outputSMeter").innerHTML=num;
        document.getElementById("inputSKilometer").value="";
        document.getElementById("inputSMile").value="";
        document.getElementById("inputSYard").value="";
        document.getElementById("inputSFoot").value="";
        document.getElementById("inputSInch").value="";
        document.getElementById("inputHectare").value="";
        document.getElementById("inputAcre").value="";
      }

      function SquareMile(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputSKilometer").innerHTML=(num * 2.58999);
        document.getElementById("outputSMeter").innerHTML=(num * 2.59e+6);
        document.getElementById("outputSYard").innerHTML=(num * 3.098000000);
        document.getElementById("outputSFoot").innerHTML=(num * 2.7880000000);
        document.getElementById("outputSInch").innerHTML=(num * 4.014000000000);
        document.getElementById("outputHectare").innerHTML=(num * 258.999);
        document.getElementById("outputAcre").innerHTML=(num * 640);

        //Maintainence
        document.getElementById("outputSMile").innerHTML=num;
        document.getElementById("inputSKilometer").value="";
        document.getElementById("inputSMeter").value="";
        document.getElementById("inputSYard").value="";
        document.getElementById("inputSFoot").value="";
        document.getElementById("inputSInch").value="";
        document.getElementById("inputHectare").value="";
        document.getElementById("inputAcre").value="";
      }

      function SquareYard(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputSKilometer").innerHTML=(num / 1.96e+6);
        document.getElementById("outputSMeter").innerHTML=(num / 1.196);
        document.getElementById("outputSMile").innerHTML=(num * 3.098e+6);
        document.getElementById("outputSFoot").innerHTML=(num * 9);
        document.getElementById("outputSInch").innerHTML=(num * 1296);
        document.getElementById("outputHectare").innerHTML=(num / 11960);
        document.getElementById("outputAcre").innerHTML=(num / 4840);

        //Maintainence
        document.getElementById("outputSYard").innerHTML=num;
        document.getElementById("inputSKilometer").value="";
        document.getElementById("inputSMeter").value="";
        document.getElementById("inputSMile").value="";
        document.getElementById("inputSFoot").value="";
        document.getElementById("inputSInch").value="";
        document.getElementById("inputHectare").value="";
        document.getElementById("inputAcre").value="";
      }

      function SquareFoot(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputSKilometer").innerHTML=(num / 1.076e+7);
        document.getElementById("outputSMeter").innerHTML=(num / 10.764);
        document.getElementById("outputSMile").innerHTML=(num / 2.788e+7);
        document.getElementById("outputSYard").innerHTML=(num / 9);
        document.getElementById("outputSInch").innerHTML=(num * 144);
        document.getElementById("outputHectare").innerHTML=(num / 1.196e+6);
        document.getElementById("outputAcre").innerHTML=(num / 43560);

        //Maintainence
        document.getElementById("outputSFoot").innerHTML=num;
        document.getElementById("inputSKilometer").value="";
        document.getElementById("inputSMeter").value="";
        document.getElementById("inputSMile").value="";
        document.getElementById("inputSYard").value="";
        document.getElementById("inputSInch").value="";
        document.getElementById("inputHectare").value="";
        document.getElementById("inputAcre").value="";
      }

      function SquareInch(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputSKilometer").innerHTML=(num / 1.55e+9);
        document.getElementById("outputSMeter").innerHTML=(num / 1550);
        document.getElementById("outputSMile").innerHTML=(num / 4.014e+9);
        document.getElementById("outputSYard").innerHTML=(num / 1296);
        document.getElementById("outputSFoot").innerHTML=(num / 144);
        document.getElementById("outputHectare").innerHTML=(num / 1.55e+7);
        document.getElementById("outputAcre").innerHTML=(num / 6.273e+6);

        //Maintainence
        document.getElementById("outputSInch").innerHTML=num;
        document.getElementById("inputSKilometer").value="";
        document.getElementById("inputSMeter").value="";
        document.getElementById("inputSMile").value="";
        document.getElementById("inputSYard").value="";
        document.getElementById("inputSFoot").value="";
        document.getElementById("inputHectare").value="";
        document.getElementById("inputAcre").value="";
      }

      function Hectare(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputSKilometer").innerHTML=(num / 100);
        document.getElementById("outputSMeter").innerHTML=(num * 10000);
        document.getElementById("outputSMile").innerHTML=(num / 259);
        document.getElementById("outputSYard").innerHTML=(num * 11960);
        document.getElementById("outputSFoot").innerHTML=(num * 107639);
        document.getElementById("outputSInch").innerHTML=(num * 1.55+7);
        document.getElementById("outputAcre").innerHTML=(num * 2.471);

        //Maintainence
        document.getElementById("outputHectare").innerHTML=num;
        document.getElementById("inputSKilometer").value="";
        document.getElementById("inputSMeter").value="";
        document.getElementById("inputSMile").value="";
        document.getElementById("inputSYard").value="";
        document.getElementById("inputSFoot").value="";
        document.getElementById("inputSInch").value="";
        document.getElementById("inputAcre").value="";
      }

      function Acre(num) {
        num = parseFloat(num);
        //Formula
        document.getElementById("outputSKilometer").innerHTML=(num / 247);
        document.getElementById("outputSMeter").innerHTML=(num * 4047);
        document.getElementById("outputSMile").innerHTML=(num / 640);
        document.getElementById("outputSYard").innerHTML=(num * 4840);
        document.getElementById("outputSFoot").innerHTML=(num * 43560);
        document.getElementById("outputSInch").innerHTML=(num * 6.273e+6);
        document.getElementById("outputHectare").innerHTML=(num / 2.471);

        //Maintainence
        document.getElementById("outputAcre").innerHTML=num;
        document.getElementById("inputSKilometer").value="";
        document.getElementById("inputSMeter").value="";
        document.getElementById("inputSMile").value="";
        document.getElementById("inputSYard").value="";
        document.getElementById("inputSFoot").value="";
        document.getElementById("inputSInch").value="";
        document.getElementById("inputHectare").value="";
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