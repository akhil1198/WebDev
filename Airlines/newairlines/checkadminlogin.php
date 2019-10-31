<?php
  session_start();
  if(isset($_POST["AEmail"])&&isset($_POST["Password"])){
    $AEmail = $_POST["AEmail"];
    $Password = $_POST["Password"];

    require_once './includes/dbconnect.php';
    $query = "SELECT adminemail, adminpassword FROM admin WHERE adminemail = '".$AEmail."' AND adminpassword = '".$Password."'";
    $loginAction1 = mysqli_query($connection, $query);
    $numberRows = mysqli_num_rows($loginAction);
    if($query){
      header('Location:../adminprofile.php');
    }else{
      /* if user does not have an account,*/
      header('Location:../redirectforregister.php');
        }
}
?>
