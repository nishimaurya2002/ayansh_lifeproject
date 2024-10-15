 <?php
  include 'include/header.php';
 ?>

    <!-- START BANNER AREA -->
    <section class="banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                            <span class="wow fadeInUp" data-wow-delay=".4s">Welcome To Ayansh Life Sciences Pvt Ltd</span>
                                <h1 class="wow fadeInUp text-white" data-wow-delay=".6s">Comprehensive Farming Solutions</h1>
                                <p class="wow fadeInUp text-light" data-wow-delay=".8s"> "Start with believe Continue with trust"</p>
                                <div class="banner-btn wow fadeInUp" data-wow-delay=".9s">
                                    <a href="contact-style-one.html" class="default-btn-contact active">
											Contact Us
										</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="banner-img wow fadeInUp" data-wow-delay=".9s">
                                <!-- <img src="assets/img/hone-one-banner/.png" alt="Image"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BANNER AREA -->
        <!-- START ABOUT AREA -->
        <section class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-6">
                    <div class="about-content">
                        <span class="top-title">About Us</span>
                        <h2>Ayansh Life sciences is a leader in the agriculture</h2>
                        <p>I am extremely proud to say that homegrown pharma company Ayansh life sciences Pvt Ltd has come out with excellent formulations for treating animals at a very affordable price. I hope we would come with many more innovative medicines to help the suffering of sick one.</p>
                        <p>Our company provides a truly motivating, dynamic environment and vibrant organizational culture . I have a commitment to provide professional support services in the form of professional updates, educational programs, conferences, camps, etc. We are committed to serve excellence and have an ISO defined quality management system in place.</p>
                        <p>We regularly ask our customers and business partners, how we can improve our service, and their feedback and insight help drive our business. In survey after survey, our customers, our people continually give us high marks for what we are doing .
                            In the last I want to say that....
                            " Start with believe.
                            Continue with trust .</p>

                        <a href="about-style-one.html" class="default-btn">
								More About Us
							</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="features-content">
                        <div class="row">
                            <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-6 col-sm-6">
                                <div class="single-features">
                                    <!-- <i class="flaticon-doctor"></i> -->
                                  <div class=single-features-img>
                                       <img src="assets/img/cow.png" alt="" >
                                  </div>
                                    <h3> Dairy Division</h3>
                                    <p>Our Dairy Division is committed to excellence in milk production and dairy farming.</p>
                                </div>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6 col-sm-6">
                                <div class="single-features">
                                    <!-- <i class="flaticon-personal-information"></i> -->
                                    <div class=single-features-img>
                                       <img src="assets/img/meat.png" alt="" >
                                  </div>
                                    <h3>Poultry Division</h3>
                                    <p>In our Poultry Division, we specialize in the breeding, hatching, and farming of healthy chickens</p>
                                    <!-- <a href="department-details-right-sidebar.html" class="read-more">
											Read More
										</a> -->
                                </div>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-6 col-sm-6">
                                <div class="single-features">
                                    <!-- <i class="flaticon-rate"></i> -->
                                    <div class=single-features-img>
                                       <img src="assets/img/fish.png" alt="" >
                                  </div>
                                    <h3>Fisheries Division</h3>
                                    <p>Our Fisheries Division pioneers in sustainable aquaculture practices, offering a diverse range of fish and seafood products</p>
                              
                                </div>
                            </div>

                            <div data-aos="fade-up" data-aos-duration="2000" class="col-lg-6 col-sm-6">
                                <div class="single-features">
                                    <!-- <i class="flaticon-first-aid-kit"></i> -->
                                    <div class=single-features-img>
                                       <img src="assets/img/pig.png" alt="" >
                                  </div>
                                    <h3>Piggery Division</h3>
                                    <p>Our Piggery Division pioneers in sustainable aquaculture practices, offering a diverse range of fish and seafood products</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT AREA -->
  
    <!-- END SERVICES AREA -->
    <section class="services-area bg-color pt-100 pb-70">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                <!-- <span class="top-title">Our Services</span> -->
                <h2>Services</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis deleniti illum necessitati voluptates ipsum, ratione dolorum veritatis minus mollitia placeat</p>
            </div>
           
            <div class="row">
            <?php
                          $sql="select * from services";
                          $servicedata=mysqli_query($con,$sql);
                          if(mysqli_num_rows($servicedata) > 0 ){
                               while($service=mysqli_fetch_assoc($servicedata)){
                             
             ?>
                <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-4 col-sm-6 services-div">
                    <div class="single-services">
                        <div class="single-services-img"><img src="admin/services/<?=$service['image']?>" alt=""></div>
                        <h3><?=$service['name']?></h3>
                        <p><?=$service['description']?></p>

                        <a href="department-details-right-sidebar.html" class="read-more">
								Read More
							</a>
                    </div>
                </div>
                <?php
                               }
                            }
              ?>
                <div data-aos="fade-up" data-aos-duration="2200" class="col-lg-4 col-sm-6 ">
                    <!-- <div class="single-services">
                        <i class="flaticon-dental-care"></i>
                        <div class="single-services-img"><img src=" assets/img/pig.png" alt=""></div>
                        <h3>Piggery</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit, unde fugiat autem earum luptatem sequuntur.</p>

                        <a href="department-details-right-sidebar.html" class="read-more">
								Read More
							</a>
                    </div> -->
                </div>

                 <!-- <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-4 col-sm-6">
                    <div class="single-services">
                    
                        <div class="single-services-img"><img src=" assets/img/fish.png" alt=""></div>
                        <h3>Fisheries</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit, unde fugiat autem earum luptatem sequuntur.</p>

                        <a href="department-details-right-sidebar.html" class="read-more">
								Read More
							</a>
                    </div>
                </div> -->


                  <div data-aos="fade-up" data-aos-duration="2200" class="col-lg-4 col-sm-6">
                      <!-- <div class="single-services">
                        <i class="flaticon-dental-care"></i>
                        <div class="single-services-img"><img src=" assets/img/pig.png" alt=""></div>
                        <h3>Piggery</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit, unde fugiat autem earum luptatem sequuntur.</p>

                        <a href="department-details-right-sidebar.html" class="read-more">
								Read More
							</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- END SERVICES AREA -->


    <!-- START PARTNERS AREA -->
    <section class="doctor-area bg-color pt-100 pb-70">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1200" class="section-title">
                <!-- <span class="top-title">Our Doctor's</span> -->
                <h2>Our <span>Partners</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis deleniti illum necessitati voluptates ipsum, ratione dolorum veritatis minus mollitia placeat</p>
            </div>

            <div class="row">
                <div data-aos="fade-up" data-aos-duration="1400" class="col-lg-4 col-sm-6">
                    <div class="single-doctor">
                        <div class="single-doctor-img">
                          <img src="assets/img/img2.jpg" alt="Image">
                       </div>
                        <div class="doctor-content">
                            <h3>Anthony</h3>
                            <span>Surgeon, Сardiologist</span>
                        </div>

                        <ul>
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
                        </ul>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-4 col-sm-6">
                    <div class="single-doctor">
                        <div class="single-doctor-img">
                          <img src="assets/img/img1.jpg" alt="Image">
                       </div>
                        <div class="doctor-content">
                            <h3>Anna</h3>
                            <span>Internist, General Practitioner</span>
                        </div>

                        <ul>
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
                        </ul>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="1800" class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-doctor">
                        <div class="single-doctor-img">
                        <img src="assets/img/img3.jpeg" alt="Image">
                       </div>

                        <div class="doctor-content">
                            <h3>Andrew</h3>
                            <span>Internist, Orthopedic Surgeon</span>
                        </div>

                        <ul>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DOCTORS AREA -->
     <!-- Enquiry Form -->
    <section class="enquiry-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8 enquiry-form-outer" >
                    <div class="row">
                        <div class="col-lg-6">
                           <div class="enquiry-img">
                              <img src="assets/img/enquiry.jpg" alt="">
                           </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-section">
                                <h2 class="text-center mb-4">Enquiry form</h2>
                                    <form>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn default-btn  my-4">Submit</button>
                                    </form>
                    </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    <!-- START TESTIMONIALS AREA -->
		<section class="testimonial-area pt-100 pb-70">
			<div class="container">
				<div data-aos="fade-up" data-aos-duration="1200" class="section-title">
					<h2>Our Testimonials</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis deleniti illum necessitati voluptates ipsum, ratione dolorum veritatis minus mollitia placeat</p>
				</div>

				<div class="testimonial-wrap owl-carousel owl-theme">
					<div data-aos="fade-up" data-aos-duration="1400" class="single-testimonial">
						<img src="assets/img/test1.png" alt="img">

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing and Quis suspendisse typesetting ipsum dolor sit amet, consectetur magna aliqua. Lorem Ipsum is simply ipsum dolor</p>

						<h3>William Robart</h3>
						<span>Consulting Doctor</span>
					</div>
					
					<div data-aos="fade-up" data-aos-duration="1600" class="single-testimonial">
						<img src="assets/img/test1.png" alt="img">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing and Quis suspendisse typesetting ipsum dolor sit amet, consectetur magna aliqua. Lorem Ipsum is simply ipsum dolor</p>

						<h3>Jeson Smith</h3>
						<span>Dental Hygienist</span>
					</div>

					<div data-aos="fade-up" data-aos-duration="1800" class="single-testimonial">
						<img src="assets/img/test1.png" alt="img">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem Ipsum is simply dummy text of the printing and Quis suspendisse typesetting ipsum dolor sit amet, consectetur magna aliqua. Lorem Ipsum is simply ipsum dolor</p>

						<h3>Ravert Smith</h3>
						<span>Dental</span>
					</div>
				</div>
			</div>
		</section>
		<!-- End TESTIMONIALS AREA -->

  <?php
    include 'include/footer.php';
  ?>