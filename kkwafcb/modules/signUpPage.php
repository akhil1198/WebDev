<?php
    require_once('../includes/header.php');

    if(isset($_POST['user_id'])&&isset($_POST['full_name'])&&isset($_POST['type'])&&isset($_POST['email'])&&isset($_POST['password'])){
        $query = "SELECT * FROM user WHERE id = '".$_POST['user_id']."'";
        $find_users = mysqli_query($CONN,$query);
        if(mysqli_num_rows($find_users)>0){
            die("<div class='alert alert-danger'>User Name already exists</div>");
        }
        $query = "SELECT * FROM user WHERE email = '".$_POST['email']."'";
        $find_users = mysqli_query($CONN,$query);
        if(mysqli_num_rows($find_users)>0){
            die("<div class='alert alert-danger'>Email already exists</div>");
        }

        $user_id = "'".$_POST['user_id']."'";
        $full_name = "'".$_POST['full_name']."'";
        $email = "'".$_POST['email']."'";
        $password = "'".$_POST['password']."'";
        $type = $_POST['type'];

        $query = "INSERT INTO user(user_name,full_name,email,password,type) VALUES (".$user_id.",".$full_name.",".$email.",".$password.",".$type.")";
        $insert = mysqli_query($CONN,$query);
        echo "<div style='margin-top:1vh;' class='alert alert-success'> Sign Up Successful, You need to login to continue -> <a class='btn btn-success' href='../index.php'>Continue</a></div>";

        /*
        //sending an email on successful login
        require '../PHPMailerAutoload.php';
        require 'credentials.php';
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'nayaksgovind@gmail.com';                 // SMTP username
        $mail->Password = 'Chilli@2018!';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('nayaksgovind@gmail.com', 'Koni and Ko. Wildlife and Forest Blog');
        $mail->addAddress($user['email'], $user['full_name']);     // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Signup Successful';
        $mail->Body    = 'You have registered to Koni and Ko. Wildlife and Forest Blog';
        $mail->AltBody = 'You have registered to Koni and Ko. Wildlife and Forest Blog';

        if(!$mail->send()) {
            //echo 'Message could not be sent.';
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            //echo 'Message has been sent';
        }
        */
    }else{
        die("<div class='alert alert-danger'>Error</div>");
    }
 ?>

 <?php
     require_once('../includes/footer.php');
  ?>
