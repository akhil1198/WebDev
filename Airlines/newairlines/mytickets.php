<?php
require_once 'includes/header.php';
require_once 'includes/dbconnect.php';
if(isset( $_SESSION["Email"])){
}else {
  die ("<script> location.href='noauth.php'; </script>");
}
  $sql = "SELECT u.USERNAME, u.USER_ID, u.EMAIL, u.PHONE, ap.location, f.departuredate, f.flight_id, a.airlinename, b.bookingid
        FROM booking b, users u, flightinfo f, airport ap, airline a
        WHERE b.USER_ID = u.USER_ID
        AND b.airlineid = a.airlineid
        AND b.flight_id = f.flight_id
        AND f.departureto = ap.airportid"
        OR die (mysqli_error());
        $result = mysqli_query($connection, $sql);
        if(!$result){
          echo "no result fetched";
}$count = mysqli_num_rows($result);
?>
<div id="container">
  <h2><strong><center>Your Ticket</center></strong></h2>
  <br>
  <p><center>You can find your ticket and travel details here.</center></p>
  <br><br>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th><center>BookingID</center></th>
        <th><center>UserID</center></th>
        <th><center>Name</center></th>
        <th><center>Phone</center></th>
        <th><center>Email</center></th>
        <th><center>Date</center></th>
        <th><center>Destination</center></th>
        <th><center>Airline</center></th>
        <th><center>FlightID</center></th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><center><?php echo htmlspecialchars($row['bookingid']) ?></center></td>
        <td><center><?php echo htmlspecialchars($row['USER_ID']) ?></center></td>
        <td><center><?php echo htmlspecialchars($row['USERNAME']) ?></center></td>
        <td><center><?php echo htmlspecialchars($row['PHONE']) ?></center></td>
        <td><center><?php echo htmlspecialchars($row['EMAIL']) ?></center></td>
        <td><center><?php echo htmlspecialchars($row['departuredate']) ?></center></td>
        <td><center><?php echo htmlspecialchars($row['location']) ?></center></td>
        <td><center><?php echo htmlspecialchars($row['airlinename']) ?></center></td>
        <td><center><?php echo htmlspecialchars($row['flight_id']) ?></center></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
<br><br><br><br>
<footer class="container-fluid text-center">
  <p>Find the cheapest of flight tickets here at ABS only!</p>
</footer>
