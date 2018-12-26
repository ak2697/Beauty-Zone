<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
            
</head>
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
<div class="one">
  <form method="POST" action="summary.php">
  <div class="form-group">
  <label for="name">Name:</label>
  <input type="text" class="form-control" name="name">
</div>
<div class="form-group">
  <label for="address">Address:</label>
  <input type="text" class="form-control" name="address">
</div>
<div class="form-group">
  <label for="email">Email:</label>
  <input type="email" class="form-control" name="email">
</div>
<div class="form-group">
  <label for="tel">Phone Number:</label>
  <input type="tel" class="form-control" name="tel">
</div>
<div class="form-group">
  <label for="allergy">Allergies(If any):</label>
  <input type="text" class="form-control" name="allergy">
</div>
      <label style="font-size: 18px;">Services</label>
      <div class="row">
       <div class="col-sm-2">
      <label>
        <input type="checkbox" name="facial"/>
        <span>Facial</span>
      </label>
   
        </div>
        <div class="col-sm-2">
      <label>
        <input type="checkbox" name="massage"/>
        <span>Massage</span>
      </label>
   
        </div>
        <div class="col-sm-2">
      <label>
        <input type="checkbox" name="haircut" />
        <span>Hair Cut</span>
      </label>
   
        </div>
        <div class="col-sm-2">
      <label>
        <input type="checkbox" name="eyebrow"/>
        <span>Eyebrow trimming</span>
      </label>
   
        </div>
      </div>
      <div class="form-group">
  <label for="others">Others:</label>
  <textarea type="text" class="form-control" name="others"></textarea>
</div>
<div class="row">
<div class="form-group col-sm-6">
  <label for="date">When do you wanna come?:</label>
  <input type="date" class="form-control" name="date">
</div>

<div class="form-group col-sm-6">
  <label for="time">At what time?:</label>
  <input type="time" class="form-control" name="time">
</div>
</div>
      <center><button class="btn btn-primary">Fix an appointment</button></center>
    </form>
  </div>
<footer style="font-size:20px;background-color:black;font-weight:bold;">
  <p style="margin-left:100px">Address:</p><div class="container">
  T-140(upstairs),<br>         Kala Complex,Opposite Infant Jesus Church,<br>         CBM College Road,<br>         Kovai Pudur,<br>         Cbe-641042
</div>
</footer>

</body>
</html>
