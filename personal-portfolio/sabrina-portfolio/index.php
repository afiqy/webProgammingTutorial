<!DOCTYPE html>
<html>
  <h1 class="glow">COUNTDOWN</h1>
  
</body>
</style>
</head>
<body>
     
	<?php include "../back-button.html" ?>   
  <p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 31, 2023 15:37:25").getTime();

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
document.getElementById("demo").innerHTML = days + "d " + hours + "h "
+ minutes + "m " + seconds + "s ";
 
// If the count down is over, write some text 
if (distance < 0) {
 clearInterval(x);
 document.getElementById("demo").innerHTML = "EXPIRED";
}
}, 1000);
</script>

<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="/images.jpg" style="width:80%" alt="images.pi.jpg">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Sebarina Siji</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Juruteknik Komputer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Bintulu,Sarawak</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>sebarina.siji@moe.gov.my</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>0128707605</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <p>Canva</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">40%</div>
          </div>
          <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">
              <div class="w3-center w3-text-white">40%</div>
            </div>
          </div>
          <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:45%">45%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p>Melayu</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Melanau</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Penolong Pegawai Teknologi Maklumat/FA29</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2016 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>SK Orang Kaya Mohammad, Bintulu.</p>
          <p>PPD Bintulu.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Juruteknik Komputer /FT19</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2009 -2016</h6>
          <p>SK Orang Kaya Mohammad, Bintulu.</p>
          <hr>
        </div>
        
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Kolej Komuniti Mas Gading</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2017-2018</h6>
          <p>Sijil Teknologi Maklumat</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>SMK Bintulu</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2003 - 2004</h6>
          <p>SPM</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>SMK Baru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2000 - 2002</h6>
          <p>PMR</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>SK Kampung Baru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1994 - 1999</h6>
          <p>UPSR</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
<title>Scientific Calculator using HTML, CSS and Js</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.js" integrity="sha512-BbVEDjbqdN3Eow8+empLMrJlxXRj5nEitiCAK5A1pUr66+jLVejo3PmjIaucRnjlB0P9R3rBUs3g5jXc8ti+fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    table {
        border: 1px solid rgb(225, 33, 213);
        margin-left: auto;
        margin-right: auto;
    }
    
    input[type="button"] {
        width: 100%;
        padding: 20px 40px;
        background-color: rgb(19, 20, 20);
        color: rgb(189, 236, 189);
        font-size: 24px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
    }
    
    input[type="text"] {
        padding: 20px 240px;
        font-size: 24px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        border: 2px solid rgb(238, 10, 10);
        text-align: left;
    }
    
    display {
        text-align: left;
    }
</style>

<script>
    function backspace() {
        let display = document.getElementById("display");
        display.value = display.value.slice(0, -1);
    }
   
    function calculate() {
        let display = document.getElementById("display");
        let expression = display.value;
        let result;
    
        try {
            // Convert trigonometric function inputs from degrees to radians
            expression = expression.replace(/sin\(/g, 'sin(' + Math.PI / 180 + '*');
            expression = expression.replace(/cos\(/g, 'cos(' + Math.PI / 180 + '*');
            expression = expression.replace(/tan\(/g, 'tan(' + Math.PI / 180 + '*');
    
            result = math.evaluate(expression);
            display.value = result;
        } catch (error) {
            display.value = "Error";
        }
    }
    
    function squareRoot() {
        let display = document.getElementById("display");
        display.value += "sqrt(";
    }
    
    function base10Log() {
        let display = document.getElementById("display");
        display.value += "log(";
    }
    
    function pi() {
        let display = document.getElementById("display");
        display.value += "pi";
    }
    
    function e() {
        let display = document.getElementById("display");
        display.value += "e";
    }
    
    function power() {
        let display = document.getElementById("display");
        display.value += "^(";
    }
</script>
</head>

<body>
<h1 style="color: rgb(0, 100, 128); text-align: center;">Scientific Calculator</h1>
<form>
    <table>
        <tr>
            <td colspan="6">
                <input id="display" type="text">
            </td>
        </tr>
        <tr>
            <td><input type="button" value="1" onclick="display.value += '1'"></td>
            <td><input type="button" value="2" onclick="display.value += '2'"></td>
            <td><input type="button" value="3" onclick="display.value += '3'"></td>
            <td><input type="button" value="C" onclick="display.value = ''"></td>
            <td><input type="button" value="&#9003;" onclick="backspace()"></td>
            <td><input type="button" value="=" onclick="calculate()"></td>
        </tr>
        <tr>
            <td><input type="button" value="4" onclick="display.value += '4'"></td>
            <td><input type="button" value="5" onclick="display.value += '5'"></td>
            <td><input type="button" value="6" onclick="display.value += '6'"></td>
            <td><input type="button" value="-" onclick="display.value += '-'"></td>
            <td><input type="button" value="%" onclick="display.value += '%'"></td>
            <td><input type="button" value="cos(" onclick="display.value += 'cos('"></td>
        </tr>
        <tr>
            <td><input type="button" value="7" onclick="display.value += '7'"></td>
            <td><input type="button" value="8" onclick="display.value += '8'"></td>
            <td><input type="button" value="9" onclick="display.value += '9'"></td>
            <td><input type="button" value="x" onclick="display.value += '*'"></td>
            <td><input type="button" value="!" onclick="display.value += '!'"></td>
            <td><input type="button" value="sin(" onclick="display.value += 'sin('"></td>
        </tr>
        <tr>
            <td><input type="button" value="." onclick="display.value += '.'"></td>
            <td><input type="button" value="0" onclick="display.value += '0'"></td>
            <td><input type="button" value="," onclick="display.value += ','"></td>
            <td><input type="button" value="+" onclick="display.value += '+'"></td>
            <td><input type="button" value="/" onclick="display.value += '/'"></td>
            <td><input type="button" value="tan(" onclick="display.value += 'tan('"></td>
        </tr>
        <tr>
            <td><input type="button" value="E" onclick="e()"></td>
            <td><input type="button" value="pi" onclick="pi()"></td>
            <td><input type="button" value="^" onclick="power()"></td>
            <td><input type="button" value="(" onclick="display.value += '('"></td>
            <td><input type="button" value=")" onclick="display.value += ')'"></td>
            <td><input type="button" value="log(" onclick="base10Log()"></td>
        </tr>
        <tr>
            <td><input type="button" value="sqrt(" onclick="squareRoot()"></td>
            <td><input type="button" value="ln2" onclick="display.value += Math.LN2"></td>
            <td><input type="button" value="log10(" onclick="base10Log()"></td>
            <td><input type="button" value="l2e" onclick="display.value += Math.LOG2E"></td>
            <td><input type="button" value="l10e" onclick="display.value += Math.LOG10E"></td>
            <td><input type="button" value="exp(" onclick="display.value += 'exp('"></td>
        </tr>
    </table>
</form>
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>


</body>
</html>
