<?php
   include 'config/dbconnect.php';
   session_start();
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- REQUIRED META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FAVICON -->
    <link rel="icon" type="image/png" >
    <!-- TITLE -->
    <title> Ayansh Life Sciences Across Dairy, Poultry, and Fisheries</title>

    <!-- BOOTSTRAP MIN CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- OWL THEME DEFAULT MIN CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- OWL CAROUSEL MIN CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- MAGNIFIC POPUP MIN CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- ANIMATE MIN CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- BOXICONS CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- FLATICON CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- MEANMENU MIN CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- NICE SELECT MIN CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- ODOMETER MIN CSS-->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- icon link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- START PRELOADER AREA -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- END PRELOADER AREA -->

    <!-- START HEADER AREA -->
    <header class="header-area">
        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="heading-left-part">
                            <li>
                                <i class="bx bx-phone-call"></i>
                                <span>Call Us:</span>
                                <a href="tel:+123-456-789">8299145538</a>
                            </li>
                            <li>
                            <i class="bx bx-envelope"></i>
                                <span>Email:</span>
                                <a href="mailto:hello@example.com">vermadrrakesh@gmail.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul class="heading-right-part">
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
										<i class="bx bxl-youtube"></i>
									</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-area">
            <div class="navbar-area">
                <div class="main-nav">
                    <nav class="navbar navbar-expand-md">
                        <div class="container">
                           
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/img/logo.png" alt="Logo">
								</a>
                            <div class="collapse navbar-collapse mean-menu">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link active">
												Home
											</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="about.php" class="nav-link">About Us
											</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="dairy.php" class="nav-link">
												Dairy Division
												<i class="bx bx-plus"></i>
											</a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="department-grid.html" class="nav-link">Department Grid</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="department-slider.html" class="nav-link">Department Slider</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="department-details-left-sidebar.html" class="nav-link">Department Details Left Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="poultry.php" class="nav-link">
												Poultry Division
												<i class="bx bx-plus"></i>
											</a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="shop-grid.html" class="nav-link">Shop Grid</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="shop-slider.html" class="nav-link">Shop Slider</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="fishevies.php" class="nav-link">
												Fishevies Division
												<i class="bx bx-plus"></i>
											</a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Doctor
														<i class="bx bx-plus"></i>
													</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="doctor-grid.html" class="nav-link">Doctor Grid</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="doctor-slider.html" class="nav-link">Doctor Slider</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Testimonial
														<i class="bx bx-plus"></i>
													</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="testimonial-grid.html" class="nav-link">Testimonial Grid</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="testimonial-slider.html" class="nav-link">Testimonial Slider</a>
                                                    </li>
                                                </ul>
                                            </li>s
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="other.php" class="nav-link">
                                        Piggery Division
												<i class="bx bx-plus"></i>
											</a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="blog-grid.html" class="nav-link">Blog Grid</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="blog-slider.html" class="nav-link">Blog Slider</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="contact.php" class="nav-link">Contact
											</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="gallery.php" class="nav-link">Gallery
											</a>
                                    </li>
                                </ul>
                            </div>
                           <a href="login.php"><button class="default-btn">Login</button></a>
                        </div>
                    </nav>
                </div>

                <!-- Menu For Mobile Device -->
                <div class="mobile-nav">
                    <a href="index.php" class="logo">
							<img src="assets/img/logo.png" alt="Logo">
                            
						</a>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER AREA -->