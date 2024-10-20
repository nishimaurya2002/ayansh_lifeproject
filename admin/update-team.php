<?php
ob_start();
include('layout/header.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) { 
        $id = $_POST['uid'];
        if ($_FILES['newimage']['name']) {
            $tmp_name = $_FILES['newimage']['tmp_name'];
            $orgname = $_FILES['newimage']['name'];
            move_uploaded_file($tmp_name, 'team/' . $orgname);
        } else {
            $orgname = $_POST['oldimage']; 
        }
        $name = $_POST['name'];
        $title=$_POST['title'];
        $linkdin=$_POST['linkdin'];
        $twitter=$_POST['twitter'];
        $insta=$_POST['insta'];
        $sql = "UPDATE team SET image='$orgname', name='$name', title='$title',linkdin='$linkdin',twitter='$twitter' ,instagram='$insta' WHERE id=$id";
        if (mysqli_query($con, $sql)) {
            echo "<script>
                      alert('Data updated successfully');
                      window.location.href='team.php';
                  </script>";
        }
    }
}
// Fetching data based on id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM team WHERE id=$id";
    $data = mysqli_query($con, $sql);
    if (mysqli_num_rows($data) > 0) {
        $single = mysqli_fetch_assoc($data);
    } else {
        header('location:team.php');
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
                                    <label for="text">Linkdin</label>
                                    <input type="text" class="form-control" id="text" name="linkdin" value="<?=$single['linkdin']?>">
                                </div>
                                <div class="form-group">
                                    <label for="text">Twitter</label>
                                    <input type="text" class="form-control" id="text" name="twitter" value="<?=$single['twitter']?>">
                                </div>
                                <div class="form-group">
                                    <label for="text">Instagram</label>
                                    <input type="text" class="form-control" id="text" name="insta" value="<?=$single['instagram']?>">
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
    header('location:team.php');
}
?>
