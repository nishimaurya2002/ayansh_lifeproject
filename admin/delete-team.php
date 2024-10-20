<?php
include('../config/dbconnect.php');
if(isset($_GET['id'])){
 $id=$_GET['id'];
 $sql="Delete from team where id=$id";
 if(mysqli_query($con,$sql)){
    echo "<script>
             alert('Your Data deleted successfully');
           window.location.href='team.php';
        </script>";
 }
}else{
    header('location:index.php');
}
?>