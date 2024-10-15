<?php
ob_start();
  include 'include/header.php';
  if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
         header('Location:contact.php?nameerr=Name is required');
    }elseif(empty($_POST['email'])){
        header('Location:contact.php?emailerr=Email is required');
    }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        header('location:contact.php?emailerr=Please enter valid email');
    }elseif(empty($_POST['message'])){
        header('Location:contact.php?msgerr=Message is required');
    }else{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $query="insert into contact(name,email,message) values('$name','$email','$message')";
    }
    if(mysqli_query($con,$query)){
        echo "<script>
          alert('Data add successfully');
          window.location.href='contact.php';
        </script>";
      }
  }
  else{
    header('location:contact.php');
  }
?>