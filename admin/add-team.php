<?php
ob_start();
include('layout/header.php');
$nameerr = $imageerr=$titleerr=$linkdinerr=$twittererr=$instaerr='';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        $nameerr = "*Name field is required";
    }
    elseif(empty($_POST['title'])){
       $titleerr="*Title field is required";
    }
    elseif(empty($_POST['linkdin'])){
        $linkdinerr="*linkdin field is required";
    }  
     elseif(empty($_POST['twitter'])){
        $twittererr="*Twitter field is required";
    }
    elseif(empty($_POST['insta'])){
        $instaerr="*Instagram field is required";
    }
    elseif(empty($_FILES['image']['name'])){
        $imageerr = "*Image field is required";
    }else{
        $name = $_POST['name'];
        $title=$_POST['title'];
        $linkdin=$_POST['linkdin'];
        $twitter=$_POST['twitter'];
        $insta=$_POST['insta'];
        $imgname = $_FILES['image']['name'];
        $temp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($temp_name, 'team/' . $imgname);

        $query = "INSERT INTO team(name,title,image,linkdin,twitter,instagram) VALUES('$name','$title', '$imgname','$linkdin','$twitter','$insta')";
        if(mysqli_query($con, $query)){
            echo "<script>
                      alert('team data added successfully');
                      window.location.href='team.php';
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
            <h4 class="page-title">Team Forms</h4>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Team Form</div>
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
                                    <label for="text">Linkdin</label>
                                    <input type="text" class="form-control" id="text" name="linkdin">
                                    <small class="text-danger"><?=$linkdinerr?></small>
                                </div>
                                <div class="form-group">
                                    <label for="text">twitter</label>
                                    <input type="text" class="form-control" id="text" name="twitter">
                                    <small class="text-danger"><?=$twittererr?></small>
                                </div>
                                <div class="form-group">
                                    <label for="text">Instagram</label>
                                    <input type="text" class="form-control" id="text" name="insta">
                                    <small class="text-danger"><?=$instaerr?></small>
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
