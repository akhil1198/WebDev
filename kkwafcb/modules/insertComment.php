<?php
    require_once('../includes/header.php');
 ?>
 <div class="row">
     <div class="col-md-12">
         <?php
            if(isset($_POST['blog_id']) && isset($_POST['comment']) && isset($_POST['user_id'])){
                if(strlen($_POST['comment']) == 0){
                    die("<div class='alert alert-warning'>Your comment was empty</div>");
                }else{
                    $user_id = $_POST['user_id'];
                    $blog_id = $_POST['blog_id'];
                    $query = "INSERT INTO comments (user_id,blog_id,comment) VALUES ($user_id,$blog_id,'".$_POST['comment']."')";
                    $insertQ = mysqli_query($CONN,$query);
                    if(!$insertQ){
                        die("<div class='alert alert-warning'>Error while inserting.</div>");
                    }
                    header('LOCATION:http://koniandko/modules/openBlog.php?blog_id='.$_POST['blog_id']);
                }
            }else{
                die("<div class='alert alert-danger'>Sorry, there seems to be some error.</div>");
            }
          ?>
     </div>
 </div>
 <?php
    require_once('../includes/footer.php');
?>
