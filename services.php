<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div>
<h1>BeautyZone</h1>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BeautyZone</a>
    </div>
    <ul class="nav navbar-nav">
       <li><a href="code.php">Home</a></li>
      <li class="active"><a href="services.php">Our Services</a></li>
      <li><a href="offers.php">Offers</a></li>
      <li><a href="appoint.php">Appointment</a></li>
      <li><a href="credits.php">Credits</a></li>
    </ul>
  </div>
</nav>


<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none}
.one{
  background-image: url("thechosenone.jpg");
  height:800px;
  width:100%;
  background-size:cover;
}
</style>
<body>


<div class="one">
<div class="w3-content" style="max-width:800px">
  <img class="mySlides" src="two.jpeg" style="width:100%;height:700px;">
  <img class="mySlides" src="three.jpeg" style="width:100%;height:700px;">
  <img class="mySlides" src="four.jpeg" style="width:100%;height:700px;">
  <img class="mySlides" src="five.jpeg" style="width:100%;height:700px;">
  <img class="mySlides" src="six.jpeg" style="width:100%;height:700px;">
  <img class="mySlides" src="seven.jpeg" style="width:100%;height:700px;">
  <img class="mySlides" src="eight.jpeg" style="width:100%;height:700px;">
  <img class="mySlides" src="nine.jpeg" style="width:100%;height:700px;">
  <img class="mySlides" src="ten.jpeg" style="width:100%;height:700px;">
  <img class="mySlides" src="eleven.jpeg" style="width:100%;height:700px;">
</div>

<div class="w3-center">
     
  <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
  <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
  <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
  <button class="w3-button demo" onclick="currentDiv(4)">4</button> 
  <button class="w3-button demo" onclick="currentDiv(5)">5</button> 
  <button class="w3-button demo" onclick="currentDiv(6)">6</button> 
  <button class="w3-button demo" onclick="currentDiv(7)">7</button> 
  <button class="w3-button demo" onclick="currentDiv(8)">8</button> 
  <button class="w3-button demo" onclick="currentDiv(9)">9</button> 
  <button class="w3-button demo" onclick="currentDiv(10)">10</button> 
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);


function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace("w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}
</script>

</body>
</html>

  </div>
<footer style="font-size:20px;background-color:black;font-weight:bold;">
  <p style="margin-left:100px">Address:</p><div class="container">
  T-140(upstairs),<br>         Kala Complex,Opposite Infant Jesus Church,<br>         CBM College Road,<br>         Kovai Pudur,<br>         Cbe-641042
</div>
</footer>
</body>
</html>
