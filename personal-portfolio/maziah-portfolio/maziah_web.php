<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
</head>
<body class="w3-grey">

<?php include "../back-button.html" ?>
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- right Column -->
    <div class="w3-third">
      <div class="w3-white w3-text-black w3-card-4">
        <div class="w3-display-container w3-center">
          <img src="me.jpg" style="width:85%" alt="Gambar">
          <div class="w3-display-bottomright w3-container w3-text-red">
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-blue"></i>Juruteknik Komputer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-blue"></i>Bintulu, Sarawak</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-blue"></i>marziah.wanseh@moe.gov.my</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-blue"></i>0138484841</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-blue"></i>Hobi</b></p>
          <p>Nanam Pokok Bunga</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:90%">90%</div>
          </div>
          <p>Membeli Belah</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Memasak</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-blue" style="width:75%">75%</div>
          </div>
          <br>
          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-blue"></i>Bahasa Di Pandey</b></p>
          <p>Melayu</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-blue" style="height:24px;width:100%"></div>
          </div>
          <p>Melanau</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-blue" style="height:24px;width:55%"></div>
          </div>
          <p>Vaie</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-blue" style="height:24px;width:25%"></div>
          </div>
          <p>Vaie lavang</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-blue" style="height:24px;width:15%"></div>
          </div>

          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-black"></i>Pengalaman Kerja </h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Juruteknik Komputer</b></h5>
              <p>Berkhidmat selama 14 tahun di SMK Baru Bintulu, dan baruk setaun jagung di PPD Bintulu.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Alamat Rumah dan Alamat Tetap</b></h5>
          <p>A-3-3 Kuarters Pendidikan Jalan Tanjung Kidurong, 97000 Bintulu Sarawak dan Kampung Jemoreng Matu, Sarawak.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Tarikh Berkhidmat Di Jawatan Sekarang</b></h5>
          <p> 29 Jun 2009. </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-black"></i>Kerja rumah</h2>
        <div class="w3-container">
          <h6 class="w3-text-black"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Kalkulator</h6>
           <hr>
        </div>
        <head>
          <meta charset="UTF-8">
          <title>Kalkulator</title>
          <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
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
      margin-left: auto;
      margin-right: auto;
      border: 1px solid black;
      background-color: #3079ed;
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
      background-color: #f5f5f5;
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
      background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
      opacity: 1;
      border: 1px solid #c6c6c6;
      color: #222;
      cursor: pointer;
      }
      input[name=equal] {
      background-color: #4d90fe;
      background-image: linear-gradient(top, #4d90fe, #4787ed);
      border: 1px solid #3079ed;
      color: #fefefe;
      }
      input[name=equal]:hover {
      background-color: #4d90fe;
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

        <div class="w3-container">
          <h6 class="w3-text-black"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Kira Masa</h6>
          <hr>
        </div>
      </style><style>
        body {
          font-family:cursive;
        }
        
        .glow {
          font-size: 80px;
          color: #fff;
          text-align: center;
          animation: glow 1s ease-in-out infinite alternate;
        }
        h1{animation-duration: inherit;
        
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
          float:center;
          width: 180px;
        }
        </style>
        <style>
        
        table tr td.dy,
        table tr td.hr,
        table tr td.mts,
        table tr td.scn
        {
             background-color: rgb(235, 236, 238);
               width: 300px;
              border: 40px solid rgba(14, 111, 190, 0.505);
              padding: auto;
              margin: auto; 
              text-align: center;
              font-size: 60px;
              }
        
        </style>
        </head>
              
            <table>
              <tr>
                <td class="dy" id="dy">
                </td>
                <td class="hr" id="hr"></td>
                <td class="mts" id="mts"></td>
                <td class="scn" id="scn"></td>
              </tr>
            </table>
        <div id="demo" ></div>
        
        <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Oct 5, 2023 15:37:25").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
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
          document.getElementById('dy').innerHTML = days + "dy";
          document.getElementById('hr').innerHTML = hours + "hr";
          document.getElementById('mts').innerHTML = minutes + "mts";
          document.getElementById('scn').innerHTML = seconds + "scn"; 
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
        </script>
        
        </body>
      
      </body>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-blue w3-center w3-margin-top">
  <p>Sekian, Copy Paste Tukar Sana Sini</p>
</footer>

</body>
</html>
