<?php
    require_once('../includes/header.php');
    if(isset($_GET['user_id'])){
      $queryNewInfo = "SELECT * FROM user WHERE id=".$_GET['user_id'];
      $actionOne = mysqli_query($CONN,$queryNewInfo);
      $row = mysqli_fetch_assoc($actionOne);
    }
    $previous = "javascript:history.go(-1)";
    if(isset($_SERVER['HTTP_REFERER'])) {
        $previous = $_SERVER['HTTP_REFERER'];
    }
    if(isset($_POST['updateParameter']) && isset($_POST['value'])){
      $updateParameter = $_POST['updateParameter'];
      $value = $_POST['value'];
      if($value == ''){
          echo "<div class='alert alert-warning'> Enter some value into the table. <a href='$back'>Click here to go back.</a></div>";
      }
      $updateQuery = "UPDATE user SET ".$updateParameter." = '".$value."' WHERE id = ".$_POST['user_id'];
      $action = mysqli_query($CONN,$updateQuery);
      if(!$action){
          echo "<div class='alert alert-warning'>ERROR ".mysqli_error($CONN)." <a href='http://koniandko/modules/manageInfo.php'>Click here to go back.</a></div>";
      }else{
        header("LOCATION:".$previous);
      }
    }
 ?>

<!--Content-->
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        Update Customer Form
      </div>
      <div class="card-body">
        <form action="updateInfo.php" method="post">
          <div class="form-group">
            <?php
              $query = "DESC user";
              $action = mysqli_query($CONN,$query);
              if(!$action){
                  echo "<div class='alert alert-warning'>ERROR ".mysqli_error($CONN)." <a href='http://koniandko/modules/manageInfo.php'>Click here to go back.</a></div>";
              }else{
             ?>
             <select class="form-control" name="updateParameter">
               <?php
                  $param = mysqli_fetch_assoc($action);
                  while($param = mysqli_fetch_assoc($action)){
                      if($param['Field'] == "user_name" || $param['Field'] == "type"){
                          if(isset($_SESSION['user_type'])){
                              if($_SESSION['user_type'] == 1){
                                  echo "<option>".$param['Field']."</option>";
                              }
                          }
                      }else{
                ?>
                <option><?php echo $param['Field'] ?></option>
                <?php
                }
              }
            }
                 ?>
             </select>
          </div>
           <div class="form-group">
             <label>Value</label>
             <input class="form-control" type="text" name="value">
           </div>
           <div class="form-group">
             <button class="btn btn-primary" type="submit" name="user_id" value=<?php echo $_GET['user_id']; ?> >Submit</button>
           </div>
        </form>
      </div>
    </div>
  </div>
</div>
 <?php
     require_once('../includes/footer.php');
  ?>
