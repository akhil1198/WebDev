<?php
    require_once('../includes/header.php');
?>
<div class="row">
    <div class="col-md-12">
        <?php
            //Querying all the users in the database
            $query = "SELECT * FROM user WHERE type != 1";
            $result = mysqli_query($CONN,$query);
            if(!$result){
                die("<div class='alert alert-warning'>Query Failed</div>");
            }
            while($user = mysqli_fetch_assoc($result)){
        ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                User Name : <?php echo $user['user_name'] ?>
                            </div>
                            <div class="card-text">
                                User ID : <?php echo $user['id'] ?>
                            </div>
                            <div class="card-text">
                                Email : <?php echo $user['email'] ?>
                            </div>
                            <div class="card-text">
                                Full Name : <?php echo $user['full_name'] ?>
                            </div>
                            <div class="card-text">
                                Type : Normal User
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-secondary" href=<?php echo "http://koniandko/modules/updateInfo.php?user_id=".$user['id'] ?>>Update</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                              Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">DELETE !!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Are you sure you want to delete the user ?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-danger" href=<?php echo "http://koniandko/modules/deleteUser.php?user_id=".$user['id'] ?>>Delete</a>
                                  </div>
                                </div>
                              </div>
                            </div>
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
