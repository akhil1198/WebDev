<?php
//connection parameters
$URL = "localhost";
$userName = "root";
$password = "root123";
$dbName = "airlines";

$connection = mysqli_connect($URL,$userName,$password,$dbName);

if(!$connection){
  die("failed to est connection" . mysqli_connect_error());
}else{
  //echo "connection successful";
}
?>
