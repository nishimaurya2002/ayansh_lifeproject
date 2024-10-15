<?php
include('layout/header.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['edit'])){
        $id=$_POST['uid'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $role=$_POST['role'];
        $sql="Update users SET name='$name', email='$email', phone='$phone', role=$role where id=$id";
        if(mysqli_query($con , $sql)){
            echo "<script>
                      alert('Data update successfully');
                       window.location.href='users.php';
                 </script>";
        }

    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from users where id=$id";
    $data=mysqli_query($con,$sql);
    if(mysqli_num_rows($data) > 0 ){
        $single=mysqli_fetch_assoc($data);
    }
?>
?>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Users Forms</h4>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Users Form</div>
									</div>
									<div class="card-body">
										<form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multiple/form-data">
										<input type="hidden" class="form-control" name="uid" value="<?=$single['id']?>">
										<div class="form-group">
											<label for="name">Name</label>
											<input type="text" class="form-control" id="name" name="name"  value="<?=$single['name']?>">
										</div>
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="text" class="form-control" id="email" name="email"  value="<?=$single['email']?>">
										</div>
										<div class="form-group">
											<label for="phone">Phone</label>
											<input type="text" class="form-control" id="phone" name="phone" value="<?=$single['phone']?>">
										</div>										
										<div class="form-group">
										<label for="role">Role</label>
										<input type="number" name="role" class="form-control text-info" id="role" value="<?=$single['role']?>">									
										</div>
											<div class="card-action">
												<button type="submit" name="edit" class="btn btn-success" value="update user">Update user</button>												
										    </div>
										</form>
										</div>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
					</div>
					<?php
}else{
   header('location:users.php');
}
include 'layout/footer.php';

?>