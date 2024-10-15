<?php
  include 'config/dbconnect.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
    // print_r($_POST);
    // die();
     if(isset($_POST['name'])){
        if(empty($_POST['name'])){
           header('Location:signup.php?nameerr=*please Enter Your Name');
        }
        elseif(empty($_POST['email'])){
            header('Location:signup.php?emailerr=*please Enter Your Email');
        }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            header('Location:signup.php?emailerr=*Invalid Email');
        }elseif(empty($_POST['phone'])){
            header('Location:signup.php?phoneerr=*please Enter Your Phone Number');
        }elseif(empty($_POST['password'])){
            header('Location:signup.php?passerr=*please Enter Your Password');
        }elseif(empty($_POST['c_password'])){
            header('Location:signup.php?cpasserr=*please Enter Your confirm Password');
        }elseif($_POST['c_password']!=$_POST['password']){
           header('Location:signup.php?cpasserr=*Your given not matched with actual password');
        }else{
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $password=$_POST['password'];
            $sql="insert into users (name,email,phone,password,role) 
            values('$name','$email','$phone','$password',0)";
            if(mysqli_query($con,$sql)){
                header('Location:signup.php?success = Date send successfully');
            }
           
       }
 }
}
 else{
   header('Location:signup.php?error = Invalid Request');
}
    
?>

