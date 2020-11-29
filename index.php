<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>indix</title>
<meta charset="UTF8" />
<!-- بدايه القائمه-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
  overflow: hidden;
  background-color: rgb(51, 51, 51);
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: right;
  font-size: 16px;
  color: rgb(182, 167, 167);
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size:22px;  
  border: none;
  outline: none;
  color: rgb(216, 198, 224);
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: rgb(12, 43, 145);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #075034;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(12, 9, 173, 0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: rgb(242, 250, 247);
  padding: 15px 16px;
  text-decoration: none;
  display: block;
  text-align: right;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
</style>
</head>
<body >

<div class="navbar">
  <h1><a href="about.html">عن المكتبه</a></h1>
 
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">الاقسام
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
  <a class="active" href="computer.php"><h1>كتب حاسوب</a></h1>
    <a class="active" href="islamic.php"><h1>كتب اسلاميه</a></h1>
    <a class="active" href="Medicine.php"><h1>كتب الطب</a></h1>
    <a class="active" href="engineering.php"><h1>كتب هندسه</a></h1>
    <a class="active" href="low.php"><h1>كتب قانون</a></h1>
    <a class="active" href="mankind.php"><h1>كتب تنميه بشريه</a></h1>
    <a class="active" href="art.php"><h1>كتب ادب</a></h1>
    <a class="active" href="novels.php"><h1>روايات</a></h1>
    <a class="active" href="1.php"><h1>المصممين</a></h1>


  </div>
  </div> 
</div>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
<!--نهايه القائمه-->

</head>

<body background="555.jpg>


    <marquee direction="right" width="100%" height="30" style="TAHOMA: 150%; font-size: 14pt; color: white; border-style: ridge; border-color: #0066FF" bgcolor="#000000" scrolldelay="100" scrollamount="3"><font size="5">   </marquee>
<right>  <div class="topnav">

</div> </right>

<img src="555.jpg" width=300 beight=150>
<img src="555.jpg"  <h1 align="right"width=300 beight=150>
<br>
<br>
<center>
<div class="slideshow-container">

<div class="mySlides fade">
<div class="numbertext"></div>
<img src="3.png" style="widows: 50px;%">
<div class="text"></div>
</div>

<div class="mySlides fade">
<div class="numbertext"></div>
<img src="1.jpg" style="widows: 50px;">
<div class="text"></div>
</div>

<div class="mySlides fade">
<div class="numbertext"></div>
<img src="2.jpg" style="widows: 50px;">
<div class="text"></div>
</div>
</center>

</div>
<br>

<div style="text-align:center">
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";  
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}    
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
setTimeout(showSlides, 2000); // Change image every 3 seconds
}
</script>



<br>
<br>
<br>

<br>
<br>
<br>

<br>
<center>
<div style="width: 400px; height:500px; border:10px solid rgb(8, 80, 90)"> 


<p align="center"> <font size="10px"> الكتاب الجيد يُقرأ مرة في سن الشباب ومرة في سن النضج ومرة<br> أخرى في الشيخوخة، كالبناء الجميل الذي يجب أن يُشاهد فجراً وظهراً وتحت ضوء القمر.

</font>
</p>
</div>
</center>



<div style="width: 400px; height:500px; border:10px solid rgb(187, 60, 199)"> 


    <p align="center"> <font size="10px"><br> عندما أقرأ كتاباً للمرة الأولى أشعر أني قد كسبت صديقاً جديداً، وعندما أقرأه للمرة الثانية أشعر أني ألتقي صديقاً قديماً.




    
    </font>
    </p>
</div>




<center>
    <div style="width: 400px; height:500px; border:10px solid rgb(5, 8, 56)"> 
    
    
    <p align="center"> <font  color="red black" size="10px"><br> <br> اقرأ قليلاً ولكن استوعب كل كلمة قرأتها
    
    </font>
    </p>
    </div>
    </center>


    <br>
    <br>
    
    <br>
    <br>
    <br>
    
    <br>
    <br>
    <br>
    
    <br>
    
</body>
</html> 
