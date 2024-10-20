<?php
ob_start();
include('layout/header.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) { 
        $id = $_POST['uid'];
        if ($_FILES['newimage']['name']) {
            $tmp_name = $_FILES['newimage']['tmp_name'];
            $orgname = $_FILES['newimage']['name'];
            move_uploaded_file($tmp_name, 'testimonial/' . $orgname);
            // $orgname='services/'.$orgname;
        } else {
            $orgname = $_POST['oldimage']; 
        }
        $name = $_POST['name'];
        $title=$_POST['title'];
        $descrip = $_POST['description'];
        $sql = "UPDATE testimonial SET image='$orgname', name='$name', title='$title', description='$descrip' WHERE id=$id";
        if (mysqli_query($con, $sql)) {
            echo "<script>
                      alert('Data updated successfully');
                      window.location.href='testimonial.php';
                  </script>";
        }
    }
}
// Fetching data based on id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM testimonial WHERE id=$id";
    $data = mysqli_query($con, $sql);
    if (mysqli_num_rows($data) > 0) {
        $single = mysqli_fetch_assoc($data);
    } 
?>

<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Testimonial Forms</h4>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Testimonial Form</div>
                        </div>
                        <div class="card-body">
                            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" name="uid" value="<?=$single['id']?>">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?=$single['name']?>">
                                </div>
                                <div class="form-group">
                                    <label for="name">Title</label>
                                    <input type="text" class="form-control" id="name" name="title" value="<?=$single['title']?>">
                                </div>
                                <div class="form-group">
                                    <label for="file">Image</label>
                                    <input type="file" name="newimage" class="form-control text-info" id="image">
                                    <input type="hidden" name="oldimage" class="form-control text-info" value="<?=$single['image']?>">
                                    <img src="services/<?=$single['image']?>" alt="" width="50px" height="50px"><br>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Description</label>
                                    <textarea class="form-control" id="desc" rows="4" name="description" placeholder="Enter your message"><?=$single['description']?></textarea>
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

<?php
} else {
    header('location:testimonial.php');
}
?>
