<?php
include('layout/header.php');
?>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Testimonials</h4>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Testimonials Table</div>
                                        <a href="add-testimonial.php" class="btn btn-info">Add Testimonials</a>
									</div>
									
									<div class="card-body">
										<table class="table mt-3">
											<thead>
												<tr>
													<th scope="col">#Id</th>
													<th scope="col">Name</th>
													<th scope="col">Title</th>
													<th scope="col">Image</th>
													<th scope="col">Description</th>
													<th cscope="col" data-type="date" data-format="YYYY/DD/MM">Created At</th>
													<th class="text-danger">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$sql="select * from testimonial";
													$data=mysqli_query($con,$sql);
													if(mysqli_num_rows($data) > 0){
														while($row=mysqli_fetch_assoc($data)){
												?>
												<tr>
													<td><?=$row['id']?></td>
													<td><?=$row['name']?></td>
													<td><?=$row['title']?></td>
													<td><img src="testimonial/<?=$row['image']?>" height="50" width="50"/></td>
													<td><?=$row['description']?></td>
													<td><?=date('d-m-Y',strtotime($row['created_at']))?></td>
													<td>
													<a class="mx-2" href="update-testimonial.php?id=<?=$row['id']?>"><i class="fa fa-pencil-square" style="color:blue"></i></a>
													<a href="delete-testimonial.php?id=<?=$row['id']?>"><i class=" fa fa-trash" style="color:red"></i></a>
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
