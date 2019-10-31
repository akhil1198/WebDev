<?php
require_once 'includes/header.php';
require_once 'includes/dbconnect.php';

if(isset($_POST['Search']))
{
  $departureto = $_POST["location"];
  $departuredate = $_POST["departuredate"];
  $departureto = htmlspecialchars($departureto);
  $departuredate = htmlspecialchars($departuredate);
  $sql1 = "call flightsearch('".$departureto."','".$departuredate."')";
  $result = mysqli_query($connection, $sql1)  OR die(mysql_error());
  if(!$result)
  {
    echo "no results";
  }
  $count = mysqli_num_rows($result);
}
?>
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-lg-2 sidenav">

    </div>

  <div class="container-fluid">
    <h2><strong>Search Results</strong></h2>
    <br>
    <p><center><?php echo "Your search for " . $_POST['location'] . " for the date " . $_POST['departuredate'] . " have the following results"?></center></p>
    <br><br>
    <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th><center>Airline</center></th>
          <th><center>Flight ID</center></th>
          <th><center>Departure To</center></th>
          <th><center>Departure Date</center></th>
          <th><center>Number of seats</center></th>
          <th><center>Price</center></th>
        </tr>

      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><center><?php echo htmlspecialchars($row['airlinename']) ?></center></td>
          <td><center><?php echo htmlspecialchars($row['flight_id']) ?></center></td>
          <td><center><?php echo htmlspecialchars($row['location']) ?></center></td>
          <td><center><?php echo htmlspecialchars($row['departuredate']) ?></center></td>
          <td><center><?php echo htmlspecialchars($row['no_of_seats']) ?></center></td>
          <td><center><?php echo htmlspecialchars($row['price']) ?></center></td>
        </tr>
      <?php endwhile; ?>
      </tbody>
    </table>

  </div>
</div>
<br><br>
<footer class="container-fluid text-center">
  <p>Find the cheapest of flight tickets here at ABS only!</p>
</footer>
