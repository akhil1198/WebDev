<?php
require_once 'includes/header.php';
require_once 'includes/dbconnect.php';


?>

<form class="form-horizontal" id="register_form" method="post" action="updatepassword2.php"  enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend><center><b>Set new password</b></center></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Enter new password</label>
  <div class="col-md-4">
  <input name="departureto" type="text" id="destination" placeholder="New Password" class="form-control input-md" required>
  </div>
</div>
<center><input type="submit" class="searchbtn" name="Search"></center>
<br><br><br><br>
<footer class="container-fluid text-center">
  <p>Find the cheapest of flight tickets here at ABS only!</p>
</footer>
