<?php
  include 'include/header.php';
 ?>
  
  <section class="about-section">
  <div class="about-outer-section">
     <div class="container">
      <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
              <div class="about-hero"><h2>Gallery</h2></div>
            </div>
            <div class="col-lg-4"></div>
      </div>
     </div>
     </div>
 </section>
    <section>
        <div class="gallery-video">
            <video class="img_1" src="assets/img/video1.mp4" autoplay muted controls></video>
        </div>
    </section>

	<section class="gallery-section">
        
		<h1 class="gallery">Gallery</h1>
        
        <div class="gallery-outer">
                <div class="gallery-image">
                    <img src="assets/img/gallery1.jpeg"   id="none_image"  class="gallery-img"  alt="swimming pool"/>
                    <i class="fa-solid fa-magnifying-glass img-icon" onclick="showDetails(this.parentElement.querySelector('.img_2'))"></i>
                </div>
                <div class="gallery-image">
                    <img src="images/h2.jpeg" id="none_image"  class="gallery-img"/>
                    <i class="fa-solid fa-magnifying-glass img-icon" onclick="showDetails(this.parentElement.querySelector('.img_2'))"></i>      
                </div>
                <div class="gallery-image">
                    <img src="images/h3.webp" id="none_image" class="gallery-img"  alt="swimming pool"/>
                    <i class="fa-solid fa-magnifying-glass img-icon" onclick="showDetails(this.parentElement.querySelector('.img_2'))"></i>
                </div>
                <div class="gallery-image">
                    <img src="images/h4.jpeg" id="none_image"  class="gallery-img" alt="swimming pool"/>
                    <i class="fa-solid fa-magnifying-glass img-icon" onclick="showDetails(this.parentElement.querySelector('.img_2'))"></i>
                </div>
                
                
	    
    </section> 
    <div class="none" id="none">
        <h1 style="cursor: pointer;" onclick="Close()" class="close">❌</h1>
        <h3 id="h3"></h3>
        <img src="images/h4.jpeg" id="noneimg" alt="none image">
        
    </div>
	
    
    
   <?php
    include 'include/footer.php';
  ?>