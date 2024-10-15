<?php
  include 'include/header.php';

 ?>
<section class="loginform-section">
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-1 col-sm-3"></div>
             <div class="col-md-4  col-sm-3 login-outer">
                <div class="signup-img">
                       <img src="assets/img/signup.avif" alt="">
                </div>
             </div>
            <div class="col-md-6  col-sm-3">
            <div class="form-login">
                <h2 class="text-center mb-4">Signup Form</h2>
                <small class="text-success"><?=isset($_GET['success']) ? $_GET['success'] :''?></small>
                <small class="text-success"><?=isset($_GET['error']) ? $_GET['error'] :''?></small>
                <form action="postsignup.php" method="post">
                     <input type="text" name="name" placeholder="Name">
                     <small class="text-danger"><?=isset($_GET['nameerr']) ? $_GET['nameerr'] :''?></small>
                     <input type="text" name="email" placeholder="Email">
                     <small class="text-danger"><?=isset($_GET['emailerr']) ? $_GET['emailerr'] :''?></small>
                     <input type="text" name="phone" placeholder="Phone">
                     <small class="text-danger"><?=isset($_GET['phoneerr']) ? $_GET['phoneerr'] :''?></small>
                     <input type="password" name="password" placeholder="Password">
                     <small class="text-danger"><?=isset($_GET['passerr']) ? $_GET['passerr'] :''?></small>
                     <input type="password" name="c_password" placeholder="Confirm Password">
                     <small class="text-danger"><?=isset($_GET['cpasserr']) ? $_GET['cpasserr'] :''?></small>
                     <input type="submit" value="signup" class="login-submit  my-4">
                    <span><a href="#">Already Have an account?</a></span>
                    <b class="text-black"><a href="login.php">Login</a></b>
                </form>
            </div>
            </div>
            <div class="col-md-1  col-sm-3" ></div>
        </div>
</div>
 </section>
 <?php
  include 'include/footer.php';
 ?>