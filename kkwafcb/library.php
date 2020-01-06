<?php
    require_once('includes/header.php');

    $query = "SELECT * FROM blog_post ORDER BY created_time";
    $result = mysqli_query($CONN,$query);

    if(!$result){
        die("<div class='alert alert-danger'>Some error occured.</div>");
    }
?>
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1 class="display-4">Library</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php
            if(isset($_SESSION['user_type']) && isset($_SESSION['uid'])){
                $type = $_SESSION['user_type'];
                $uid = $_SESSION['uid'];
                if($type == "1"){
                    $admin = 1;
                }else{
                    $admin = 0;
                }
            }
        ?>
    </div>
</div>
<div class="row blogs">
        <?php
            while($row = mysqli_fetch_assoc($result)){

         ?>
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <?php
                                    $query_image = "SELECT * FROM images WHERE blog_id=".$row['id']." LIMIT 1";
                                    $find_image = mysqli_query($CONN,$query_image);
                                    $image = mysqli_fetch_assoc($find_image);
                                ?>
                                <img src=<?php echo $image['url']?> class="card-img" alt=<?php echo $image['alt'] ?>>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><h1><?php echo $row['title'] ?></h1></h5>
                                    <p class="card-text"><span class="badge badge-success">
                                        <?php
                                            if($row['category'] == "1"){
                                                echo "Wildlife";
                                            }else if($row['category'] == "2"){
                                                echo "Forest";
                                            }else{
                                                echo "Conservation";
                                            }
                                        ?>
                                    </span></p>
                                    <p class="card-text"><small class="text-muted"><?php echo "Created by : ".$row['user_id'] ?></small></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="btn-group" role="group" style="color:white">
                                <a class="btn btn-success" href=<?php echo "http://koniandko/modules/openBlog.php?blog_id=".$row['id'] ?>>Open</a>
                                <a class="btn btn-success" href=<?php echo "http://koniandko/modules/likePost.php?blog_id=".$row['id'] ?>>Like</a>
                                <a class="btn btn-success" href=<?php echo "http://koniandko/modules/readLater.php?blog_id=".$row['id'] ?>>Read Later</a>

                                <?php
                                if(isset($_SESSION['user_type']) && isset($_SESSION['uid'])){
                                    $type = $_SESSION['user_type'];
                                    $uid = $_SESSION['uid'];
                                    if($admin == 1){
                                ?>
                                        <a class="btn btn-danger" href=<?php echo "http://koniandko/modules/deleteBlog.php?blog_id=".$row['id'] ?>>Delete Blog</a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
         ?>
</div>
<?php
    require_once('includes/footer.php');
 ?>
