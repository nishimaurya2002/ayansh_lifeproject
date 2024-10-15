<?php
ob_start();
include('layout/header.php');
$nameerr = $priceerr = $imageerr = $descriperr = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        $nameerr = "*Product field is required";
    }
    elseif(empty($_FILES['image']['name'])){
        $imageerr = "*Image field is required";
    }
    elseif(empty($_POST['description'])){
        $descriperr = "*Description field is required";
    }else{
        $name = $_POST['name'];
        $descrip = $_POST['description'];
        $imgname = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($temp_name, 'services/' . $imgname);
        // $imgname='services/'.$imgname;

        $query = "INSERT INTO services(name, image, description) VALUES('$name', '$imgname', '$descrip')";
        if(mysqli_query($con, $query)){
            echo "<script>
                      alert('Services data added successfully');
                      window.location.href='services.php';
                  </script>";
        } else {
            echo "<script>alert('Failed to add data');</script>";
        }
    }
}
?>

<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Service Forms</h4>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Service Form</div>
                        </div>
                        <div class="card-body">
                            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    <small class="text-danger"><?=$nameerr?></small>
                                </div>
                                <div class="form-group">
                                    <label for="file">Image</label>
                                    <input type="file" class="form-control" id="file" name="image">
                                    <small class="text-danger"><?=$imageerr?></small>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Description</label>
                                    <textarea class="form-control" id="desc" rows="4" name="description" placeholder="Enter your message"></textarea>
                                    <small class="text-danger"><?=$descriperr?></small>
                                </div>			
                                <div class="card-action">
                                    <button type="submit" name="submit" class="btn btn-success">Submit</button>												
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>
