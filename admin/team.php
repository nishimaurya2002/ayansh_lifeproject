<?php
include('layout/header.php');
?>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Team</h4>
						<div class="row">
							<!-- <div class="col-md-1"></div> -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Testimonials Table</div>
                                        <a href="add-team.php" class="btn btn-info">Add Team</a>
									</div>
									
									<div class="card-body">
										<table class="table mt-3">
											<thead>
												<tr>
													<th scope="col">#Id</th>
													<th scope="col">Name</th>
													<th scope="col">Title</th>
													<th scope="col">Image</th>
													<th scope="col">Linkdin</th>
													<th scope="col">Twitter</th>
													<th scope="col">Instagram</th>
													<th cscope="col" data-type="date" data-format="YYYY/DD/MM">Created At</th>
													<th class="text-danger">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$sql="select * from team";
													$data=mysqli_query($con,$sql);
													if(mysqli_num_rows($data) > 0){
														while($row=mysqli_fetch_assoc($data)){
												?>
												<tr>
													<td><?=$row['id']?></td>
													<td><?=$row['name']?></td>
													<td><?=$row['title']?></td>
													<td><img src="team/<?=$row['image']?>" height="50" width="50"/></td>
													<td><?=$row['linkdin']?></td>
													<td><?=$row['twitter']?></td>
													<td><?=$row['instagram']?></td>
													<td><?=date('d-m-Y',strtotime($row['created_at']))?></td>
													<td>
													<a class="mx-2" href="update-team.php?id=<?=$row['id']?>"><i class="fa fa-pencil-square" style="color:blue"></i></a>
													<a href="delete-team.php?id=<?=$row['id']?>"><i class=" fa fa-trash" style="color:red"></i></a>
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
							<!-- <div class="col-md-1"></div> -->
						</div>
					</div>
				</div>
			</div>
			<?php
include('layout/footer.php');
?>
