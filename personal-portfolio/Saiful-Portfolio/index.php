<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENGINENIOR</title>
    <link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/b4fecd358c.js" crossorigin="anonymous"></script>
</head>
<body>
    
	<?php include "../back-button.html" ?>
<div id="header">
    <div class="container">
        <nav>
            <div class="logo">SAIFULSAILI</div>
            <ul id="sidemenu">
            <li><a href="#header">Home</a></li>
            <li><a href="#tentangsaya">Tentangsaya</a></li>
            <li><a href="#kalkulator">Kalkulator</a></li>
            <li><a href="#kiraanmasa">Kiraanmasa</a></li>
            
            <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
            </ul>
            <i class="fa-solid fa-bars" onclick="openmenu()"></i>
        </nav>
        <div class="header-text">
            <p>ASSALAMMUALAIKUM</p>
            <h1>Hi, saya <span>Saifulsaili</span><br>dari Sarikei,SWK</h1>
        </div>
    </div>
</div>
<!-- About -->
<div id="tentangsaya">
 <div class="container">
        <div class="row">
    <div class="about-col-1">
        <img src="bg2.jpg">
    </div>
        <div class="about-col-2">
            <h1 class="sub-title"><span>Tentang</span>saya</h1>
            <p>Saya seorang yang bersemangat, bermotivasi diri, boleh dipercayai, bertanggungjawab dan bekerja keras.
                <br> Saya seorang pekerja pasukan yang matang dan boleh menyesuaikan diri dengan semua situasi yang mencabar.
                <br> Saya dapat bekerja dengan baik dalam persekitaran pasukan serta menggunakan inisiatif sendiri.</p>
    
    <div class="tab-titles">
            <p class="tab-links active-link" onclick="opentab('kemahiran')">Kemahiran</p>
            <p class="tab-links" onclick="opentab('pengalaman')">Pengalaman</p>
            <p class="tab-links" onclick="opentab('pendidikan')">Pendidikan</p>
    </div>
    <div class="tab-contents active-tab" id="kemahiran">
        <ul>
            <li><span>KOMPUTER</span><br>Baik pulih Komputer/Laptop</li>
            <li><span>FORMAT</span><br>Format windows 7/10/11</li>
            <li><span>RANGKAIAN</span><br>Rangkaian komputer internet/LAN/Ethernet</li>
        </ul>
    </div>
    <div class="tab-contents" id="pengalaman">
        <ul>
            <li><span>2016 - 2023</span><br>Berkhidmat sebagai Juruteknik Komputer</li>
        </ul>
    </div>
    <div class="tab-contents" id="pendidikan">
        <ul>
            <li><span>2001 - 2003</span><br>SMK Agama Igan</li>
            <li><span>2004 - 2005</span><br>SMT Sibu</li>
            <li><span>2006 - 2008</span><br>Politeknik Kuching(Sijil Teknologi Maklumat)</li>
            <li><span>2016 - Current</span><br>Berkhidmat sebagai Juruteknik Komputer</li>
        </ul>
    </div>
    </div>
    </div>
 </div>
</div>

<div id="kalkulator">
    <div class="container">
        <h1 class="sub-title">Kalkulator</h1>
        <body>
            <h1 style="color: rgb(0, 0, 0); text-align: center;">
                KALKULATOR</h1>
            <form>
                <table>
                    <tr>
                        <td colspan="6">
                            <input id="display" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="button" value="1"
                                onclick="display.value += '1'"></td>
                        <td><input type="button" value="2"
                                onclick="display.value += '2'"></td>
                        <td><input type="button" value="3"
                                onclick="display.value += '3'"></td>
                        <td><input type="button" value="C"
                                onclick="display.value = ''"></td>
                        <td><input type="button" value="ac"
                                onclick="backspace()"></td>
                        <td><input type="button" value="="
                                onclick="calculate()"></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="4"
                                onclick="display.value += '4'"></td>
                        <td><input type="button" value="5"
                                onclick="display.value += '5'"></td>
                        <td><input type="button" value="6"
                                onclick="display.value += '6'"></td>
                        <td><input type="button" value="-"
                                onclick="display.value += '-'"></td>
                        <td><input type="button" value="%"
                                onclick="display.value += '%'"></td>
                        <td><input type="button" value="cos("
                                onclick="display.value += 'cos('"></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="7"
                                onclick="display.value += '7'"></td>
                        <td><input type="button" value="8"
                                onclick="display.value += '8'"></td>
                        <td><input type="button" value="9"
                                onclick="display.value += '9'"></td>
                        <td><input type="button" value="x"
                                onclick="display.value += '*'"></td>
                        <td><input type="button" value="!"
                                onclick="display.value += '!'"></td>
                        <td><input type="button" value="sin("
                                onclick="display.value += 'sin('"></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="."
                                onclick="display.value += '.'"></td>
                        <td><input type="button" value="0"
                                onclick="display.value += '0'"></td>
                        <td><input type="button" value=","
                                onclick="display.value += ','"></td>
                        <td><input type="button" value="+"
                                onclick="display.value += '+'"></td>
                        <td><input type="button" value="/"
                                onclick="display.value += '/'"></td>
                        <td><input type="button" value="tan("
                                onclick="display.value += 'tan('"></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="E"
                                onclick="e()"></td>
                        <td><input type="button" value="pi"
                                onclick="pi()"></td>
                        <td><input type="button" value="^"
                                onclick="power()"></td>
                        <td><input type="button" value="("
                                onclick="display.value += '('"></td>
                        <td><input type="button" value=")"
                                onclick="display.value += ')'"></td>
                        <td><input type="button" value="log("
                                onclick="base10Log()"></td>
                    </tr>
                    <tr>
                        <td><input type="button" value="sqrt("
                                onclick="squareRoot()"></td>
                        <td><input type="button" value="ln2"
                                onclick="display.value += Math.LN2"></td>
                        <td><input type="button" value="log10("
                                onclick="base10Log()"></td>
                        <td><input type="button" value="l2e"
                                onclick="display.value += Math.LOG2E"></td>
                        <td><input type="button" value="l10e"
                                onclick="display.value += Math.LOG10E"></td>
                        <td><input type="button" value="exp("
                                onclick="display.value += 'exp('"></td>
                    </tr>
                </table>
            </form>
        </body>
    </div>
</div>
    
<!-- --------countdowntime------- -->

<div id="kiraanmasa">
    <div class="container" style="background: url(keretaapi.jpg) no-repeat center; background-size: cover; height: 40em;">
        <div class="border-timer">
            
                <h1 class="sub-title">Kiraanmasa</h1>
                
                <div class="content">
                    <div class="launch-time">
                        <div>
                            <p id="days">00</p>
                            <span>Days</span>
                        </div>
                        <div>
                            <p id="hours">00</p>
                            <span>Hours</span>
                        </div>
                        <div>
                            <p id="minutes">00</p>
                            <span>Minutes</span>
                        </div>
                        <div>
                            <p id="seconds">00</p>
                            <span>Seconds</span>
                        </div>
                    </div>
                </div>
                <!-- <img src="keretaapi.jpg"> -->
            
        </div>
    </div>
</div>
<!-----------copyright------------->

<div class="copyright">
         <p>Copyright <i class="fa-solid fa-heart"></i>by Enginenior</p>
</div>

    
<script>
    
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");
    
    function opentab(tabname){
    for(tablink of tablinks){
    tablink.classList.remove("active-link");
    }
    for(tabcontent of tabcontents){
    tabcontent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab")
    }
    
</script>
    
<script>
    
    var sidemenu = document.getElementById("sidemenu");
    
    function openmenu(){
    sidemenu.style.right = "0";
    }
    function closemenu(){
    sidemenu.style.right = "-200px";
    }
    
</script>
<script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbwL_I8n_1xzNt0dUCANspm8zzeAKQ1df9h_laJbzvfA2v3ipZJ0-8Cm-Woih7o98-TMPQ/exec'
      const form = document.forms['submit-to-google-sheet']
      const msg = document.getElementById("msg")
      form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response => console.log('Success!', response))
          .catch(error => console.error('Error!', error.message))
      })
</script>
<script>

    // Getting formated date from date string
    var countDownDate = new Date("Feb 3, 2024 00:00:00").getTime();
	var x = setInterval(function(){
		var now = new Date().getTime();
		var distance = countDownDate - now;

		    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
       		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) /(1000 * 60 * 60));
		    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


        // Show the output time
        document.getElementById("days")
            .innerHTML = days;
        document.getElementById("hours")
            .innerHTML = hours;
        document.getElementById("minutes")
            .innerHTML = minutes;
        document.getElementById("seconds")
            .innerHTML = seconds;

        // Show overtime output
        if (distance < 0) {
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
            document.getElementById(
                "second"
            ).innerHTML = "0";
        }
    }, 1000);

</script>
</body>
    
</html>