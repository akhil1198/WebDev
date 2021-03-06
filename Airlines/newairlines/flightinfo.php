<?php
  require_once 'includes/header.php';
  require_once 'includes/dbconnect.php';
  $sql = "SELECT F.flight_id as flight,A.airlinename as airline,AP.location,F.departuredate,F.no_of_seats,F.price
          FROM flightinfo F, airport AP, airline A
          WHERE F.airlineid = A.airlineid
          AND F.departureto = AP.airportid
          ORDER BY departuredate";
  $result = mysqli_query($connection, $sql);
  if(!$result){
    echo "Dead".mysqli_error($connection);
  }

 ?>
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-lg-2 sidenav">

    </div>

  <div class="container-fluid">
    <h2><strong>Schedules</strong></h2>
    <br>
    <p>The table shows flight schedules for the next 3 days.</p>
    <br><br>
    <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th><center>Flight ID</center></th>
          <th><center>Airline</center></th>
          <th><center>Departure To</center></th>
          <th><center>Departure Date</center></th>
          <th><center>Number of seats</center></th>
          <th><center>Price</center></th>
        </tr>

      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><center><?php echo htmlspecialchars($row['flight']) ?></center></td>
          <td><center><?php echo htmlspecialchars($row['airline']) ?></center></td>
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
</body>
</html>
