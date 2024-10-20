<?php
  include 'include/header.php';
  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from services where id=$id";
    $data=mysqli_query($con,$sql);
    if(mysqli_num_rows($data) > 0 ){
        $service=mysqli_fetch_assoc($data);
    }
 ?>
  
  <!--services details page start-->

		<!-- START BLOG DETAILS AREA -->
		<section class="blog-details-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="blog-details-left-area">
							<div data-aos="fade-up" data-aos-duration="1200" class="blog-details-single-post">
								<div class="blog-details-img">
									<img src="admin/services/<?=$service['image']?>" alt="Image" hight="100px" width="100px">
								</div>

								<h3><?=$service['name']?></h3>
								<p><?=$service['description']?></p>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem.</p>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum  centuries, but also the leap into Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
							</div>

							<blockquote data-aos="fade-up" data-aos-duration="1400" class="blockquote">
								<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem sunt dignissimos, ab quos eveniet ratione tempore maxime corporis quam quia totam, quae veritatis quis culpa optio aspernatur in, illum iusto.</p>

								<span>- Juhon Bild</span>
							</blockquote>
	
							<div data-aos="fade-up" data-aos-duration="1600" class="single-post-2">
								<h3>New Operating Suites</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationullamco laboris nisi Benefit consectetur adipisicing elit</p>
	
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="single-post-img mb-30">
											<a href="blog-details-right-sidebar.html">
												<img src="assets/img/blog-details-img/3.jpg" alt="Image">
											</a>
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="single-post-img mb-30">
											<a href="blog-details-right-sidebar.html">
												<img src="assets/img/blog-details-img/4.jpg" alt="Image">
											</a>
										</div>
									</div>
								</div>

								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati commodi pariatur iusto quasi numquam enim culpa accusamus eveniet, cumque sit, optio quis. Expedita odit ad dolore laudantium. Repellat, officia consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati commodi pariatur iusto quasi numquam enim culpa accusamus eveniet, cumque sit, optio quis. Expedita. consectetur adipisicing elit. Obcaecati dolore laudantium</p>
							</div>

							<div data-aos="fade-up" data-aos-duration="1800" class="blog-details-sheare">
								<div class="row align-items-center">
									<div class="col-lg-6 col-sm-6">
										<div class="blog-sheare-tag">
											<ul>
												<li>Share</li>
											</ul>
										</div>
									</div>

									<div class="col-lg-6 col-sm-6">
										<ul class="social-icon">
											<li>
												<a href="#">
													<i class="bx bxl-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="bx bxl-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="bx bxl-instagram"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="bx bxl-linkedin"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="bx bxl-youtube"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="blog-details-right-area blog-right-sidebar">
							<div data-aos="fade-up" data-aos-duration="800" class="blog-widget search-widget">
								<form class="search-form">
									<input type="search" class="form-control" placeholder="Search...">
									<button type="submit">
										<i class="bx bx-search"></i>
									</button>
								</form>
							</div>

							<div data-aos="fade-up" data-aos-duration="1000" class="blog-widget resent-post-widget">
								<h3 class="title">Recent Posts</h3>

								<ul>
									<li>
										<a href="blog-details-right-sidebar.html">
											<img src="assets/img/blog-details-img/recent-post-img-1.jpg" alt="Image">
											<span>13 January 2023</span>
											<h3>250+ Medical Tips We Just Had to Share</h3>
										</a>
									</li>

									<li>
										<a href="blog-details-right-sidebar.html">
											<img src="assets/img/blog-details-img/recent-post-img-2.jpg" alt="Image">
											<span>30 June 2023</span>
											<h3>12 Ways You Can Cut Your Prescription Costs</h3>
										</a>
									</li>

									<li>
										<a href="blog-details-right-sidebar.html">
											<img src="assets/img/blog-details-img/recent-post-img-3.jpg" alt="Image">
											<span>13 January 2023</span>
											<h3>230+ Medical Tips We Just Had to Share</h3>
										</a>
									</li>

									<li>
										<a href="blog-details-right-sidebar.html">
											<img src="assets/img/blog-details-img/recent-post-img-4.jpg" alt="Image">
											<span>09 July 2023</span>
											<h3>10 Tips to Live Better With Psoriatic Arthritis</h3>
										</a>
									</li>
								</ul>
							</div>
							<div data-aos="fade-up" data-aos-duration="1600" class="blog-widget categories-widget">
								<h3 class="title">Categories</h3>

								<ul>
									<li>
										<a href="#">
											Health
											<span>2023</span>
										</a>
									</li>

									<li>
										<a href="#">
											Medical
											<span>2023</span>
										</a>
									</li>

									<li>
										<a href="#">
											Clinic
											<span>2023</span>
										</a>
									</li>

									<li>
										<a href="#">
											Doctor
											<span>2023</span>
										</a>
									</li>

									<li>
										<a href="#">
											Global Health
											<span>2023</span>
										</a>
									</li>

									<li>
										<a href="#">
											Medicine
											<span>2023</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    <!--services details page end-->


   <?php
   } else {
    header('location:services.php');
}
    include 'include/footer.php';

  ?>