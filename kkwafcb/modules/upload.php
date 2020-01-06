<?php
require_once("../includes/header.php");
// Check if form was submited
if(isset($_POST['submit'])) {

    // Configure upload directory and allowed file types
    $upload_dir = '../assets/images/blogs'.'/';
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif');

    // Define maxsize for files i.e 2MB
    $maxsize = 10 * 1024 * 1024;

    // Checks if user sent an empty form
    if(!empty(array_filter($_FILES['files']['name']))) {

        // Loop through each file in files[] array
        foreach ($_FILES['files']['tmp_name'] as $key => $value) {

            $file_tmpname = $_FILES['files']['tmp_name'][$key];
            $file_name = $_FILES['files']['name'][$key];
            $file_size = $_FILES['files']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

            // Set upload file path
            $filepath = $upload_dir.$file_name;

            // Check file type is allowed or not
            if(in_array(strtolower($file_ext), $allowed_types)) {

                // Verify file size - 2MB max
                if ($file_size > $maxsize)
                    echo "Error: File size is larger than the allowed limit.";

                // If file with name already exist then append time in
                // front of name of the file to avoid overwriting of file
                if(file_exists($filepath)) {
                    $filepath = $upload_dir.time().$file_name;

                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        echo "<div class='alert alert-success'> {$file_name} successfully uploaded. </div>";
                        $blog_id = $_POST['submit'];
                        $url = "'".$filepath."'";
                        $alt = "'".$file_name."'";
                        $query = "INSERT INTO images (blog_id,url,alt) VALUES ({$blog_id},{$url},{$alt})";
                        $insert = mysqli_query($CONN,$query);
                        if(!$insert){
                            die("<div class='alert alert-danger'> An error occured.".mysqli_error($CONN));
                        }
                    }
                    else {
                        echo "Error uploading {$file_name} <br />";
                    }
                }
                else {

                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        echo "<div class='alert alert-success'> {$file_name} successfully uploaded. </div>";
                        $blog_id = $_POST['submit'];
                        $url = "'".$filepath."'";
                        $alt = "'".$file_name."'";
                        $query = "INSERT INTO images (blog_id,url,alt) VALUES ({$blog_id},{$url},{$alt})";
                        $insert = mysqli_query($CONN,$query);
                        if(!$insert){
                            die("<div class='alert alert-danger'> An error occured.".mysqli_error($CONN));
                        }
                    }
                    else {
                        echo "Error uploading {$file_name} <br />";
                    }
                }
            }
            else {

                // If file extention not valid
                echo "Error uploading {$file_name} ";
                echo "({$file_ext} file type is not allowed)<br / >";
            }
        }
    }
    else {

        // If no files selected
        echo "<div class='alert alert-danger'>No files selected.</div>";
    }
?>
<div class="row">
    <div class="col-md-12">
        <a href="http://koniandko/index.php">Go Home</a>
    </div>
</div>
<?php
}
    require_once("../includes/footer.php");
 ?>
