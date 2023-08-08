<!DOCTYPE html>
<html>
<title>Kita try test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #8cd6c6;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-white">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="/image/IMG_20230115_150519.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>Perkhidmatan</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>Gambar</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>Hubungi</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">Tentang saya</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">Gambar Pilihan</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">Hubungi</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->

  <header class="w3-container w3-padding-32 w3-center w3-white" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Saya</span> Naim</h1>
    <p>MENYEDIAKAN PERKHIDMATAN GUIDE ANDA</p>
    <img src="image/IMG_20221016_153441.jpg" alt="boy" class="w3-image" width="992" height="1208">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/air.jpg" class="d-block w-100" alt="boy" class="w3-image" width="992" height="808">
        </div>
        <div class="carousel-item">
          <img src="image/IMG_20220514_091303.jpg" class="d-block w-100" alt="boy" class="w3-image" width="992" height="808">
        </div>
        <div class="carousel-item">
          <img src="image/IMG_20221203_142028.jpg" class="d-block w-100" alt=".."boy" class="w3-image" width="992" height="808"">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-black">NAIM BIN ABDUL JALIL</h2>
    <hr style="width:200px" class="w3-border-red">
    <p>BIAR PATAH JORAN JANGAN PUTUS TALI
    </p>
    <h3 class="w3-padding-16 w3-text-black">#castingsampailebam</h3>
    <p class="w3-wide">Mengembara</p>
    <div class="w3-pale-red">
      <div class="w3-blue-gray" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">Format komputer</p>
    <div class="w3-white">
      <div class="w3-red" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">Jurugambar</p>
    <div class="w3-white">
      <div class="w3-yellow" style="height:28px;width:80%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-cyan">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">3</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">55+ ekor</span><br>
        Ikan Sebarau
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">100 ekor</span><br>
        Jenggo
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">20+ ekor</span><br>
        Ikan Semah
      </div>
    </div>

    <button class="w3-button w3-blue-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Muat turun lokasi
    </button>
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-black">Perkhidmatan</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-green w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Tracking Guide kurang 10 Km</li>
          <li class="w3-padding-16">Pemandu pancing kurang 5 km</li>
          <li class="w3-padding-16">Jurugambar</li>
          <li class="w3-padding-16">Jurumudi bot kurang 10 km</li>
          <li class="w3-padding-16">Pencari lubuk ikan dan udang sungai kurang 5 km</li>
          <li class="w3-padding-16">
            <h2>Perkhidmatan Percuma</h2>
            <span class="w3-opacity">Belanja Tanggung sendiri</span>
          </li>
          <li class="w3-green w3-padding-24">
            <button class="w3-button w3-cyan w3-padding-large w3-hover-black">Untuk trip akan datang</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-blue w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Perkhidmatan Berbayar</li>
          <li class="w3-padding-16">Tracking Guide lebih 10 km</li>
          <li class="w3-padding-16">Jurugambar</li>
          <li class="w3-padding-16">Jurumudi bot lebih 10 km</li>
          <li class="w3-padding-16">Mencari lubuk ikan dan udang lebih 10 km</li>
          <li class="w3-padding-16">
            <h2>Rm 100 pertrip</h2>
            <span class="w3-opacity">Belanja tanggung sendiri</span>
          </li>
          <li class="w3-blue-violet w3-padding-24">
            <button class="w3-button w3-cyan w3-padding-large w3-hover-black">Untuk trip akan datang</button>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
    
    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-black">Reputasi</h3>  
    <img src="image/IMG_20230312_125617.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Kumpau itu pasti</span></Section>Strike itu rezeki</p>
    <p>Jangan lupa berdoa kepada yang maha Esa</p><br>
    
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-5 w3-content" id="photos">
    <h2 class="w3-text-black">Dan Hasilnya</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="image/IMG_20220516_111116.jpg" style="width:50%">
        <img src="image/IMG_20221022_180958.jpg" style="width:50%">
        <img src="image/IMG_20230312_125617.jpg" style="width:50%">
      </div>

      <div class="w3-half">
        <img src="image/IMG_20230528_144350.jpg" style="width:50%">
        <img src="image/IMG_20230528_144251.jpg" style="width:50%">
        <img src="image/IMG_20230107_142358.jpg" style="width:50%">
        <img src="image/IMG_20221203_134931.jpg" style="width:60%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-black">Hubungi saya</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Tubau</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +60138795269</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: lictsmkbintulu@gmail.com</p>
    </div><br>
    <p>Saya sedia membantu anda</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i>Hantar pesanan 
        </button>
      </p>
    </form>
  </div>
  <style>
   
</style>
<body>
    <div class="bgimg">
        <div class="topleft">
            <p>25.07.2023</p>
        </div>
        <div class="middle">
            <h1>JUHNGAILKITA</h1>
            <hr>
            <p id="demo" style="font-size:60px"></p>
        </div>
        <div class="bottomleft">
            <p>kitaramirami</p>
        </div>
    </div>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("July 18, 2023 00:00:00").getTime();
        // Update the count down every 1 second
        var countdownfunction = setInterval(function() {
            // Get todays date and time
            var now = new Date().getTime();
            // Find the distance between now an the count down date
            var distance = countDownDate - now;
            console.log(distance);
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 *60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "HARI " + hours + "JAM " + minutes + "MINIT" + seconds + "SAAT";
// If the count down is over, write some text 
if (distance < 0) {
clearInterval(countdownfunction);
document.getElementById("demo").innerHTML = "EXPIRED";
}
}, 1000);
</script>
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity">naimcaster</i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>
 

<!-- END PAGE CONTENT -->
</div>

</body>
</html>