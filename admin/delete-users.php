<?php
include('../config/dbconnect.php');
if(isset($_GET['id'])){
 $id=$_GET['id'];
 $sql="Delete from users where id=$id";
 if(mysqli_query($con,$sql)){
    echo "<script>
             alert('Your Data deleted successfully');
           window.location.href='users.php';
        </script>";
 }
}else{
    header('location:index.php');
}
?>