<?php
    require_once('../includes/header.php');
 ?>
<?php
    $previous = "javascript:history.go(-1)";
    if(isset($_SERVER['HTTP_REFERER'])) {
        $previous = $_SERVER['HTTP_REFERER'];
    }
    if(isset($_SESSION['user_id']) && isset($_SESSION['user_type'])){
        if(isset($_GET['user_id'])){
            $blog_id = $_GET['blog_id'];
            $query = "DELETE FROM user WHERE id = ".$_GET['user_id'];
            $execute = mysqli_query($CONN,$query);
            if(!$execute){
                die("<div class='alert alert-danger'>Error Occured <a class='btn btn-danger' href='http://koniandko/index.php'>Go Home</a></div>");
            }
            header('LOCATION:'.$previous);
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
