<?php
  include 'include/header.php';
 ?>
 <section class="contact-section">
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-1 col-sm-3"></div>
             <div class="col-md-4  col-sm-3 contact-content-outer">
                <div class="contact-content">
                        <h3>Contact Information</h3>
                        <p>We’ll create high-quality linkable content and build at least 60 high-authority.</p>
                        <ul class=contact-icon>
                                <li> 
                                    <i class="bx bx-phone-call"></i>
                                    <a href="tel:+8801777981866">8299145538</a>
                                </li>
                                <li>  
                                    <i class="bx bx-envelope"></i>
                                    <a href="mailto:support@tranegly.com">vermadrrakesh@gmail.com</a>
                                </li>
                                <li>  
                                    <i class="bx bx-map"></i>
                                    <a href="mailto:support@tranegly.com">Rabipur Bahaudinpur Akabarpur
                                         Ambedkar Nagar</a>
                                </li>
                        </ul>
                        
                </div>
             </div>
            <div class="col-md-6  col-sm-3">
            <div class="form-section">
                <h2 class="text-center mb-4">Contact Us</h2>
                <form action="postcontact.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" >
                    <small class="text-danger"><?=isset($_GET['nameerr']) ? $_GET['nameerr']:''?></small>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" >
                    <small class="text-danger"><?=isset($_GET['emailerr']) ? $_GET['emailerr']:''?></small>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="4"  name="message" placeholder="Enter your message"></textarea>
                    <small class="text-danger"><?=isset($_GET['msgerr']) ? $_GET['msgerr']:''?></small>
                </div>
                <button type="submit" class="btn default-btn  my-4">Submit</button>
                </form>
            </div>
            </div>
            <div class="col-md-1  col-sm-3" ></div>
        </div>
</div>
 </section>
   <?php
    include 'include/footer.php';
  ?>