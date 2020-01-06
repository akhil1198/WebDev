<?php
    require_once('includes/header.php');

    $query = "SELECT * FROM images";
    $result = mysqli_query($CONN,$query);

    if(!$result){
        die("<div class='alert alert-danger'>Some error occured.</div>");
    }

?>
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1 class="display-4">Gallery</h1>
            <p class="lead">This is the Gallery.....</p>
            <hr class="my-4">
            <p>Check out the gallery or the library for more information.</p>
            <a class="btn btn-success btn-lg" href="library" role="button">Go to the library</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="container" style="margin:auto">
            <?php
                while($image = mysqli_fetch_assoc($result)){
            ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <img src=<?php echo $image['url'] ?> class="card-img-top" alt=<?php echo $image['alt'] ?>>
                                <div class="card-body text-center">
                                    <?php
                                        $query = "SELECT title FROM blog_post WHERE id = ".$image['blog_id'];
                                        $execute = mysqli_query($CONN,$query);
                                        $blog = mysqli_fetch_assoc($execute);
                                        $title = $blog['title'];
                                     ?>
                                     <p class="card-title"><?php echo $title ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
             ?>
        </div>
    </div>
</div>
<?php
    require_once('includes/footer.php');
?>
