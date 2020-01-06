<?php
    require_once('../includes/header.php');
    if(isset($_GET['blog_id'])){
        $blog_id = $_GET['blog_id'];
        $query = "SELECT * FROM blog_post WHERE id =".$blog_id.";";
        $find_blog = mysqli_query($CONN,$query);
        if(mysqli_num_rows($find_blog) == 0){
            die("<div class='alert alert-danger'>The Blog you're looking for doesn't exist or may have been moved or deleted.</div>");
        }
        $blog = mysqli_fetch_assoc($find_blog);
        $blog_title = $blog['title'];
        $blog_content = $blog['body'];
        $blog_likes = $blog['likes'];
        $blog_creator = $blog['user_id'];
        $blog_category = $blog['category'];
        $blog_created = $blog['created_time'];
    }else{
        die("<div class='alert alert-danger'>The page you are looking for does not exist.</div>");
    }
?>
<div class="row blog-header">
    <h1 class="display-4"><?php echo $blog_title ?></h1>
</div>
<div class="row blog-information">
        <div class="d-inline p-2"><?php echo $blog_created ?></div>
        <div class="d-inline p-2">
            <span class="badge badge-success">
                <?php
                    if($blog_category == "1"){
                        echo "Wildlife";
                    }else if($blog_category == "2"){
                        echo "Forest";
                    }else{
                        echo "Conservation";
                    }
                ?>
            </span>
        </div>
        <div class="d-inline p-2">
            <h5><small class="text-muted">Created By : <?php echo $blog_creator ?></small></h5>
        </div>
</div>
<div class="row blog-image">
    <?php
        $query_images = "SELECT url,alt FROM images WHERE blog_id=".$blog_id.";";
        $find_images = mysqli_query($CONN,$query_images);
     ?>
     <div id="blogImageCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="height:auto">
         <div class="carousel-inner">
            <?php
                $image = mysqli_fetch_assoc($find_images);
            ?>
            <div class="carousel-item active">
                <img src=<?php echo $image['url']?> class="d-block w-100" alt=<?php echo $image['alt']?>>
            </div>
            <?php
                while($image = mysqli_fetch_assoc($find_images)){
            ?>
                    <div class="carousel-item">
                        <img src=<?php echo $image['url']?> class="d-block w-100" alt=<?php echo $image['alt'] ?>>
                    </div>
            <?php
                }
            ?>
        </div>
        <a class="carousel-control-prev" href="#blogImageCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#blogImageCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
        <div class="btn-group" role="group" style="color:white">
            <a class="btn btn-success" href=<?php echo "http://koniandko/modules/openBlog.php?blog_id=".$blog_id ?>>Open</a>
            <a class="btn btn-success" href=<?php echo "http://koniandko/modules/likePost.php?blog_id=".$blog_id  ?>>Like</a>
            <a class="btn btn-success" href=<?php echo "http://koniandko/modules/readLater.php?blog_id=".$blog_id  ?>>Read Later</a>

            <?php
            if(isset($_SESSION['user_type']) && isset($_SESSION['uid'])){
                $type = $_SESSION['user_type'];
                $uid = $_SESSION['uid'];
                if($admin == 1){
            ?>
                    <a class="btn btn-danger" href=<?php echo "http://koniandko/modules/deleteBlog.php?blog_id=".$blog_id  ?>>Delete Blog</a>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="row blog-content">
    <div class="card">
        <div class="card-body">
            <div class="card-text">
                <?php echo $blog_content ?>
            </div>
        </div>
    </div>
</div>
<?php
    if(isset($_SESSION['uid'])){
?>
        <div class="row blog-add-comment">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="insertComment.php" method="post">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="user_name">User ID : </label>
                                <div class="col-sm-10">
                                    <input name="user_id" type="text" readonly class="form-control-plaintext" value=<?php echo $_SESSION['uid'] ?>>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="user_name">User Name : </label>
                                <div class="col-sm-10">
                                    <?php echo $_SESSION['user_id'] ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col-md-12">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Comment</span>
                                    </div>
                                    <textarea name="comment" class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="blog_id" value=<?php echo $blog_id ?>>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
 ?>
<div class="row blog-view-comment" id="comments">
    <div class="col-md-12">
        <h4>Comments</h4>
        <?php
            $query = "SELECT C.id as comment_id, C.comment, U.id as user_id, U.user_name FROM comments C INNER JOIN user as U ON U.id = C.user_id WHERE blog_id = {$blog_id}";
            $fetch = mysqli_query($CONN,$query);
            if(mysqli_num_rows($fetch) < 1){
        ?>
            <div class="card text-center">
                <div class="card-body">
                    <p class="card-text">No comments, Login to add your comment.</p>
                </div>
            </div>
        <?php
            }else{
                while($comment = mysqli_fetch_assoc($fetch)){
        ?>
                    <div class="card row">
                        <div class="card-body">
                            <strong class="card-title">User Name : <?php echo $comment['user_name'] ?></strong>
                            <p class="card-text">Comment : <?php echo $comment['comment'] ?></p>
                        </div>
                    <?php if(isset($_SESSION['uid']) && $_SESSION['uid'] == $comment['user_id']) {?>
                            <div class="card-footer">
                                <a class="btn btn-danger" href=<?php echo "http://koniandko/modules/deleteComment.php?comment_id=".$comment['comment_id']?>> Delete </a>
                            </div>
                    <?php
                          }
                     ?>
                    </div>
        <?php
                }
            }
         ?>
    </div>
</div>
<?php
    require_once('../includes/footer.php');
?>
