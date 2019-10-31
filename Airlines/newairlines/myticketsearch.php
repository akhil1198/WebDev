<?php
require_once 'includes/header.php';
if(isset( $_SESSION["Email"])){
}else {
  die ("<script> location.href='noauth.php'; </script>");
}
?>
<form class="form-horizontal" id="register_form" method="post" action="mytickets.php"  enctype="multipart/form-data">
<fieldset>
<legend><center><b>Enter your booking ID to view ticket.</b></center></legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">BookingID</label>
  <div class="col-md-4">
  <input name="bookingid" type="text" id="destination" placeholder="BookingID" class="form-control input-md" required>
  </div>
</div>
<center><input type="submit" class="searchbtn" name="Search"></center>
<br><br><br><br><br>
<footer class="container-fluid text-center">
  <p>Find the cheapest of flight tickets here at ABS only!</p>
</footer>
