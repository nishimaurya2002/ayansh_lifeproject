<?php
ob_start();
  include 'include/header.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
         header('Location:index.php?nameerr=Name is required');
    }elseif(empty($_POST['email'])){
        header('Location:index.php?emailerr=Email is required');
    }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        header('location:index.php?emailerr=Please enter valid email');
    }elseif(empty($_POST['message'])){
        header('Location:index.php?msgerr=Message is required');
    }else{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $query="insert into enquiry(name,email,message) values('$name','$email','$message')";
    }
    if(mysqli_query($con,$query)){
        echo "<script>
          alert('Data add successfully');
          window.location.href='index.php';
        </script>";
      }
    }
    else{
        header('location:index.php');
    }
?>