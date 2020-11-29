<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>about</title>
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
<body>

<div class="navbar">
  <h1><a href="index.html">الرئيسيه</a></h1>

  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">الاقسام
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a class="active" href="islamic.html"><h1>كتب اسلاميه</a></h1>
    <a class="active" href="Medicine.html"><h1>كتب الطب</a></h1>
    <a class="active" href="engineering.html"><h1>كتب هندسه</a></h1>
    <a class="active" href="low.html"><h1>كتب قانون</a></h1>
    <a class="active" href="mankind.html"><h1>كتب تنميه بشريه</a></h1>
    <a class="active" href="art.html"><h1>كتب ادب</a></h1>
    <a class="active" href="computer.html"><h1>كتب حاسوب</a></h1>
    <a class="active" href="novels.html"><h1>روايات</a></h1>
    <a class="active" href="1.html"><h1>المصممين</a></h1>


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

</head>

<body bgcolor="grey">
<center>
    <font size="20px" color="1111fff">   <h1>بسم الله الرحمن الرحيم</h1></font>
</center>
<br>
<br>
<center>
    <font size="20px" color="#ddd">   <h1>مكتبه اســــــــــراء<br>الالكترونيه</h1></font>
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
<font  size="20px" color="111">   <h1 align="right">-:تشمل</h1></font>

<font  size="20px" color="111">   <h1 align="right">كتب اسلاميه</h1></font>
<font  size="20px" color="111">   <h1 align="right">كتب الطب</h1></font>


<font  size="20px" color="111">   <h1 align="right">كتب تنميه بشريه</h1></font>


<font  size="20px" color="111">   <h1 align="right">كتب القانون</h1></font>

<font  size="20px" color="111">   <h1 align="right">كتب الهندسه</h1></font>


<font  size="20px" color="111">   <h1 align="right">كتب الحاسوب</h1></font>

<font  size="20px" color="111">   <h1 align="right">روايات</h1></font>


<font  size="20px" color="111">   <h1 align="right">كتب ادبيه</h1></font>
</html>

  
</body>