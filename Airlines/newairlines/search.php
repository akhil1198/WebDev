<?php
require_once 'includes/header.php';


?>

<form class="form-horizontal" id="register_form" method="post" action="searchresults.php"  enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend><center><b>Search for flights here.</b></center></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Enter destination</label>
  <div class="col-md-4">
  <input name="location" type="text" id="destination" placeholder="Destination" class="form-control input-md" required>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Enter date of travel</label>
  <div class="col-md-4">
  <input name="departuredate" type="text" id="date" placeholder="Date" class="form-control input-md" required>
  </div>
</div>
<center><input type="submit" class="searchbtn" name="Search"></center>
<br><br>
<footer class="container-fluid text-center">
  <p>Find the cheapest of flight tickets here at ABS only!</p>
</footer>
