<?php


  require_once 'includes/header.php';
  require_once 'includes/dbconnect.php';
  if(isset( $_SESSION["Email"])){
  }else {
    die ("<script> location.href='noauth.php'; </script>");
  }
  if (isset($_SESSION["Email"])){
    $Email = $_SESSION["Email"];
  }else{
    die( "die" );
  }


  $sql = "SELECT  USER_ID,
                  UserName,
                  Phone,
                  Email
             FROM users

            WHERE Email='".$Email."'
            ORDER BY UserName";
$result = mysqli_query($connection,$sql);
if(!$result){
  echo "no result fetched";
}
?>
      <div id="container">
        <br><br>
            <h1><center><?php echo "Welcome, " . $_SESSION['Email'] . "!"?></center></h1>
            <br><br>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <p><center><strong>Name</strong> : <?php echo htmlspecialchars($row['UserName']) ?></center></p>
                        <p><center><strong>User ID</strong> : <?php echo htmlspecialchars($row['USER_ID']); ?></center></p>
                        <p><center><strong>Phone</strong> : <?php echo htmlspecialchars($row['Phone']); ?></center></p>
                        <p><center><strong>Email</strong> : <?php echo htmlspecialchars($row['Email']); ?></center></p>
                    <?php endwhile; ?>
                    <br><br>
            <center><button12 type="button" class="btn btn-default btn-sm">
              <a href="logout.php">
         <span class="images\glyphicons-basic-432-log-out@2x.png"></span> Log out
       </a></button12></center>

            </div>
<br><br>
<footer class="container-fluid text-center">
  <p>Find the cheapest of flight tickets here at ABS only!</p>
</footer>
