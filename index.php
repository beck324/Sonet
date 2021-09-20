 <?php
$msg="";
$message='Your Remark Has Been Sent Successfully';
if (isset($_POST['submit'])) {
$con= new mysqli("localhost","root","","sonet");
 

      $sql = "INSERT INTO orders(cp_name,email,phone,type,amc_type) VALUES('".mysqli_real_escape_string($con, $_REQUEST["cp_name"])."','".mysqli_real_escape_string($con, $_REQUEST["email"])."','".mysqli_real_escape_string($con, $_REQUEST["phone"])."','".mysqli_real_escape_string($con, $_REQUEST["type"])."','".mysqli_real_escape_string($con, $_REQUEST["amc_type"])."')";
   
     if (mysqli_query($con, $sql)) {
        $msg="Order Successful";
      }  

}
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Sonet</title>

  <!-- slider stylesheet -->
   <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
 
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/ionicons/css/ionicons.min.css">
      <link href="lib/animate/animate.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container" >
           <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="images/sonetlogo.svg" alt="SONET">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ion-navicon" style="font-size: 35px"></span>
          </button>
 
          <div class="collapse navbar-collapse" id="nav">
               <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#" class="btn">Home</a></li>
            <li class="nav-item scrollto clearfix"><a href="#about_section" class="btn">About</a></li>
             <li class="nav-item dropdown">
          <a class="btn dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Merchandise</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#products">Products</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#services-section">Services</a>
            </div>
             </li>
            <li class="nav-item"><a href="#price" class="btn ">AMC</a></li>
             <li class="nav-item active"><a href="#testimonials" class="btn ">News</a></li>
            <li class="nav-item"><button class="btn btn-success custom_menu-btn" onclick="openNav()">Contact Us</button></li>
              </ul>    
            <div id="myNav" class="overlay">
              <div class="overlay-content">
               <center> <div class="col-lg-6 footer-top" >
            <div class="form">
                <div class="card">
                  <div class="card-header justify-content-center">
              <h3 class="card-header text-center font-weight-bold text-uppercase py-4" style="background-color: rgb(77,149,49);">Send us a message </h3>
        <div class="card-body">      <p style="color: rgb(0,0,0) !important;">For any feedback you have or any questions you would like to ask please contact us here. Thank You!</p>
              <form action="insert.php" method="post" role="form" class="contactForm"  >
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div  id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message" style="background: #7ddf0f;">Send Message</button></div>
              </form>
              </div>
            </div></center>

              </div>
            </div>
         </div>
        </nav>
      
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                   <h1>
                    The <span style="color: green">Ingenuity </span> you
                    <span>
                      Deserve
                    </span>
                  </h1>
                 
                  <p>
                    We find the best solutions for you, we understand your problem and
                    Discover the best possible solution for your problems.
                  </p>
                  <div>
                    <a href="#about_section" class="scrollto clearfix">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="images/slider-img.svg" alt="" class="wow jackInTheBox" 
           data-wow-delay="1s" data-wow-iteration="1" data-wow-duration="3s" style="width:65%; height:50%; margin-left:110px ">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-3 offset-md-2">
                <div class="slider_detail">
                   <h1 style="color: green">
                    INNOVATIVE
                    <span>
                      SOLUTIONS
                    </span>
                  </h1>
                  <p>
                    No more problems, with Sonet you can fully rely on , we don't only solve your problems but 
                    we find the best possible way to solve them.
                  </p>
                  <div>
                    <a href="#about_section">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="slider_img-box">
                  <img src="images/slider-img.svg" alt="" class="wow pulse" 
           data-wow-delay="1s" data-wow-iteration="1" data-wow-duration="6s" style="width:65%; height:50%; margin-left:110px ">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>

    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section bg-light" id="about_section">
      <div class="container">
         <h2>
        About Us
      </h2><br>
        <div class="row">
          <div class="col-md-6 col-lg-4 element-animate wow zoomInUp">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><span class="ion-social-buffer text-primary"></span></div>
              <div class="media-body">
                <h3 class="heading">Mission</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>  

          </div>
          <div class="col-md-6 col-lg-4 element-animate wow zoomInUp">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><span class="ion-bookmark text-primary"></span></div>
              <div class="media-body">
                <h3 class="heading">Vision</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div> 

          </div>
          <div class="col-md-6 col-lg-4 element-animate wow zoomInUp clearfix">
            <div class="media block-6 d-block text-center">
              <div class="icon mb-3"><span class="ion-leaf text-primary"></span></div>
              <div class="media-body">
                <h3 class="heading">Values</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div> 

          </div>
        </div>
      </div>
    </section>

  <!-- end about section -->


 <section class="about_section layout_padding" id="products">
    <div class="container">
      <h2>
        Products
      </h2>
    </div>

    <div class="container">
      <div class="about_card-container">
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/card-img-1.jpg" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                RAM
              </h4>
              <p>
                Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                vehicula ut id elit. Morbi leo risus.
              </p>
            </div>
          </div>
         
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/card-img-2.jpg" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                Acer Desktops
              </h4>
              <p>
                Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                vehicula ut id elit. Morbi leo risus.
              </p>
            </div>
          </div>

        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/card-img-3.jpg" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                Apple Desktops
              </h4>
              <p>
                Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                vehicula ut id elit. Morbi leo risus.
              </p>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
<section class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 service" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-success ion-bookmark"></span></div>
              <div>
                <h3>Consultancy</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
        
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 service" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-success ion-bookmark"></span></div>
              <div>
                <h3>Networks</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
           
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 service" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-success ion-bookmark"></span></div>
              <div>
                <h3>Website Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 service" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-success ion-bookmark"></span></div>
              <div>
                <h3>Structured Cabling Solutions </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
            
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 service" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-success ion-bookmark"></span></div>
              <div>
                <h3>Software Systems</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 service" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-success ion-bookmark"></span></div>
              <div>
                <h3>Data Center Infrastructure</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
             
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  <!-- PRICING TABLE -->
    <section id="price" class="amc_section">
      <div class="container-fluid pricing-wraper">
       
          <h2><span class="text--semi-bold">Annual Maintenance Contract </span>
          <a class="btn btn-success " href="help.pdf" role="button" style="margin-left: 30px">Help <span class="ion-ios-download-outline" style="font-size: 20px"></span> </a></h2><br>
        
        <div class=" row pricing-row">
          <div class="col-md-3 col-sm-6 no--padding" >
            <ul class="pricing-table" >
              <li class="header" style="background: #cd7f32 !important">Bronze</li>
              <!-- <li class="price-tag"><span class="price"><sup>ETB</sup>1999</span><span class="package-duration">monthly</span></li> -->
              <li>Hardware Problems</li>
              <li>Software Updates</li>
              <li>Operating System Support</li>
              <li>Phone Support</li>
             
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 no--padding" >
            <ul class="pricing-table">
              <li class="header" style="background: silver !important">Silver</li>
             <!--  <li class="price-tag"><span class="price"><sup>ETB</sup>2999</span><span class="package-duration">monthly</span></li> -->
              <li>Hardware Problems</li>
              <li>Software Updates</li>
              <li>Operating System Support</li>
              <li>Phone Support</li>
            
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 no--padding" >
            <ul class="pricing-table">
              <li class="header" style="background: gold !important">Gold</li>
             <!--  <li class="price-tag"><span class="price"><sup>ETB</sup>3999</span><span class="package-duration">monthly</span></li> -->
              <li>Hardware Problems</li>
              <li>Software Updates</li>
              <li>Operating System Support</li>
              <li>Phone Support</li>
             
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 no--padding" >
            <ul class="pricing-table">
              <li class="header" style="background: #e5e4e2">Platinum</li>
             <!--  <li class="price-tag"><span class="price"><sup>ETB</sup>4999</span><span class="package-duration">monthly</span></li> -->
              <li>Hardware Problems</li>
              <li>Software Updates</li>
              <li>Operating System Support</li>
              <li>Phone Support</li>
             
            </ul>
          </div>
        </div>
      </div><br>
        <button class="btn btn-success" id="myBtn" role="button" style="margin-left: 0px;width: 110px">Order</button></h2>
    </section>
  <!-- why section -->
  
<?php
                
    echo '<section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3><center>News and Events</center></h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">
          

            <div class="owl-carousel testimonials-carousel wow fadeInUp">';
            
      $con= new mysqli("localhost","root","","sonet");
                  $sql="SELECT * FROM news";
                  $result=mysqli_query($con, $sql);
                  while ($row = mysqli_fetch_array($result)) {
    
             echo ' <div class="testimonial-item">
                <img src="images/intro_4.png" class="testimonial-img" alt="">
                <h3>'.$row['title'].'</h3>
                <h4 style="color:black !important">'.$row['dates'].'</h4>
                <p>'.$row['description'].'</p>
              </div>';}

           echo ' </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->';

    ?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><b>SONET Information Technology</b></h2>
              <p>Sonet is an IT company that thrives with our customer's satisfaction, we work hard and smart to solve your problems and assist you in your endeavors.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="ion-social-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="ion-social-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="ion-social-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2"><b>Useful Links</b></h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#about_section" class="py-2 d-block">About Us</a></li>
               <li><a href="#products" class="py-2 d-block">Products</a></li>
               <li><a href="#services-section" class="py-2 d-block">Services</a></li>
               <li><a href="#price" class="py-2 d-block">AMC</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              
                <img src="images/sonetlogo.svg" style="width: 100%; height:90px;"></img>
                <pre>
<b>             Office Address</b>
             Bole Road,Olympia
             Kirkos Subcity, Woreda 01
             Getu Commercial Center
             6<sup>th</sup> Floor Office #607
             T: +251 11 558 5354
             E:info@sonetict.com
             P.O BOX 23543/1000
             Addis Ababa, Ethiopia
                </pre>
             
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><b>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a href="https://sonetict.com" target="_blank">Sonet</a>
  </b>
 </p>
          </div>
        </div>
      </div>
     

    </footer>
    <div id="myModal" class="modal" >

 
<div class="modal-content">
  <div>

      </div>
  </div>
  <div class="modal-body">
    <form method="POST" action="index.php" role="form" name="order">
<div class="container-fluid" style="margin-top: 50px; padding-left: 40px;padding-right: 40px;">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-sm-3">
      <div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4" style="background-color: rgb(77,149,49);">Order <button class="close">&times;</button></h3>
  <div class="card-body">
    <div id="table">
       <div class="table table-responsive-lg table-striped form-group" id="dynamic_field" >
        
          <label class="text-success">Company Name</label>
                      <div class="md-form mb-0">
                        <input type="text"  name="cp_name" class="form-control form-control-sm" id="cp_name" placeholder="Company Name" required="">
                       
                      </div>
             <label class="text-success">Email Address</label>
                    <div class="md-form mb-0">
                        <input type="email"  name="email" class="form-control form-control-sm" id="email" placeholder="Email" required="">
                        
                      </div>
              <label class="text-success">Phone Number</label>
                      <div class="md-form mb-0">
                        <input type="phone"  name="phone" class="form-control form-control-sm" id="phone" placeholder="Phone Number" pattern="((\+|00)?[0-9]{2}|0)[1-9]( ?[0-9]){8}" title="Please insert a valid phone number(10 digits) " required="">
                    
                      </div>
                       <div class="md-form mb-0">
                      <label class="text-success">Package Type</label>
        
                            <select class="form-control" id="type" name="type" required="">
                              <option style="background: #cd7f32">Bronze</option>
                              <option style="background: silver">Silver</option>
                              <option style="background: gold" selected>Gold</option>
                              <option style="background: #e5e4e2">Platinum</option>
                            </select> 
                          </div>
                           <div class="md-form mb-0">
                        <label class="text-success">AMC Type</label>
        
                            <select class="form-control" id="amc_type" name="amc_type" required="">
                              <option>Comprehensive</option>
                              <option>Non-Comprehensive</option>
                            </select> 
                      
           </div>
     
      </div>
    </div>
     <center><input type="submit" value="Order" name="submit" class="btn btn-success"></center>
      </div> 
       
                           
                   
                     <!--<div id="sendmessage">Your message has been sent. Thank you!</div>-->
       
          
      </div></div></div>     
 </div>
</form>
</div>
</div>
  <!-- end info section -->

  <button id="gototop" onclick="topFunction()"><span class="ion-chevron-up"></span></button>
  <!-- footer section -->
   <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
   <script src="lib/owlcarousel/owl.carousel.min.js"></script>
   <script src="contactform/contactform.js"></script>
    <script src="lib/wow/wow.min.js"></script>

  <script type="text/javascript">
    mybutton = document.getElementById("gototop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
  </script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>
<script type="text/javascript">
  var modal = document.getElementById("myModal");
  

// Get the button that opens the modal
var btn = document.getElementById("myBtn");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
</script>
 
<script type="text/javascript">
  var modal = document.querySelector(".modal");
    var trigger = document.querySelector(".trigger");
    var closeButton = document.querySelector(".close");

    function toggleModal() {
        modal.classList.toggle("show-modal");
    }

    function windowOnClick(event) {
        if (event.target === modal) {
            toggleModal();
        }
    }

    trigger.addEventListener("click", toggleModal);
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);
</script>
<script type="text/javascript">
  new WOW().init();
</script>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    margin:10,
    responsive:{
      0:{
        items:1
      }
    }
    
  });
  
  
</script>

</body>

</html>