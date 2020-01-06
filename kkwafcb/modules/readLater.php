<?php
    require_once('../includes/header.php');
    if(isset($_SESSION['user_id']) && isset($_SESSION['user_type'])){
        if(isset($_GET['blog_id'])){
            $blog_id = $_GET['blog_id'];
            $user_id = $_SESSION['uid'];
            $query = 'SELECT * FROM read_later WHERE user_id = '.$user_id.' AND blog_id = '.$blog_id;
            echo $query;
            $execute = mysqli_query($CONN,$query);
            echo mysqli_num_rows($execute);
            if(mysqli_num_rows($execute) > 0){
                header('LOCATION:http://koniandko/library.php');
            }
            $query = 'INSERT INTO read_later VALUES ('.$user_id.','.$blog_id.')';
            $execute = mysqli_query($CONN,$query);
            if(!$execute){
                die("<div class='alert alert-danger'>Error Occured <a class='btn btn-danger' href='http://koniandko/index.php'>Go Home</a></div>");
            }
            header('LOCATION:http://koniandko/library.php');
        }else{
            die("<div class='alert alert-danger'>Invalid. <a class='btn btn-danger' href='http://koniandko/index.php'>Go Home</a></div>");
        }
    }else{
        die("<div class='alert alert-danger'>You have to be logged in. <a class='btn btn-danger' href='http://koniandko/index.php'>Go Home</a></div>");
    }
 ?>
 <?php
     require_once('../includes/footer.php');
?>
