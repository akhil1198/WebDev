<?php
session_start();
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">

  <!--Title-->
  <title>Koni & Ko. </title>
</head>
<body>
    <div class="header navbar bg-dark">
        <a class="navbar-brand  mb-0 h1" href="index.php" style="color:white">
            <img src="assets/images/logo/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Koni & Ko. Wildlife and Forest Blog
        </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width:100%; margin-bottom : 1vh;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="http://koniandko/index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="http://koniandko/library.php">Library</a>
                <a class="nav-item nav-link" href="http://koniandko/gallery.php">Gallery</a>
                <a class="nav-item nav-link" href="http://koniandko/about.php">About</a>

                <?php if(!isset($_SESSION['user_id'])){ ?>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#loginModal">
                    Login
                </button>

                <!-- Modal -->
                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <form action="http://koniandko/modules/loginPage.php" method="post">
                                    <div class="form-group">
                                        <label for="user_id">User ID</label>
                                        <input type="text" class="form-control" name="user_id" placeholder="Enter your User ID">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success text-right">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button style="margin-left:10px;" type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#signupModal">
                Signup
            </button>

            <!-- Modal -->
            <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <form action="http://koniandko/modules/signUpPage.php" method="post">
                                <div class="form-group">
                                    <label for="user_id">Pick a User Name</label>
                                    <input type="text" class="form-control" name="user_id" placeholder="Enter your User ID">
                                </div>
                                <div class="form-group">
                                    <label for="full_name">What is Your Full Name?</label>
                                    <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email ID</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2" name="type" id="type">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Are you a Blogger ? :
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="password">Choose a Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter a Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success text-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <?php } else{?>
            <?php
                if(isset($_SESSION['user_type'])){
                    $user_type = $_SESSION['user_type'];
                }else{
                    $user_type = 0;
                }
                switch($user_type){ default: break; ?>
                <?php case "1": ?>
                <!--Admin-->
                <a class="nav-item nav-link" href="http://koniandko/modules/manageUsers.php">Manage Users</a>
                <a class="nav-item nav-link" href="http://koniandko/modules/likedPosts.php">Liked Posts</a>
                <a class="nav-item nav-link" href="http://koniandko/modules/readLaterPosts.php">Read Later</a>
                <a class="nav-item nav-link" href="http://koniandko/modules/manageInfo.php">My Profile</a>
                <a class="nav-item nav-link" href="http://koniandko/modules/createBlog.php">Create a Blog</a>
                <?php break; ?>
                <?php case "2": ?>
                <!--Blogger-->
                <a class="nav-item nav-link" href="http://koniandko/modules/likedPosts.php">Liked Posts</a>
                <a class="nav-item nav-link" href="http://koniandko/modules/readLaterPosts.php">Read Later</a>
                <a class="nav-item nav-link" href="http://koniandko/modules/manageInfo.php">My Profile</a>
                <?php break; ?>
                <?php case "3": ?>
                <!--Regular User-->
                <a class="nav-item nav-link" href="http://koniandko/modules/likedPosts.php">Liked Posts</a>
                <a class="nav-item nav-link" href="http://koniandko/modules/readLaterPosts.php">Read Later</a>
                <a class="nav-item nav-link" href="http://koniandko/modules/manageInfo.php">My Profile</a>
                <?php break; ?>
            <?php } ?>
            <a class="btn btn-primary float-right" href="http://koniandko/modules/logout.php">
                Logout
            </a>
        <?php } ?>
        </div>
    </nav>

  <div class="container">
