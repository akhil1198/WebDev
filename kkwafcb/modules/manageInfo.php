<?php
    require_once('../includes/header.php');
    if(isset($_SESSION['uid'])){
        $query = "SELECT * FROM user WHERE id = ".$_SESSION['uid'];
        $result = mysqli_query($CONN,$query);
        if(!$result){
            die("<div class='alert alert-danger'>Error occured.</div>");
        }
        $user = mysqli_fetch_assoc($result);
        $user_name = $user['user_name'];
        $full_name = $user['full_name'];
        $email = $user['email'];
        $type = $user['type'];
    }
 ?>
 <div class="row">
     <div class="col-md-12">
         <div class="jumbotron">
             <h1 class="display-4">Hello, <?php echo $full_name ?></h1>
             <p class="lead">Welcome to your profile. You can view and edit your information.</p>
             <hr class="my-4">
             <a class="btn btn-primary btn-lg" href="http://koniandko/index.php" role="button">Home</a>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-md-12">
         <div class="card">
             <div class="card-body">
                 <div class="card-text">
                     <p>Full Name : <?php echo $full_name ?></p>
                     <p>User Name : <?php echo $user_name ?></p>
                     <p>Email : <?php echo $email?></p>
                     <p>User Type : <?php
                        if($type == "1"){
                            echo "Admin";
                        }else if($type == "2"){
                            echo "Blogger";
                        }else{
                            echo "Normal User";
                        }
                      ?></p>
                 </div>
             </div>
             <div class="card-footer">
                 <a href=<?php echo "http://koniandko/modules/updateInfo.php?user_id=".$user['id'] ?>>Update Info</a>
                 <a href=<?php echo "http://koniandko/modules/deleteAccount.php?user_id=".$user['id'] ?>>Delete</a>
             </div>
         </div>
     </div>
 </div>
 <?php
     require_once('../includes/footer.php');
  ?>
