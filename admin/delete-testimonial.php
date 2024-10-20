<?php
include('../config/dbconnect.php');
if(isset($_GET['id'])){
 $id=$_GET['id'];
 $sql="Delete from testimonial where id=$id";
 if(mysqli_query($con,$sql)){
    echo "<script>
             alert('Your Data deleted successfully');
           window.location.href='testimonial.php';
        </script>";
 }
}else{
    header('location:index.php');
}
?>