<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ABS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets\bootstrap.min.css">
  <script src="assets\bootstrap.min.js"></script>
  <script src="assets\jquery.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }



/*modal login form*/
body {font-family: Arial, Helvetica, sans-serif;}
.label1 {
  float: right;
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


/* Set a style for all buttons */
button{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    border-radius: 12px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* admin login button */
button13 {
  float: right;
  background-color: black;
  color: white;
  padding: 14px 20px;
  border-radius: 12px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;

}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
/*end of modal login form*/


/*register modal form*/
body {font-family: Arial, Helvetica, sans-serif;}
      * {box-sizing: border-box;}

/* Full-width input fields */
input[type=text1], input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    border-radius: 12px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #0088cc;
    color: white;
    padding: 14px 20px;
    border-radius: 12px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    float: right;
    width: 40%;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn {
    float: left;
    width: 40%;
}
.registerbtn {
    float: right;
    width: 40%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    font-size: 35px;
    font-weight: bold;
    color: #000;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .registerbtn {
       width: 100%;
    }
}
/*end of register form*/

.button12
{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  border-radius: 12px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.searchbtn
{
  background-color: #000000;
  color: white;
  padding: 14px 20px;
  border-radius: 12px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}


/* Right column */
.rightcolumn {
    float: left;
    width: 20%;
    height: 100%;
    background-color: #333;
    padding-left: 10px;
}
.card {
  color: #f2f2f2;
}

input[type=select]:focus {
    background-color: #ddd;
    outline: none;
}
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">ABS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="flightinfo.php">Flights</a></li>
        <li><a href="search.php">Search</a></li>
        <li><a href="myprofile.php">My Profile</a></li><li>
        <li><a href="bookings.php">Bookings</a></li>
        <li><a href="mytickets.php">My Tickets</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
        <button type="button" class="btn btn-default" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="images\glyphicons-basic-431-log-in@2x.png"></span> Login</button>
        <div id="id01" class="modal">

          <form class="modal-content animate" action="checkLogin.php" method="post">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="images\avatar2.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="Email"><b>Email</b></label>
              <input type="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address" placeholder="Enter Email" name="Email" required>

              <label for="Password"><b>Password</b></label>
              <input type="password" pattern=".{4,}" title="Four or more characters" placeholder="Enter Password" name="Password" required>

              <button type="submit">Login</button>
              <label>
                <input type="checkbox"  name="remember"> Remember me
              </label>
              <span class="psw"><a href="updatepassword1.php">Forgot password?</a></span>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
              <button13 type="button" class="adminbtn text-white"><a href="adminlogin.php"><center>Admin Login</center></a></button13>
            </div>
          </form>
        </div>
        </li>
        <li>
        <button type="button" class="btn btn-default" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><span src="images\glyphicons-basic-4-user@2x.png"></span> Register</button>

        <div id="id02" class="modal">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
          <form class="modal-content" method="POST" action="registrationworks.php">
            <div class="container">
              <h1>Sign Up</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>

              <label for="USER_ID"><b>UserID</b></label>
              <input type="text1"  placeholder="UserID" name="USER_ID" required>

              <label for="USERNAME"><b>User Name</b></label>
              <input type="text1" placeholder="Username" name="USERNAME" required>

              <label for="EMAIL"><b>Email</b></label>
              <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter valid Email" placeholder="Enter Email" name="EMAIL" required>

              <label for="PHONE"><b>Phone</b></label>
              <input type="text1" pattern=".{10,}" title="Please enter a valid phone number" placeholder="Enter Phone Number" name="PHONE" required>

              <label for="PASSWORD"><b>Password</b></label>
              <input type="password" pattern=".{4,}" title="Four or more characters" placeholder="Enter Password" name="PASSWORD" required>

              <label><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
              <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="registerbtn">Register</button>
              </div>
            </div>
          </form>
        </div>
      </li>




      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>AIRLINE BOOKING SYSTEM</h1>
    <p>Find the cheapest flight tickets</p>
  </div>
</div>

<div class="container-fluid bg-3 text-center">
  <h3><b>Popular destinations<b></h3><br><br>
  <div class="row">
    <div class="col-sm-3">
      <p>INDIA</p>
        <a href="https://en.wikipedia.org/wiki/India">
      <img src="images\india.jpg" class="img-responsive" style="width:100%" alt="Image">
      </a>
    </div>
    <div class="col-sm-3">
      <p>USA</p>
      <a href="https://en.wikipedia.org/wiki/United_States">
      <img src="images\newyork.jpg" class="img-responsive" style="width:100%" alt="Image">
    </a>
    </div>
  </a>
    <div class="col-sm-3">
      <p>LONDON</p>
      <a href="https://en.wikipedia.org/wiki/London">
      <img src="images\london.jpg" class="img-responsive" style="width:100%" alt="Image">
    </a>
    </div>
    <div class="col-sm-3">
      <p>RUSSIA</p>
      <a href="https://en.wikipedia.org/wiki/Russia">
      <img src="images\Russia.jpg" class="img-responsive" style="width:100%" alt="Image">
    </a>
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-sm-3">
      <p>MUNICH</p>
      <a href="https://en.wikipedia.org/wiki/Italy">
      <img src="images\italy.jpg" class="img-responsive" style="width:100%" alt="Image">
    </a>
    </div>
    <div class="col-sm-3">
      <p>AUSTRALIA</p>
      <a href="https://en.wikipedia.org/wiki/Australia">
      <img src="images\australia.jpeg" class="img-responsive" style="width:100%" alt="Image">
    </a>
    </div>
    <div class="col-sm-3">
      <p>AFRICA</p>
      <a href="https://en.wikipedia.org/wiki/Africa">
      <img src="images\southafrica.jpg" class="img-responsive" style="width:100%" alt="Image">
    </a>
    </div>
    <div class="col-sm-3">
      <p>RIO DE JANERIO</p>
      <a href="https://en.wikipedia.org/wiki/Rio_de_Janeiro ">
      <img src="images\rio.jpg" class="img-responsive" style="width:100%" alt="Image">
    </a>
    </div>
  </div>
</div><br><br>
</a>



<script type="text/javascript">
/*Get the modal*/
var modal = document.getElementById('id01');

/*When the user clicks anywhere outside of the modal, close it*/
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<footer class="container-fluid text-center">
  <p>Find the cheapest of flight tickets here at ABS only!</p>
</footer>

</body>
</html>
