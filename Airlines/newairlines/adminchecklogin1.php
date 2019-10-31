<?php
if(isset( $_SESSION["AEmail"])){
    header('Location:../adminprofile.php');
}else {
  die ("<script> location.href='adminlogin.php'; </script>");
}
?>
