<?php
ob_start();
  include 'include/header.php';
  $usererr=$passerr=$final='';
  if($_SERVER['REQUEST_METHOD']=='POST'){
   if(empty($_POST['username'])){
        $usererr="Please Enter Your Username";
   }elseif(!filter_var($_POST['username'],FILTER_VALIDATE_EMAIL)){
         $usererr="Invalid Username";
   }elseif(empty($_POST['password'])){
    $passerr="Please Enter Your Password";
   }else{
       $user=$_POST['username'];
       $pass=$_POST['password'];
       $sql="select * from users where email='$user' && password='$pass' ";
       $result=mysqli_query($con , $sql);
       if(mysqli_num_rows($result)>0){
        // print_r($result);
        $data=mysqli_fetch_assoc($result);
        $_SESSION['id']=$data['id'];
        $_SESSION['email']=$data['email'];
        $_SESSION['name']=$data['name'];
        $_SESSION['role']=$data['role'];
        if($data['role']==0){
            header('location:admin/dashboard.php');
        }else{
            header('location:index.php');
       }
        }
   }
  
  }
  ?>
<section class="loginform-section">
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-1 col-sm-3"></div>
             <div class="col-md-4  col-sm-3 login-outer">
                <div class="login-img">
                       <img src="assets/img/login.jpg" alt="">
                </div>
             </div>
            <div class="col-md-6  col-sm-3">
            <div class="form-login">
                <h2 class="text-center mb-4">Login Form</h2>

                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                     <input type="text" name="username" placeholder="Username">
                     <small class="text-danger"><?=$usererr?></small>
                     <input type="password" name="password" placeholder="Password">
                     <small class="text-danger"><?=$passerr?></small>
                     <input type="submit" class="login-submit my-4" name="login" value="login">
                    <span><a href="signup.php">Have a create account</a></span>
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