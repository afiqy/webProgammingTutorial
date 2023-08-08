<!doctype html>
<html lang="en">
  
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.js" integrity="sha512-BbVEDjbqdN3Eow8+empLMrJlxXRj5nEitiCAK5A1pUr66+jLVejo3PmjIaucRnjlB0P9R3rBUs3g5jXc8ti+fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
      table {
          border: 15px solid maroon ;
          margin-left: auto;
          margin-right: auto;
         background-color: white;
          
      
      }
      
      input[type="button"] {
          width: 100%;
          padding: 20px 40px;
          background-color: black;
          color: white;
          font-size: 40px;
          font-weight: red;
          border: greenyellow;
          border-radius: 10px;
      }
      
      input[type="text"] {
          padding: 20px 240px;
          font-size: 60 px;
          font-weight: bold;
          border: none;
          border-radius: 5px;
          border: 10px solid color-mix(in srgb, color percentage, color percentage);
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
  <title> MY PORTFOLIO</title>
</head>
  
<body>
  
  <div class="text-center">
  
    <img src="images.jpg" 
         style="width:100%; height: 300px;"
      alt="...">
  </div>
  
  <!-- Navbar Section -->
  <nav class="navbar navbar-expand-sm bg-success navbar-light">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="">
      <img src="https://www.geeksforgeeks.org/wp-content/uploads/gfg_transparent_white_small.png" alt="logo"
        style="width:40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#collapse_Navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse_Navbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="#educational-info">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#Prof-skill">Professional Skills</a>
        <li class="nav-item">
            <a class="nav-link text-white" href="#Timer">Timer</a>
        <li class="nav-item">
                <a class="nav-link text-white" href="#Calculator">Calculator</a>
      </ul>
    </div>
  </nav>
  
  
  <!-- Carousel wrapper -->
  <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" 
       data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="rounded-circle shadow-1-strong mb-xl-5"
          src="giphy.gif" sstyle="width: 200px;" />
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h5 class="mb-10">NUR AFISZA BINTI OSAMAN</h5> 
            
            

  
            <p class="text-xxl-center">
              <i class="fas fa-quote-left pe-60"></i>
              BIAR LAH KITA SELALU TERSENYUM WALAUPUN APA YANG TERJADI DENGAN KITA. 
              SELALU BERDOA SUPAYA DIBERIKAN KELANCARAN DALAM PERJALANAN KEHIDUPAN DI DUNIA DAN AKHIRAT.
              KESIHATAN YANG BAIK DAN DIMURAHKAN REZEKI SERTA DI AMPUNKAN SEGALA DOSA - DOSA DI DUNIA DAN AKHIRAT.
              Aamiin......
            </p>
  
          </div>
        </div>
        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="far fa-star fa-sm"></i></li>
        </ul>
      </div>
  
    </div>
      
  </div>
  <!-- Carousel wrapper -->
  
  
  <div class="section" id="about">
    <div class="container">
      <div class="card aos-init aos-animate" 
           data-aos="fade-up" data-aos-offset="10">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="card-body">
              <div class="h4 mt-0 title">About</div>
                
<p>Recent graduate with an Institusi Perindustrian Miri in Kejuruteraan Komputer ( Sistem ) to 
                Pengalaman saya ialah membuat installasi microsoft office, Format Komputer 
               dan belajar membuat Web Site , 
                "saya telah tamatdengan jurusan kejuteraan komputer ( sistem ) dengan 
                pengalaman telah bekerja sebagai juruteknik komputer di sebuah sekolah rendah  
                dengan banyak menggunakan software dan hardware dalam perisian komputer. Ive built a few.
            </div>
          </div>
  
          <div class="col-lg-6 col-md-12">
            <div class="card-body">
              <div class="h4 mt-0 title">Basic Information</div>
              <div class="row">
                <div class="col-sm-4">
                  <strong class="text-uppercase">
                    Age:
                  </strong></div>
                <div class="col-sm-8">34</div>
              </div>
              <div class="row mt-3">
                <div class="col-sm-4">
                  <strong class="text-uppercase">
                    Email:
                  </strong></div>
                <div class="col-sm-8">a*****.***@gmail.com</div>
              </div>
              <div class="row mt-3">
                <div class="col-sm-4">
                  <strong class="text-uppercase">
                    Phone:
                  </strong></div>
                <div class="col-sm-8">014*****26</div>
              </div>
              <div class="row mt-3">
                <div class="col-sm-4">
                  <strong class="text-uppercase">
                    Address:
                  </strong></div>
                <div class="col-sm-8">
                 Samling Plywood Bintulu
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-sm-4">
                  <strong class="text-uppercase">
                    Language:
                  </strong></div>
                <div class="col-sm-8">English, Bahasa Melayu, Iban</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="section" id="skill">
    <div class="container my-2">
      <div class="h4 text-center mb-4 title" id="educational-info">
        Education
      </div>
      <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="card-body">
          <div class="h5">SIJIL KEJURUTERAAN KOMPUTER ( SISTEM )</div>
          <p class="category">INSTITUSI PERINDUSTRIAN MIRI</p>
  
            
<p><li> DALAM KOMPUTER, HARDWARE KOMPUTER, PERISIAN-PERISAIAN, FORMAT KOMPUTER DAN PRINTER</li></p>
    
<p>
            <b>Projects:</b><br>
          <ul>
          <li>INSTALLASI MICROSOFT M356 A1 DAN HTML BIG DATA</li>
          </ul>
          </p>
  
        </div>
  </div>
  
  <div class="section" id="skill">
    <div class="container my-2">
      <div class="h4 text-center mb-4 title" id="Prof-skill">Professional Skills</div>
      <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="card-body">
          <b>Programming Languages:</b> R, Python, SQL, GoLang<br><br>
          <b>Tools:</b> NumPy, Pandas, Matplotlib, MS Excel, OpenCV<br><br>
          <b>Database Management Systems:</b> MySQL, , postgres, MongoDB, SQLite3<br><br>
          <b>Internet Technologies:</b> JavaScript, HTML5, CSS,
        </div>
      </div>
      <div class="section" id="skill">
        <div class="container my-2">
          <div class="h4 text-center mb-4 title" id="Timer">TIMER</div>
          <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="card-body" style="text-align: center;">
              <div ID="timer"></div>
            </div>
          </div>
        </div>
      </div>
            <div class="section" id="skill">
              <div class="container my-2">
                <div class="h4 text-center mb-4 title" id="Calculator">CALCULATOR</div>
                <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                  <div class="card-body">
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
    </div>
  </div>
  
  <div class="container">

  <div class="col-md-6">
    <div class="card-body">
      <p class="mb-0">
        <strong>Address </strong>
      </p>

      <p class="pb-2">136, Royal Kapson, Noida, India, 800123</p>

      <p class="mb-0"><strong>Phone</strong></p>

      <p class="pb-2">+91 345-567-8346</p>

      <p class="mb-0"><strong>Email</strong></p>

        
<p>skr@gmail.com</p>

    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->
  
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();
      
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
          
        // Output the remaing time
        document.getElementById("timer").innerHTML = 
        days + "days <br/>"  + hours + "h "+ 
        minutes + "m " + seconds  + "s ";
          
        // If the count down is over, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("timer").innerHTML = "EXPIRED";
        }
      }, 1000);
      </script>
  
</body>
  
</html>