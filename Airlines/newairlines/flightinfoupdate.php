<?php
session_start();
$URL = "localhost";
$userName = "root";
$password = "root123";
$dbName = "airlines";

$connection = mysqli_connect($URL,$userName,$password,$dbName);

if(!$connection){
  die("failed to est connection" . mysqli_connect_error());
}else{
  //echo "connection successful";
  $FlightID = $_POST['FlightID'];
  $Airlineid = $_POST['Airlineid'];
  $Depatureto = $_POST['Departureto'];
  $Departuredate = $_POST['Departuredate'];
  $Numberofseats = $_POST['Numberofseats'];
  $Price = $_POST['Price'];
  $sql = "INSERT INTO `flightinfo`(`flight_id`, `airlineid`, `departureto`, `departuredate`, `no_of_seats`, `price`) VALUES ('$FlightID','$Airlineid','$Depatureto','$Departuredate','$Numberofseats','$Price')";

  if (mysqli_query($connection, $sql)) {
    $_SESSION['Email'] = $Email;
    echo "<script> location.href='flightinfo.php'; </script>";
      exit;
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
mysqli_close($connection);
}
?>
