<?php
    require_once('../includes/header.php');

    $query = "SELECT * FROM blog_post B,read_later L WHERE L.blog_id = B.id  AND L.user_id  = ".$_SESSION['uid'];
    $result = mysqli_query($CONN,$query);

    if(!$result){
        die("<div class='alert alert-danger'>Some error occured.</div>");
    }
?>
<div class="row">
    <h1 class="display-2">Read Later Posts</h1>
</div>
<div class="row blogs">
    <div class=container>
        <?php
            if(mysqli_num_rows($result) == 0){
                echo "<div class='alert alert-secondary'> You haven't added any posts to your read later yet. </div>";
            }
            while($row = mysqli_fetch_assoc($result)){
         ?>
            <div class="row">
                <div class="card mb-3" style="width : 100%">
                    <div class="row no-gutters">
                        <!--<div class="col-md-4">
                            <?php
                                //$query_image = "SELECT * FROM images WHERE blog_id=".$row['id']." LIMIT 1";
                                //$find_image = mysqli_query($CONN,$query_image);
                                //$image = mysqli_fetch_assoc($find_image);
                            ?>
                            <img src=<?php //echo "../assets/images/".$image['blog_id']."/".$image['url'] ?> class="card-img" alt=<?php //echo $image['alt'] ?>>
                        </div>-->
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
                                <p class="card-text"><small class="text-muted"><?php echo "Created Time : ".$row['created_time'] ?></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" style="color:white">
                            <a class="btn btn-success" href=<?php echo "http://koniandko/modules/openBlog.php?blog_id=".$row['id'] ?>>Open</a>
                            <a class="btn btn-secondary" href=<?php echo "http://koniandko/modules/removeReadLater.php?blog_id=".$row['id'] ?>>Mark Read</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
         ?>
    </div>
</div>
<?php
    require_once('../includes/footer.php');
 ?>
