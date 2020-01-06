<?php
    require_once('../includes/header.php');
 ?>
<?php
    if(isset($_SESSION['user_id']) && isset($_SESSION['user_type'])){
        if(((int)$_SESSION['user_type']) > 2){
            die("<div class='alert alert-danger'>You are not authorised to insert new blogs.</div>");
        }
        $user_id = "'".$_SESSION['user_id']."'";
        if(isset($_POST['blog_title']) && isset($_POST['blog_content']) && isset($_POST['blog_category'])){
            if(strlen($_POST['blog_title']) == 0 || strlen($_POST['blog_title'])==0){
                die("<div class='alert alert-danger'>Insufficient Data</div>");
            }
            $blog_title = "'".$_POST['blog_title']."'";
            $blog_content = "'".$_POST['blog_content']."'";
            $blog_category = $_POST['blog_category'];
            $blog_user = "'".$_SESSION['user_id']."'";
            $query = "INSERT INTO blog_post (user_id,title,body,category,likes) VALUES (".$user_id.",".$blog_title.",".$blog_content.",".$blog_category.",0)";
            $insert = mysqli_query($CONN,$query);
            if(!$insert){
                die("<div class='alert alert-danger'>An error occured while inserting the data.</div>".mysqli_error($CONN));
            }
            echo "<div class='alert alert-success'> The content has been successfully added into the database.</div>";

            #Find the ID of the added blog
            $query = "SELECT id FROM blog_post WHERE title =".$blog_title." ORDER BY created_time DESC";
            $fetch = mysqli_query($CONN,$query);
            if(!$fetch){
                die("<div class='alert alert-danger'>Error</div>");
            }
            $blog = mysqli_fetch_assoc($fetch);
            $blog_id = (int) $blog['id'];
?>
    <!--On successfull insertion-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Insert Image
                </div>
                <div class="card-body">
                    <form action="http://koniandko/modules/upload.php" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="files[]" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" multiple data-show-upload="true" data-show-caption="true">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button name="submit"class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04" value=<?php echo $blog_id ?>>Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href=<?php echo "http://koniandko/modules/openBlog.php?blog_id=".$blog_id ?>>Continue without adding images.</a>
                </div>
            </div>
        </div>
    </div>
<?php
        }else{
            die("<div class='alert alert-danger'>No data received.</div>");
        }
    }else{
        die("<div class='alert alert-danger'>You are not authorised.</div>");
    }
 ?>
 <?php
     require_once('../includes/footer.php');
  ?>
