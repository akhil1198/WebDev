<?php
require_once 'includes/header.php';
require_once 'includes/dbconnect.php';


?>
    <div id="container">
      <br><br>
          <h1><center><?php echo "Hello!"?></center></h1>
            <form class="modal-content" method="POST" action="flightinfoupdate.php">
              <div class="container">
                <h>Update or Add flight schedules here.</h>
                <hr>

                <label for="FlightID"><b>FlightID</b></label>
                <input type="text" placeholder="Enter new FlightID" name="FlightID" required>

                <label for="Airlineid"><b>AirlineID</b></label>
                <input type="text" placeholder="Enter new AirlineID" name="Airlineid" required>

                <label for="Departureto"><b>Departureto</b></label>
                <input type="text" placeholder="Enter new location" name="Departureto" required>

                <label for="Departuredate"><b>Departuredate</b></label>
                <input type="text" placeholder="Enter new Departuredate" name="Departuredate" required>

                <label for="Numberofseats"><b>Number Of Seats</b></label>
                <input type="text" placeholder="Enter Number of seats" name="Numberofseats" required>

                <label for="Price"><b>Price</b></label>
                <input type="text" placeholder="Enter new Price" name="Price" required>
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                  <button type="submit" class="registerbtn">Update</button>
                </div>
              </div>
            </form>
          </div>
          <center><button12 type="button" class="btn btn-default btn-sm">
            <a href="index.php">
       <span class="glyphicon glyphicon-log-out"></span> Close
     </a></button12></center>

          </div>
<br><br>
<footer class="container-fluid text-center">
<p>Find the cheapest of flight tickets here at ABS only!</p>
</footer>


?>
