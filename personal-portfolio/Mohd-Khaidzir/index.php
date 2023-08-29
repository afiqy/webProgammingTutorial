<!DOCTYPE html>
<html>

<head>
  <title>W3.CSS Template</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Montserrat", sans-serif
    }

    .w3-row-padding img {
      margin-bottom: 12px
    }

    /* Set the width of the sidebar to 120px */
    .w3-sidebar {
      width: 120px;
      background: #2ece61;
    }

    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {
      margin-left: 120px
    }

    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {
      #main {
        margin-left: 0
      }
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }


    #demo {
      font-size: 40px;
    }
  </style>
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
      background-color: #f5f5f5;
      background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
      border: 1px solid #dedede;
      color: #444;
      height: 30px;
      width: 45px;
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

  <style>
    .waviy {
      position: relative;
    }

    .waviy span {
      position: relative;
      display: inline-block;
      font-size: 40px;
      color: #fff;
      text-transform: uppercase;
      animation: flip 2s infinite;
      animation-delay: calc(.2s * var(--i))
    }

    @keyframes flip {

      0%,
      80% {
        transform: rotateY(360deg)
      }
    }
  </style>
</head>

<body class="w3-yellow">

  <?php include "../back-button.html" ?>
  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="pic 4.png" style="width:100%">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>PERIHAL SAYA</p>
    </a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>GALERI SAYA</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
      <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
      <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
      <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
  </div>

  <!-- Page Content -->
  <div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
      <h1 class="w3-jumbo"><span class="w3-hide-small">Hi</span> Saya Mohd Khaidzir Hamzah.</h1>
      <img src="pic 3.jpg" alt="boy" class="w3-image" width="320" height="220">

      <h1 class="waviy">
        <span style="--i:1">J</span>
        <span style="--i:2">U</span>
        <span style="--i:3">R</span>
        <span style="--i:4">U</span>
        <span style="--i:5">T</span>
        <span style="--i:6">E</span>
        <span style="--i:7">K</span>
        <span style="--i:8">N</span>
        <span style="--i:9">I</span>
        <span style="--i:10">K</span>
        <span style="--i:11">K</span>
        <span style="--i:12">O</span>
        <span style="--i:13">M</span>
        <span style="--i:14">P</span>
        <span style="--i:15">U</span>
        <span style="--i:16">T</span>
        <span style="--i:17">E</span>
        <span style="--i:16">R</span>
      </h1>
    </header>

    <!-- About Section -->
    <div class="w3-content w3-justify w3-text-black w3-padding-64" id="about">
      <h2 class="w3-text-blue">Perihal Saya</h2>
      <hr style="width:200px" class="w3-opacity">
      <p>Seorang yang hensem berumur 38 tahun. Mempunyai perwatakan yang menarik, jujur, amanah dan berdedikasi.
      </p>
      <h3 class="w3-padding-16 w3-text-black">Kelebihan Yang Saya Ada</h3>
      <p class="w3-wide">Belajar sambil tidur</p>
      <div class="w3-white">
        <div class="w3-blue" style="height:28px;width:95%"></div>
      </div>
      <p class="w3-wide">Web Design</p>
      <div class="w3-white">
        <div class="w3-blue" style="height:28px;width:60%"></div>
      </div>
      <p class="w3-wide">Fotografi</p>
      <div class="w3-white">
        <div class="w3-blue" style="height:28px;width:50%"></div>
      </div><br>

      <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">111+</span><br>
          Sahabat
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">55+</span><br>
          Jam Untuk Tidur Dalam Seminggu
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">89+</span><br>
          Beban Dipikul
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">150+</span><br>
          Duit Dalam Poket
        </div>
      </div>

      <button class="w3-button w3-light-grey w3-padding-large w3-section">
        <i class="fa fa-download"></i> Muat Turun Gambar Saya
      </button>

      <!-- Grid for pricing tables -->
      <h3 class="w3-padding-16 w3-text-blue">Widget Saya</h3>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-dark-grey w3-xlarge w3-padding-32">Hari Menduduki Ujian SPM</li>
            <li class="w3-padding-32" id="demo"></li>
          </ul>
        </div>

        <div class="w3-half">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-dark-grey w3-xlarge w3-padding-32">Calculator</li>
            <li class="w3-padding-16 w3-xlarge" data-toggle="collapse" href="#KlikSini" role="button"
              aria-expanded="false" aria-controls="KlikSini">Klik Sini</li>

            <div class="collapse" id="KlikSini">
              <div class="card card-body">
                <div class="card">
                  <div class="card-header">Calculator</div>
                  <div class="card-body">
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
                  </div>
                </div>
              </div>
            </div>

          </ul>
        </div>
        <!-- End Grid/Pricing tables -->
      </div>


      <!-- Portfolio Section -->
      <div class="w3-padding-64 w3-content" id="photos">
        <h2 class="w3-text-blue">Galeri Saya</h2>
        <hr style="width:200px" class="w3-opacity">

        <!-- Grid for photos -->
        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half">
            <img src="pic 5.jpeg" style="width:100%">
            <img src="pic 6.jpeg" style="width:100%">

          </div>

          <div class="w3-half">
            <img src="pic 8.jpeg" style="width:100%">
            <img src="pic 9.jpeg" style="width:100%">
            <img src="pic 7.jpeg" style="width:100%">

          </div>
          <!-- End photo grid -->
        </div>
        <!-- End Portfolio Section -->
      </div>

      <!-- Contact Section -->
      <div class="w3-padding-64 w3-content w3-text-black" id="contact">
        <h2 class="w3-text-purple">Contact Me</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-section">
          <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Bintulu , Sarawak</p>
          <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Nom. Telefon : +012 - 3456789
          </p>
          <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: EnsomBoi@mail.com</p>
        </div><br>
        <p>Let's get in touch. Send me a message:</p>

        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
          <p>
            <button class="w3-button w3-light-grey w3-padding-large" type="submit">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
        <!-- End Contact Section -->
      </div>

      <!-- Footer -->
      <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
            class="w3-hover-text-green">w3.css</a></p>
        <!-- End footer -->
      </footer>

      <!-- END PAGE CONTENT -->
    </div>

    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Dec 24, 2023 00:00:00").getTime();

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
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "GAMEOVER";
        }
      }, 1000);

    </script>

</body>

</html>