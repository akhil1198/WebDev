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
  $UserID = $_POST['USER_ID'];
  $UserName = $_POST['USERNAME'];
  $Email = $_POST['EMAIL'];
  $Phone = $_POST['PHONE'];
  $Password = $_POST['PASSWORD'];

  $sql = "INSERT INTO users (USER_ID, USERNAME, EMAIL, PHONE, PASSWORD) VALUES ('$UserID','$UserName','$Email','$Phone','$Password')";

  if (mysqli_query($connection, $sql)) {
    $_SESSION['Email'] = $Email;
    echo "<script> location.href='myprofile.php'; </script>";
      exit;
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }
mysqli_close($connection);
}
?>
