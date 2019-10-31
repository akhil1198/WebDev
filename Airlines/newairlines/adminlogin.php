<?php
require_once 'includes/header.php';
require_once 'includes/dbconnect.php';
?>

<h1><center>Admin Login</center></h1>
<form class="modal-content animate" action="checkadminlogin.php" method="post">

  <div class="container">
    <label for="AEmail"><b>Admin Email</b></label>
    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" placeholder="Enter Email" name="AEmail" required>

    <label for="Password"><b>Admin Password</b></label>
    <input type="password" pattern=".{4,}" title="Four or more characters" placeholder="Enter Password" name="Password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox"  name="remember"> Remember me
    </label>
    <span class="psw"><a href="updatepassword1.php">Forgot password?</a></span>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  </div>
</form>
