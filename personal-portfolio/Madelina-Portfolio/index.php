<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: sans-serif, sans-serif, sans-serif;
  margin: 0;

}
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 15px;
}

.about-section {
  padding: 10px;
  text-align: center;
  background: url(Modern.png);
  color: rgba(249, 242, 246, 0.799);
  font-size: large;

}
.container {
  padding: 0 10px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: rgb(195, 0, 88);
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
 
}
</style>
</head>
<body>

	<?php include "../back-button.html" ?>
<div class="about-section">
  <img src="cartoon 0.jpg" width="250" height="300">
  <h1>Hi, I'm Madelina Ngau</h1>
  <p>Welcome to my homepage. I hope that you'll enjoy your time visiting.</p>
</div>

<h2 style="text-align:center">A little bit about myself ;)</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Personal</h2>
        <p>From Belaga, Sarawak</p>
        <p>I'm married</p>
        <p>Born on November 5th 1993</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Career</h2>
        <p>Working as Computer Technician</p>
        <p>SK Kampung Jepak</p>
        <p>Gred FT19</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Hobbies</h2>
        <p>Camping</p>
        <p>Handicraft</p>
        <p>Thrift Shopping</p>
      </div>
    </div>
  </div>
</div>
<div
<link rel="stylesheet" href="style.css">
    <!-- Add style/CSS -->
    <style>
        body {
            text-align: center;
            font-family: sans-serif;
            font-weight: 70;
        }
        /* Styling for heading */
        h1 {
            color: rgb(255, 255, 255);
            font-weight: 40;
            font-size: 50px;
            margin: 80px 0px 40px;
            font-family: "Times New Roman", Times, serif;
        }
        #clockdiv {
            font-family: sans-serif;
            color: #1e1c1c;
            display: inline-block;
            font-weight: 100;
            text-align: center;
            font-size: 60px;
        }
        #clockdiv>div {
            padding: 10px;
            border-radius: 3px;
            background: #b7346a;
            display: inline-block;
        }
        #clockdiv div>span {
            padding: 15px;
            border-radius: 3px;
            background: #f4f5f5;
            display: inline-block;
        }
        /* Style for visible text */
        .smalltext {
            padding-top: 5px;
            font-size: 16px;
            font-family: "Times New Roman", Times, serif;
        }
        .border-timer {
            border: #ac055e solid 5px;
            width: fit-content;
            height: 200px;
            display: inline-block;
            padding: 40px;
            justify-content: center;
        }
    table {
    width: 45%;
    height: 300px;
    border-collapse: collapse;
    font-family: arial, sans-serif;
    margin-left: auto;
    margin-right: auto;
}
td {
    padding:5px;
    text-align: center;
}
input[type=text] {
    width: 100%;
    height: 50px;
    text-align: right;
    font-family: monospace;
    font-size: 3em;
    font-weight: bold;
    border-color: rgb(43, 1, 33);
    border-width: 1px;
    border-style: solid;
    opacity: 0.5;
}
input[type=text]:hover {
    opacity: 1;
}
input[type=button] {
    opacity: 0.8;
    background-color: #1e1c1d;
    background-image: linear-gradient(top, #f3f3fa, #ececf2);
    border: 1px solid #d7cf35;
    color: #faf7f9;
    height: 45px;
    width: 65px;
    text-align: center;
    font-size: 1.2em;
    font-weight: normal;
}
input[type=button]:hover {
    box-shadow: 0 1px 1px rgba(247, 242, 242, 0.1);
    background-image: linear-gradient(top, #fefbfb, #f4efef);
    opacity: 1;
    border: 1px solid #0f0f0f;
    color: #f8f4f4;
    cursor: pointer;
}
input[name=equal] {
    background-color: #58b1dd;
    background-image: linear-gradient(top, #131314, #121213);
    border: 1px solid #efeff1;
    color: #f8f4f4;
}
input[name=equal]:hover {
    background-color: #5a93e8;
    background-image: linear-gradient(top, #0a0b0b, #101112);
    border: 1px solid #f5f5f8;
    color: #fefefe;
}
input[name=operator] {
    border: 1px solid #f8f6f6;
    background-color: #100f0f;
}
    </style>
</head>
<body>
  <h1 style="color: rgb(171, 8, 103); text-align: center;">Calculator</h1>

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
  <h1 class="rgb(0,0,0); text-align:center;">Calculator</h1>
  <script src="js/index.js"></script>
</body>
<body>
    <div class="border-timer">
        <!-- Title or heading -->
        <div id="clockdiv">
            <div>
                <!-- Show No. of days -->
                <span class="days" id="day"></span>
                <div class="smalltext">Days</div>
            </div>
            <div>
                <!-- Show no.of hours -->
                <span class="hours" id="hour"></span>
                <div class="smalltext">Hours</div>
            </div>
            <div>
                <!-- Show no. of minutes -->
                <span class="minutes" id="minute"></span>
                <div class="smalltext">Minutes</div>
            </div>
            <div>
                <!-- Show seconds -->
                <span class="seconds" id="second"></span>
                <div class="smalltext">Seconds</div>
            </div>
        </div>
    </div>
    <!-- <p id="demo"></p> -->

    <!-- Adding JavaScript code -->
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
    <script>

        // Getting formated date from date string
        let deadline = new Date(
            "dec 31, 2023 15:37:25"
        ).getTime();

        // Calling defined function at certain interval
        let x = setInterval(function () {

            // Getting current date and time in required format
            let now = new Date().getTime();

            // Calculating difference
            let t = deadline - now;

            // Getting values of days,hours,minutes, seconds
            let days = Math.floor(
                t / (1000 * 60 * 60 * 24)
            );
            let hours = Math.floor(
                (t % (1000 * 60 * 60 * 24)) /
                (1000 * 60 * 60)
            );
            let minutes = Math.floor(
                (t % (1000 * 60 * 60)) / (1000 * 60)
            );
            let seconds = Math.floor(
                (t % (1000 * 60)) / 1000
            );

            // Show the output time
            document.getElementById("day")
                .innerHTML = days;
            document.getElementById("hour")
                .innerHTML = hours;
            document.getElementById("minute")
                .innerHTML = minutes;
            document.getElementById("second")
                .innerHTML = seconds;

            // Show overtime output
            if (t < 0) {
                clearInterval(x);
                document.getElementById(
                    "demo"
                ).innerHTML = "TIME UP";
                document.getElementById(
                    "day"
                ).innerHTML = "0";
                document.getElementById(
                    "hour"
                ).innerHTML = "0";
                document.getElementById(
                    "minute"
                ).innerHTML = "0";
                docut.getElementById(
                    "second"
                ).innerHTML = "0";
            }
        }, 1000);
    </script>
    
</body>
</html>