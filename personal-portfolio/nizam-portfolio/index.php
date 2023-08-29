<!DOCTYPE html>
<html>

<head>
  <title>nizam web</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <style>
    body,
    html {
      height: 100%;
      font-family: "Inconsolata", sans-serif;
      background: url('digitel.jpg');
    }

    .bgimg {
      background-position: center;
      background-size: cover;
      background: url('a.jpg');
      min-height: 75%;


    }

    .ABOUT {
      background: url('digitel.jpg');
      padding: 70px;

    }
  </style>
</head>

<body>

<?php include "../back-button.html" ?>
  <!-- Links (sit on top) -->
  <div class="w3-top">
    <div class="w3-row w3-padding w3-black">
      <div class="w3-col s3">
        <a href="#" class="w3-button w3-block w3-black">LAMAN UTAMA</a>
      </div>
      <div class="w3-col s3">
        <a href="#ABOUT" class="w3-button w3-block w3-black">TENTANG SAYA</a>
      </div>
      <div class="w3-col s3">
        <a href="#CALCULATOR" class="w3-button w3-block w3-black">MESIN KIRA-KIRA</a>
      </div>
      <div class="w3-col s3">
        <a href="#TIMER" class="w3-button w3-block w3-black">MESIN KIRA MASA</a>
      </div>
    </div>
  </div>

  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-small w3-hide-small ">
      <span class="w3-tag">MOHAMAD HAZANIZAM BIN ABDUL LATIF</span>
    </div>
    <div class="w3-container w3-left w3-margin-top w3-border-0">
      <P>..</P>
      <img src="as.jpg" class="w3-image" style="width: 30%; padding-top: 18px;">
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
      <span class="w3-text-white">PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT</span>
    </div>



  </header>

  <!-- Add a background color and large text to the whole page -->
  <div class="">

    <!-- TENTANG SAYA Container -->
    <div class="w3-container " id="ABOUT"></div>
    <div class="card" style="background-color: transparent;">
      <div class="card-body">
        <div class="w3-content " style="max-width:700px">
          <h5 class="w3-center w3-padding-top-64"><span class="w3-tag w3-wide">TENTANG SAYA</span></h5>
        </div>
        <div class="w3-container w3-text-white w3-center">
          <p>NAMA: MOHAMAD HAZANIZAM BIN ABDUL LATIF</p>
          <P>ALAMAT: LOT 5714 FASA 2 KAMPUNG WARISAN JEPAK 97000 BINTULU,SARAWAK</P>
          <P>WARGANEGARA : WARGANEGARA MALAYSIA</P>
          <P>TARIKH LAHIR: 17 OKTOBER 1988</P>
          <P>TEMPAT BERKERJA:PEJABAT PENDIDIKAN DAERAH BINTULU</P>
          <P>JAWATAN:PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT</P>
        </div>
      </div>
    </div>
  </div>
  <div class="w3-container ">
    <div class="row">
      <div class="col">
        <p class="w3-center w3-padding-30 w3-text-yellow"><b><i
              class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>KEPAKARAN</b></p>
        <p class="w3-center w3-text-white">APLIKASI KOMPUTER</p>
        <div class="w3-light-grey w3-round-xlarge w3-small">
          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">80%</div>
        </div>
        <p class="w3-center w3-text-white">PEKAKASAN KOMPUTER</p>
        <div class="w3-light-grey w3-round-xlarge w3-small">
          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
            <div class="w3-center w3-text-white">90%</div>
          </div>
        </div>
        <p class="w3-center w3-text-white ">FOTOGERAFI</p>
        <div class="w3-light-grey w3-round-xlarge w3-small">
          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">50%</div>
        </div>
        <p class="w3-center w3-text-white">VIDEOGERAFI</p>
        <div class="w3-light-grey w3-round-xlarge w3-small">
          <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">65%</div>
        </div>
      </div>
      <div class="col">
        <p class="w3-center w3-padding-30 w3-text-yellow"><b><i
              class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>PENDIDIKAN</b></p>
        <p class="w3-center w3-text-white">SIJIL PELAJARAN MALAYSIA</p>
        <p class="w3-center w3-text-white">SIJIL TEKNOLOGI MAKLUMAT POLITEKNIK KUCHING SARAWAK</p>
      </div>
    </div>

    <div class="w3-container">

    </div>
  </div>



  <!-- CALCULATOR Container -->
  <div class="w3-container" id="CALCULATOR"></div>
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">MESIN KIRA-KIRA</span></h5>
  </div>
  </div>
  <style>
    table {
      border: 1px solid black;
      margin-left: auto;
      margin-right: auto;
      background-color: #5b5a5a;
    }
  </style>
  </head>

  <body>
    <table>
      <tr>
        <td colspan="7">
          <input type="text" id="display" value="" />
        </td>
      </tr>
      <tr>
        <td>
          <input id="btnAns" type="button" name="operator" value="Ans" />
        </td>
        <td>
          <input id="btnPi" type="button" name="operator" value="π" onclick="set('3.14')" />
        </td>
        <td>
          <input id="btnE" type="button" name="operator" value="e" />
        </td>
        <td>
          <input id="btnOParen" type="button" name="operator" value="(" onclick="set('(')" />
        </td>
        <td>
          <input id="btnCParen" type="button" name="operator" value=")" onclick="set(')')" />
        </td>
        <td>
          <input id="btnPcnt" type="button" name="operator" value="%" />
        </td>
        <td>
          <input id="btnCE" type="button" name="operator" value="CE" onclick="ce()" />
        </td>
      </tr>
      <tr>
        <td>
          <input id="btnRad" type="button" name="operator" value="rad" />
        </td>
        <td>
          <input id="btnDeg" type="button" name="operator" value="deg" />
        </td>
        <td>
          <input id="btnFact" type="button" name="operator" value="x!" />
        </td>
        <td>
          <input id="btn7" type="button" value="7" onclick="set('7')" />
        </td>
        <td>
          <input id="btn8" type="button" value="8" onclick="set('8')" />
        </td>
        <td>
          <input id="btn9" type="button" value="9" onclick="set('9')" />
        </td>
        <td>
          <input id="btnDiv" type="button" name="operator" value="÷" onclick="set('/')" />
        </td>
      </tr>
      <tr>
        <td>
          <input id="btnSineInv" type="button" name="operator" value="asin" onclick="asine()" />
        </td>
        <td>
          <input id="btnSine" type="button" name="operator" value="sin" onclick="sine()" />
        </td>
        <td>
          <input id="btnLN" type="button" name="operator" value="ln" />
        </td>
        <td>
          <input id="btn4" type="button" value="4" onclick="set('4')" />
        </td>
        <td>
          <input id="btn5" type="button" value="5" onclick="set('5')" />
        </td>
        <td>
          <input id="btn6" type="button" value="6" onclick="set('6')" />
        </td>
        <td>
          <input id="btnMul" type="button" name="operator" value="×" onclick="set('*')" />
        </td>
      </tr>
      <tr>
        <td>
          <input id="btnCosInv" type="button" name="operator" value="acos" onclick="acosine()" />
        </td>
        <td>
          <input id="btnCos" type="button" name="operator" value="cos" onclick="cosine()" />
        </td>
        <td>
          <input id="btnLog" type="button" name="operator" value="log" onclick="fLog()" />
        </td>
        <td>
          <input id="btn1" type="button" value="1" onclick="set('1')" />
        </td>
        <td>
          <input id="btn2" type="button" value="2" onclick="set('2')" />
        </td>
        <td>
          <input id="btn3" type="button" value="3" onclick="set('3')" />
        </td>
        <td>
          <input id="btnSub" type="button" name="operator" value="-" onclick="set('-')" />
        </td>
      </tr>
      <tr>
        <td>
          <input id="btnTanInv" type="button" name="operator" value="atan" onclick="atangent()" />
        </td>
        <td>
          <input id="btnTan" type="button" name="operator" value="tan" onclick="tangent()" />
        </td>
        <td>
          <input id="btnSqrt" type="button" name="operator" value="√" onclick="sqrRoot()" />
        </td>
        <td>
          <input id="btn0" type="button" value="0" onclick="set('0')" />
        </td>
        <td>
          <input id="btnPeriod" type="button" value="." />
        </td>
        <td>
          <input id="btnEqual" type="button" name="equal" value="=" onclick="answer()" />
        </td>
        <td>
          <input id="btnAdd" type="button" name="operator" value="+" onclick="set('+')" />
        </td>
    </table>
    <script src="js/index.js"></script>
  </body>

  <style>
    table {
      width: 50%;
      height: 300px;
      border-collapse: collapse;
      font-family: arial, sans-serif;
    }

    td {
      padding: 5px;
      text-align: center;
    }

    input[type=text] {
      width: 100%;
      height: 50px;
      text-align: right;
      font-family: monospace;
      font-size: 3em;
      font-weight: bold;
      border-color: gray;
      border-width: 1px;
      border-style: solid;
      opacity: 0.5;
    }

    input[type=text]:hover {
      opacity: 1;
    }

    input[type=button] {
      opacity: 0.8;
      background-color: #c6c6c6;
      background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
      border: 1px solid #dedede;
      color: #444;
      height: 45px;
      width: 65px;
      text-align: center;
      font-size: 1.2em;
      font-weight: normal;
    }

    input[type=button]:hover {
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
      background-image: linear-gradient(top, #f1f1f1, #f1f1f1);
      opacity: 1;
      border: 1px solid #c6c6c6;
      color: #222;
      cursor: pointer;
    }

    input[name=equal] {
      background-color: #c6c6c6;
      background-image: linear-gradient(top, #4d90fe, #4787ed);
      border: 1px solid #2f5bb7;
      color: #fefefe;
    }

    input[name=equal]:hover {
      background-color: #4787ed;
      background-image: linear-gradient(top, #4d90fe, #357ae8);
      border: 1px solid #2f5bb7;
      color: #fefefe;
    }

    input[name=operator] {
      border: 1px solid #c6c6c6;
      background-color: #d6d6d6;
    }
  </style>

  <script>
    function set(op) {

      document.getElementById("display").value += op;

    }

    function sqrRoot() {
      var tempStore = document.getElementById("display").value;
      document.getElementById("display").value = eval(Math.sqrt(tempStore));

    }

    function asine() {
      var tempStore = document.getElementById("display").value;
      document.getElementById("display").value = eval(Math.asin(tempStore));

    }

    function acosine() {
      var tempStore = document.getElementById("display").value;
      document.getElementById("display").value = eval(Math.acos(tempStore));

    }

    function fLog() {
      var tempStore = document.getElementById("display").value;
      document.getElementById("display").value = eval(Math.log(tempStore));

    }

    function atangent() {
      var tempStore = document.getElementById("display").value;
      document.getElementById("display").value = eval(Math.atan(tempStore));

    }

    function tangent() {
      var tempStore = document.getElementById("display").value;
      document.getElementById("display").value = eval(Math.tan(tempStore));

    }

    function cosine() {
      var tempStore = document.getElementById("display").value;
      document.getElementById("display").value = eval(Math.cos(tempStore));

    }

    function sine() {
      var tempStore = document.getElementById("display").value;
      document.getElementById("display").value = eval(Math.sin(tempStore));

    }

    function setOp() {
      alert("gf");
      //document.getElementById("display").value += op;
    }

    function answer() {
      var Exp = document.getElementById("display");
      var Exp1 = Exp.value;
      var result = eval(Exp1);
      //alert(result);
      Exp.value = result;
    }

    function ce() {

      var elem = document.getElementById("display").value;
      var length = elem.length;
      length--;
      var a = elem.substr(0, length);

      // document.getElementById("display").value="";
      //for(var i=0;i<length-1;i++)
      //{
      document.getElementById("display").value = a;
      // }
      //alert(length);
    }
  </script>
  <br>
  <div class="w3-container w3-center w3-text-white">
    <p>BERGERAK MENUJU DIGITALISASI</p>
    <img src="K.jpg" class="w3-image" style="width: 50%">
  </div>


  <!-- timer Container -->
  <div class="w3-container" id="TIMER" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-top-64"><span class="w3-tag w3-wide">MESIN KIRA MASA</span></h5>
    </div>
    </style>
    <style>
      body {
        font-family: cursive;
      }

      .glow {
        font-size: 80px;
        color: #fff;
        text-align: center;
        animation: glow 1s ease-in-out infinite alternate;
      }

      h1 {
        animation-duration: inherit;

      }


      @-webkit-keyframes glow {
        from {
          text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
        }

        to {
          text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
        }
      }
    </style>
    <style>
      div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: center;
        width: 180px;
      }
    </style>
    <style>
      table tr td.days,
      table tr td.hours,
      table tr td.minutes,
      table tr td.seconds {
        background-color: rgb(249, 248, 248);
        width: 300px;
        border: 15px solid rgba(7, 7, 7, 0.505);
        padding: auto;
        margin: auto;
        text-align: center;
        font-size: 60px;
      }
    </style>
    </head>

    <table>
      <tr>
        <td class="days" id="days">
        </td>
        <td class="hours" id="hours"></td>
        <td class="minutes" id="minutes"></td>
        <td class="seconds" id="seconds"></td>
      </tr>
    </table>
    <div id="demo"></div>
    <!-- End center Column -->



    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

      // Update the count down every 1 second
      var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        // document.getElementById("demo").innerHTML = "<div class='days'>" + days + "days </div> <div class='hour'> " + hours + "h </div>"
        // + minutes + "m " + seconds + "s ";
        document.getElementById('days').innerHTML = days + "days";
        document.getElementById('hours').innerHTML = hours + "hours";
        document.getElementById('minutes').innerHTML = minutes + "minutes";
        document.getElementById('seconds').innerHTML = seconds + "seconds";
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
    </script>

    <br>
    <div class="w3-container w3-center">

      <img src="L.jpg" class="w3-image" style="width:50%">
    </div>


    <!-- end Container -->
  </div>

  <footer class="w3-container w3-black w3-center w3-margin-top">
    <p> buka media sosial</p>

    <p>Di Cipta oleh <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">NiZam.HenseM</a></p>
  </footer>


</body>

</html>