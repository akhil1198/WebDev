<?php
  session_start();
  if(isset($_POST["Email"])&&isset($_POST["Password"])){
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    require_once './includes/dbconnect.php';
    $query = "SELECT EMAIL, PASSWORD FROM users WHERE EMAIL = '".$Email."' AND PASSWORD = '".$Password."'";
    $loginAction = mysqli_query($connection, $query);
    $numberRows = mysqli_num_rows($loginAction);
    if($numberRows == 1){
      $_SESSION["Email"] = $Email;
      header('Location:../myprofile.php');
    }else{
      /* if user does not have an account,*/
      header('Location:../redirectforregister.php');
        }
}
?>
