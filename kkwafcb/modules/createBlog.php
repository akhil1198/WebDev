<?php
    require_once('../includes/header.php');
 ?>
<div class="row">
    <div class="col-md-12 text-center">
        <h3>Create a Blog</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="insertBlog.php" method="post">
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Title</span>
                    </div>
                    <input type="text" name="blog_title" class="form-control" placeholder="Add a title for your blog.." aria-label="Title" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="form-group">
                <label for="content_area">Enter blog content..</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Text</span>
                    </div>
                    <textarea style="height:40vh;" class="form-control" name="blog_content" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="blog_category" class="form-control">
                    <option value="1">Wildlife</option>
                    <option value="2">Forest</option>
                    <option value="3">Conservation</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
 <?php
    require_once('../includes/footer.php');
  ?>
