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
  $BookingID = $_POST['bookingid'];
  $USER_ID = $_POST['USER_ID'];
  $airlineid = $_POST['airlineid'];
  $flight_id = $_POST['flight_id'];

  $sql = "INSERT INTO `booking`(`USER_ID`, `airlineid`, `flight_id`) VALUES ('$USER_ID','$airlineid','$flight_id')";

  if (mysqli_query($connection, $sql)) {
    echo "<script> location.href='mytickets.php'; </script>";
      exit;
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
mysqli_close($connection);
}
?>
