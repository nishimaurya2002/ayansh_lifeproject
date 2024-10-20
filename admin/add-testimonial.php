<?php
ob_start();
include('layout/header.php');
$nameerr = $imageerr = $descriperr = $titleerr='';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        $nameerr = "*Name field is required";
    }
    elseif(empty($_POST['title'])){
       $titleerr="*Title field is required";
    }
    elseif(empty($_FILES['image']['name'])){
        $imageerr = "*Image field is required";
    }
    elseif(empty($_POST['description'])){
        $descriperr = "*Description field is required";
    }else{
        $name = $_POST['name'];
        $title=$_POST['title'];
        $descrip = $_POST['description'];
        $imgname = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($temp_name, 'testimonial/' . $imgname);
        // $imgname='testimonial/'.$imgname;

        $query = "INSERT INTO testimonial(name,title,image,description) VALUES('$name','$title', '$imgname', '$descrip')";
        if(mysqli_query($con, $query)){
            echo "<script>
                      alert('testimonial data added successfully');
                      window.location.href='testimonial.php';
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
            <h4 class="page-title">Testimonials Forms</h4>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Testimonials Form</div>
                        </div>
                        <div class="card-body">
                            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    <small class="text-danger"><?=$nameerr?></small>
                                </div>
                                <div class="form-group">
                                    <label for="name">Title</label>
                                    <input type="text" class="form-control" id="name" name="title">
                                    <small class="text-danger"><?=$titleerr?></small>
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
