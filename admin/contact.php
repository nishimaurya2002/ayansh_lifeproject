<?php
include('layout/header.php');
?>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">contact</h4>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="card">
									<div class="card-header">
										<div class="card-title">contact Table</div>
										<!-- <a href="update-contact.php" class="btn btn-info">Add Users</a> -->
									</div>
									
									<div class="card-body">
										<table class="table mt-3">
											<thead>
												<tr>
													<th scope="col">#Id</th>
													<th scope="col">Name</th>
													<th scope="col">Email</th>
													<th scope="col">Message</th>
													<th cscope="col" data-type="date" data-format="YYYY/DD/MM">Created At</th>
													<th class="text-danger">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$sql="select * from contact";
													$data=mysqli_query($con,$sql);
													if(mysqli_num_rows($data) > 0){
														while($row=mysqli_fetch_assoc($data)){
												?>
												<tr>
													<td><?=$row['id']?></td>
													<td><?=$row['name']?></td>
													<td><?=$row['email']?></td>
													<td><?=$row['message']?></td>
                                                    <td><?=date('d-m-Y',strtotime($row['created_at']))?></td>
													<td>
													<a class="mx-2" href="update-contact.php?id=<?=$row['id']?>"><i class="fa fa-pencil-square" style="color:blue"></i></a>
													<a href="delete-contact.php?id=<?=$row['id']?>"><i class=" fa fa-trash" style="color:red"></i></a>
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
