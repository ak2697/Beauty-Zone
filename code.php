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
     <li class="active"><a href="code.php">Home</a></li>
      <li><a href="services.php">Our Services</a></li>
      <li><a href="offers.php">Offers</a></li>
      <li><a href="appoint.php">Appointment</a></li>
      <li><a href="credits.php">Credits</a></li>
    </ul>
  </div>
</nav>
<style>
.one{
  background-image: url("thechosenone.jpg");
  height:600px;
  width:100%;
  background-size:cover;
}
@keyframes slider{
  0% {
    left: 0;
  }
  20%{
    left: 0;
  }
  25%{
    left: -100%;
  }
  45%{
    left: -100%;
  }
  50%{
    left: -200%;
  }
  70%{
    left: -200%:
  }
  75%{
    left: -300%;
  }
  95%{
    left: -300%;
  }
  100%{
    left: 0%;
  }
}
  #slider{
    overflow: hidden;
  }
  #slider figure img {
    width: 8%;
    height: 400px;
    float: left;
  }
  #slider figure{
    position: relative;
    width: 500%;
    margin: 0;
    left: 0;
    text-align: left;
    font-size: 0;
    animation: 15s slider infinite;
  }
  




</style>
<div class="one">

<div id="slider">
<figure>
<img src="fifth.jpg">
<img src="first.jpg">
<img src="second.jpg">
<img src="third.jpg">
<img src="fourth.jpg">
</figure>
</div>
</div>
<footer style="font-size:20px;background-color:black;font-weight:bold;">
	<p style="margin-left:100px">Address:</p><div class="container">
	T-140(upstairs),<br>         Kala Complex,Opposite Infant Jesus Church,<br>         CBM College Road,<br>         Kovai Pudur,<br>         Cbe-641042
</div>
</footer>
</body>

 