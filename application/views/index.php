<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('head') ?>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <?php $this->load->view('header') ?>
    <!-- ***** Header Area End ***** -->
	
<section >
<!-- Modal -->
<div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li id="tab1" class="active tab-style login-shadow "><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li id="tab2" class="tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
              
            </ul>
        </div>
		
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
       
        <div class="tab-pane fade active in" id="signin">
            <form action="<?php echo base_url(); ?>application/views/login.php" method="post" class="form-horizontal">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
              
               <div class="group">
			<input required="" class="input" type="text" name="email" placeholder="Email Address" ><span class="highlight"></span><span class="bar"></span>
			<label class="label" for="date" >Email address</label></div>
              
              
            <!-- Password input-->
            <div class="group">
			<input required="" class="input" type="password" name="password" placeholder="Password" ><span class="highlight"></span><span class="bar"></span>
				<label class="label" for="date">Password</label>
				</div>
			<em>minimum 6 characters</em>

           <div class="forgot-link">
            <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> I forgot my password</a>
            </div>
            

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" type="submit" name="signin" class="btn btn-primary btn-block">Log In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
          
          
        <div class="tab-pane fade" id="signup">
            <form action="<?php echo base_url(); ?>application/views/register.php" method="post" class="form-horizontal">
            <fieldset >
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="group">
<input required="" class="input" id="fname" name="fname" type="text" placeholder="First Name"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date"  >First Name</label></div>
            
            <!-- Text input-->
            <div class="group">
<input required="" class="input" id="lname" name="lname" type="text" placeholder="Last Name" ><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date"  >Last Name</label></div>
            
            <!-- Password input-->
            <div class="group">
<input required="" class="input" id="email" name="email" type="text" placeholder="Email Address "><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date"  >Email</label></div>
            
            <!-- Text input-->
            <div class="group">
<input required="" class="input" id="password" name="password" type="password" placeholder="Password" ><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date"  >Password</label></div>
              <em>1-8 Characters</em>
            
              <div class="group2">
<input required="" class="input" type="text" name="country" id="country" placeholder="Country "><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date"  >Country</label></div>
            
            
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" type="submit" name="submit" class="btn btn-primary btn-block">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>
  
   

<!--modal2-->

<div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
        <fieldset>
        <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email address</label></div>
        
        
        <div class="control-group">
              <label class="control-label" for="forpassword"></label>
              <div class="controls">
                <button id="forpasswodr" name="forpassword" class="btn btn-primary btn-block">Send</button>
              </div>
            </div>
          </fieldset>
            </form>
          
      </div>
    </div>
    
  </div>
</div>
</section>
    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>ButuhEvent</h2>
                        <h3>BE.</h3>
                        <p>Everything You Need.Will be always in your hand</p>
						<!-- Slider -->
						<div class="welcome-thumb wow fadeInDown" data-wow-delay="0.2s">
						<div class="w3-content w3-display-container" style="max-width:800px">
						  <img class="mySlides" src="<?php echo base_url()?>assets/bootstrap/img/category/event1.jpg" style="width:100%">
						  <img class="mySlides" src="<?php echo base_url()?>assets/bootstrap/img/category/birthday.jpg" style="width:100%">
						  <img class="mySlides" src="<?php echo base_url()?>assets/bootstrap/img/category/event5.jpg" style="width:100%">
						  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
							<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
							<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
						  </div>
						</div>
						</div>
						
						<!-- End Slider -->
						<!-- Form End -->
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="#" method="post" class="form-inline">
                            <input type="email" class="form-control email" placeholder="your name">
                            <input type="submit" class="submit" value="Get Started">
                        </form>
						
                        
                    </div>
					<!-- Welcome thumb -->
					
					
				</div>
            </div>
			
        
        </div>
		 
    </section>
    <!-- ***** Wellcome Area End ***** -->

    
     <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Why Is It Special</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-mobile" aria-hidden="true"></i>
                        </div>
                        <h4>Easy to use</h4>
                        <p>Easy to use for anyone, can order event organizers from anywhere and anytime</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-ruler-pencil" aria-hidden="true"></i>
                        </div>
                        <h4>Request Design</h4>
                        <p>Can determine what you want to make for your event and make it more attractive</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="ti-settings" aria-hidden="true"></i>
                        </div>
                        <h4>Many choices available</h4>
                        <p>Birthdays, Weddings, Organizational Events, or want to request your own event can be determined here, now!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/category/event1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h2>Our Best Propositions for You!</h2>
                            <p>Providing the best service for you. Make your event better and whatever your problems for your event can be discussed with us. Make your show more interesting with us, order us and you will experience an actual event experience.</p>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Google Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-android"></i>
                                        <p class="mb-0"><span>available on</span> Google Store</p>
                                    </a>
                                </div>
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-apple"></i>
                                        <p class="mb-0"><span>available on</span> Apple Store</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2>Awesome Features</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-user" aria-hidden="true"></i>
                        <h5>Awesome Experience</h5>
                        <p></p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-pulse" aria-hidden="true"></i>
                        <h5>Don't make disappointed</h5>
                        <p></p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-dashboard" aria-hidden="true"></i>
                        <h5>Fast and Responsive for your event</h5>
                        <p></p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-palette" aria-hidden="true"></i>
                        <h5>Perfect Design</h5>
                        <p></p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-crown" aria-hidden="true"></i>
                        <h5>Best Order</h5>
                        <p></p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="ti-headphone" aria-hidden="true"></i>
                        <h5>Best support for your Event</h5>
                        <p></p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** Video Area Start ***** -->
    <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Area Start -->
                    <div class="video-area" style="background-image: url(<?php echo base_url()?>assets/bootstrap/img/bg-img/video.jpg);">
                        <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Video Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                            <h3><span class="counter">90</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-arrow-down-a"></i>
                            <p>User<br>Login</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">120</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-happy-outline"></i>
                            <p>Event <br> Oreder </p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                            <h3><span class="counter">10</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-person"></i>
                            <p>ACTIVE <br>ACCOUNTS</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-area">
                            <h3><span class="counter">10</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-ios-star-outline"></i>
                            <p>TOTAL <br>EVENT RATES</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Best Photo Event</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">
                        <div class="single-shot">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/Category/event1.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/Category/birthday.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/Category/event3.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/Category/event4.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/Category/event5.jpg" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/Category/login.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** App Screenshots Area End *****====== -->

    <!-- ***** Pricing Plane Area Start *****==== -->
    <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text  -->
                    <div class="section-heading text-center">
                        <h2>Pricing Orginzer</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Birthday Category</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>Rp.10,000,000 ~ Rp.50,000,0000</span>
                                <h4></h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>For your Birthday</p>
                            <p></p>
                            
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a data-toggle="modal" data-target="#mybirthday" href="#" >Select Category</a>
                        </div>
					<!-- Modal Event -->
					<div id="mybirthday" class="modal fade" role="dialog">
					<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Event Birthday</h4>
					</div>
					<div class="modal-body">
					<form action="<?php echo base_url(); ?>application/views/birthday.php" method="post" >
					<div class="form-group">
					<label for="exampleInputEmail1">Fullname</label>
					<input type="text" class="form-control" name="name" id="Fullname" placeholder="Fullname">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Alamat Acara</label>
					<input type="text" class="form-control" name="alamat" id="exampleInputEmail1" placeholder="Alamat Lokasi Acara">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Deskripsi Pemesanan Event</label>
					<input type="text" class="form-control" name="deskripsi" id="exampleInputEmail1" placeholder="Harus di tulis dengan benar apa yang di butuhkan untuk acara anda">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">No Hp</label>
					<input type="number" class="form-control" name="no_hp" id="exampleInputEmail1" placeholder="No Hp">
					</div>
					<div class="modal-footer">
					<button name="submit" type="submit" class="btn btn-success" >Pesan</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
					</form>
					</div>
					
					</div>
					</div>
					</div>
                    </div>
                </div>
				<!-- Event Modal End -->
				
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Wedding Category</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>Rp.50,000,000 ~ Rp.150,000,0000</span>
                                <h4></h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>For your Wedding</p>
                            <p></p>
                            
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a data-toggle="modal" data-target="#mywedding" href="#">Select Category</a>
                        </div>
						<!-- Modal Event -->
					<div id="mywedding" class="modal fade" role="dialog">
					<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Event Wedding</h4>
					</div>
					<div class="modal-body">
					<form>
					<div class="form-group">
					<label for="exampleInputEmail1">Fullname</label>
					<input type="text" class="form-control" id="Fullname" placeholder="Fullname">
					</div>
					
					<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Alamat Acara</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Lokasi Acara">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Deskripsi Pemesanan Event</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Harus di tulis dengan benar apa yang di butuhkan untuk acara anda">
					</div>
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">No Hp</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="No Hp">
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Pesan</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
					</div>
					</div>
					</div>
                    </div>
                </div>
				<!-- Event Modal End -->
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Other Category</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>Rp.10,000,000 ~ Rp.500,000,0000</span>
                                <h4></h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>For your organization event</p>
                            <p></p>
                            
							
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a data-toggle="modal" data-target="#myother" href="#">Select Category</a>
                        </div>
						<div id="myother" class="modal fade" role="dialog">
					<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Other Event</h4>
					</div>
					<div class="modal-body">
					<form>
					<div class="form-group">
					<label for="exampleInputEmail1">Fullname</label>
					<input type="text" name="name" class="form-control" id="Fullname" placeholder="Fullname">
					</div>
					
					<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Alamat Acara</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Lokasi Acara">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Deskripsi Pemesanan Event</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Harus di tulis dengan benar apa yang di butuhkan untuk acara anda">
					</div>
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">No Hp</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="No Hp">
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Pesan</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
					</div>
					</div>
					</div>
                    </div>
                </div>
       
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Request Category</h5>
                            <div class="ca-price d-flex justify-content-center">
                                <span>Rp.10,000,000 ~ Rp.1,000,000,0000</span>
                                <h4></h4>
                            </div>
                        </div>
                        <div class="package-description">
                            <p>For your request design and event</p>
                            <p></p>
                            
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a data-toggle="modal" data-target="#myrquest" href="#">Select Category</a>
                        </div>
						<!-- Modal Event -->
					<div id="myrquest" class="modal fade" role="dialog">
					<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Request Event</h4>
					</div>
					<div class="modal-body">
					<form>
					<div class="form-group">
					<label for="exampleInputEmail1">Fullname</label>
					<input type="text" class="form-control" id="Fullname" placeholder="Fullname">
					</div>
					
					<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Alamat Acara</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat Lokasi Acara">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Event Request</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Event Request">
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">Deskripsi Pemesanan Event</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Harus di tulis dengan benar apa yang di butuhkan untuk acara anda">
					</div>
					</div>
					</div>
					<div class="form-group">
					<label for="exampleInputEmail1">No Hp</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="No Hp">
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Pesan</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
					</div>
					</div>
					</div>
                    
				<!-- Event Modal End -->
						
				</div>
                </div>
                </div>
            </div>
        
    </section>
    <!-- ***** Pricing Plane Area End ***** -->



    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Our Team</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/team-img/andy.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Andy Setiawan</h4>
                            <p>Front End ,Back End and Leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/team-img/billy.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Billy Raja Aziz</h4>
                            <p>Back End and Support Team</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/team-img/indra.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Indra Permana</h4>
                            <p>Quality Control and Support Team</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/team-img/abdul.jpg" alt="">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Abdul Malik</h4>
                            <p>Front End and Support Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Have a problem ?
						<br>please send an email to us!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>We will help you until you feel happy and everything is free and easy for you</p>
                    </div>
                    <div class="address-text">
                        <p><span>Address:</span> Meruya Selatan,Jakarta, Indonesia</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Phone:</span> +62 8123344556</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> cs.support@butuhevent.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Send Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	

    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <?php $this->load->view('footer') ?>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="<?php echo base_url()?>assets/bootstrap/js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/active.js"></script>
	<script>
		var slideIndex = 1;
		showDivs(slideIndex);
		var myIndex = 0;
		carousel();

		function carousel() {
		var i ;
		var x = document.getElementsByClassName("mySlides");
		  for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		  }
		  
		  myIndex++;
		  if (myIndex > x.length) {myIndex = 1}    
		  x[myIndex-1].style.display = "block";  
		  setTimeout(carousel, 2000); 
		}

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function currentDiv(n) {
		  showDivs(slideIndex = n);
		}

		function showDivs(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		
		  
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" w3-white", "");
		  }
		  
		  x[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " w3-white";
		  }
	</script>
	
	
</body>

</html>