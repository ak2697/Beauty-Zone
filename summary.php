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
      <li><a href="services.php">Our Services</a></li>
      <li><a href="offers.php">Offers</a></li>
      <li class="active"><a href="appoint.php">Appointment</a></li>
      <li><a href="credits.php">Credits</a></li>
    </ul>
  </div>
</nav>
<?php
$conn=mysqli_connect("localhost","root","","beauty");
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$date=$_POST['date'];
$time=$_POST['time'];
if(isset($_POST['haircut']))
$haircut=true;
else
$haircut=false;

if(isset($_POST['eyebrow']))
$eyebrow=true;
else
$eyebrow=false;
if(isset($_POST['facial']))
$facial=true;
else
$facial=false;
if(isset($_POST['massage']))
$massage=true;
else
$massage=false;
$others=$_POST['others'];
$allergy=$_POST['allergy'];

$query="insert into customer values('$name','$email','$tel','$allergy','$address','$haircut','$eyebrow','$facial','$massage','$others','$date','$time')";
$result=mysqli_query($conn,$query);
?>
<body style="margin:0;">
  <style>
  *
  {
    margin:0px;
  }

    .one{
  background-image: url("thechosenone.jpg");
  height:650px;
  width:100%;
  margin-bottom: 0px;
  padding-bottom: 0px;
  background-size:cover;
}
  </style>
<div class="one">
  <br><br><br><br><br><br><br>
<blockquote><b>Summary:</b></blockquote>
<blockquote><?php echo $_POST['name'] ?>, you have your appointment on <?php echo $_POST['date'] ?> at <?php echo $_POST['time'] ?>.We will send you a confirmation message on your given contact details. Thank you for comig to us!<br> Contact us for any edit or cancellation request. </blockquote>
<!--<div class="col-sm-3"></div><button class="btn btn-primary col-sm-2">Edit details</button><div class="col-sm-2"></div><button class="btn btn-primary col-sm-2">Cancel appointment</button>  -->
</div>
<footer style="font-size:20px;background-color:black;font-weight:bold;">
  <p style="margin-left:100px">Address:</p><div class="container">
  T-140(upstairs),<br>         Kala Complex,Opposite Infant Jesus Church,<br>         CBM College Road,<br>         Kovai Pudur,<br>         Cbe-641042
</div>
</footer>
</body>
</html>
