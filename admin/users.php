<?php
include('layout/header.php');
?>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Users</h4>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Usres Table</div>
										<!-- <a href="update-users.php" class="btn btn-info">Add Users</a> -->
									</div>
									
									<div class="card-body">
										<table class="table mt-3">
											<thead>
												<tr>
													<th scope="col">#Id</th>
													<th scope="col">Name</th>
													<th scope="col">Email</th>
													<th scope="col">Phone</th>
													<th scope="col">Password</th>
													<th scope="col">Role</th>
													<th cscope="col" data-type="date" data-format="YYYY/DD/MM">Created At</th>
													<th class="text-danger">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$sql="select * from users";
													$data=mysqli_query($con,$sql);
													if(mysqli_num_rows($data) > 0){
														while($row=mysqli_fetch_assoc($data)){
												?>
												<tr>
													<td><?=$row['id']?></td>
													<td><?=$row['name']?></td>
													<td><?=$row['email']?></td>
													<td><?=$row['phone']?></td>
													<td><?=$row['password']?></td>
													<td><?=$row['role']==0 ? 'user':'admin'?></td>
													<td><?=date('d-m-Y',strtotime($row['created_at']))?></td>
													<td>
													<a class="mx-2" href="update-users.php?id=<?=$row['id']?>"><i class="fa fa-pencil-square" style="color:blue"></i></a>
													<a href="delete-users.php?id=<?=$row['id']?>"><i class=" fa fa-trash" style="color:red"></i></a>
												</td>
													<td></td>
												</tr>
												<?php
														}
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
					</div>
				</div>
			</div>
			<?php
include('layout/footer.php');
?>
