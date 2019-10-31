<?php
require_once 'includes/header.php';
require_once 'includes/dbconnect.php';
if(isset( $_SESSION["Email"])){
}else {
  die ("<script> location.href='noauth.php'; </script>");
}
?>

<div class="rightcolumn">
<div class="card">
  <h2><strong>Instructions</strong></h2>
  <br>
  <p>1) Enter your User ID.</p>
  <br>
  <p>2) Check the flight schedules in the <a href = "flightinfo.php">Flights</a> section for flight IDs.</p>
  <br>
  <p>3) Search and enter the desired Airline ID and the Flight ID.</p>
  <br>
  <p>4) Check your IDs and then click on submit to confirm your booking.</p>
  <br>
  <p>5) Here are some Airline ID and their names for your reference, <br> <center>Air India - 1021</center> <br> <center>Quantas - 1022</center> <br> <center>Etihad - 1023</center> <br> <center>Jet Airways - 1024</center> <br> <center>Lufthansa - 1025</center></p>
  <br>
  <p>6) Your booking ID must be unique and must contain 3 letters and 3 numbers.</p>
</div>
</div>


<!-- Form Name -->
<legend><center><b>Make your booking by entering the information.</b></center></legend>

<!-- Text input-->
<form method="POST" action="bookinginsert.php">

  <br>
<div class="form-group">
  <center><label class="col-md-2 control-label" for="name">Enter User ID</label>
  <div class="col-md-4">
  <input name="USER_ID" type="text" placeholder="UserID" class="form-control input-md" required>
</div></center>
  <br><br>
</div>
<br>
<div class="form-group">
  <center><label class="col-md-2 control-label" for="name">Enter Flight ID</label>
  <div class="col-md-4">
    <input name="flight_id" type="text"  placeholder="FlightID" class="form-control input-md" required>
  </div></center>
  <br><br>
</div>
<br>
<div class="form-group">
  <center><label class="col-md-2 control-label" for="name">Select Airline</label>
    <div class="col-md-4">
        <select id="name" name="airlineid">
          <option value="1021">Air India</option>
          <option value="1022">Quantas</option>
          <option value="1023">Etihad</option>
          <option value="1024">Jet Airways</option>
          <option value="1025">Lufthansa</option>
        </select>
    </div>
  </center>
  <br><br>
</div>
<br>
<br>
<center><input type="submit" class="searchbtn" name="Search"></center>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="container-fluid text-center">
  <p>Find the cheapest of flight tickets here at ABS only!</p>
</footer>
