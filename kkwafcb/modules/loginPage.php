<?php
    require_once("../includes/header.php");
    if(isset($_POST['user_id']) && isset($_POST['password'])){
        $user_id = $_POST['user_id'];
        $query = "SELECT * FROM user WHERE user_name = '".$user_id."' AND password = '".$_POST['password']."'";
        $get_user = mysqli_query($CONN,$query);
        if(!$get_user){
            die("<div class='alert alert-danger'>Incorrect Credentials</div>");
        }else{
            $_SESSION['user_id'] = $user_id;
            $user = mysqli_fetch_assoc($get_user);
            $_SESSION['uid'] = $user['id'];
            $_SESSION['user_type'] = $user['type'];
            $_SESSION['email_id'] = $user['email'];
            $_SESSION['logged_in'] = 1;
            echo "<div style='margin-top:1vh;' class='alert alert-success'> Login Successful -> <a class='btn btn-success' href='../index.php'>Continue</a></div>";
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

            $mail->Subject = 'Login Successful';
            $mail->Body    = 'You have logged in to Koni and Ko. Wildlife and Forest Blog';
            $mail->AltBody = 'You have logged in to Koni and Ko. Wildlife and Forest Blog';

            if(!$mail->send()) {
                //echo 'Message could not be sent.';
                //echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                //echo 'Message has been sent';
            }
            */
        }
    }else{
        die("<div class='alert alert-danger'>Some error occured.</div>");
    }
 ?>
 <?php
    require_once("../includes/footer.php");
  ?>
