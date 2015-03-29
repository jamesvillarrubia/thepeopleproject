


<?php
include_once('class.template.php');
$view = new Template(); 
$view->header = $view->render('header.php'); 
//$view->navbar = $view->render('navbar.php'); 
$view->navbar = $view->render('navbar_landing.php'); 
$view->footer = $view->render('footer.php'); 
//$view->sidebar_left   = $view->render('sidebar-left.php'); 
//$view->sidebar_right  = $view->render('sidebar-right.php'); 
$view->footer_scripts = $view->render('footer-scripts.php'); 

echo $view->header;
//echo $view->navbar;
//echo $view->sidebar_left;
//echo $view->sidebar_right;


?>
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top bg-black">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
					<img src="images/white_logo.png" class="img-responsive" style="max-width: 100px; margin-top:-20px;">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header class="pd-v-xl bg-black tx-white">
        <div class="container pd-v-xl">
            <div class="intro-text text-center">
                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>



<section id="quotes" class="pd-v-xl bg-white">
	Quote

</section>


<section id="bigwuote" class="pd-v-xl bg-blue">
	Big Quote
</section>







<section id="team" class="bg-lightgray">
        <div class="container">
            <div class="row mg-v-md">
                <div class="col-lg-12 text-center">
	                <h2 class="upperfont headfont">Our Team</h2>
                </div>
            </div>
            <div class="row text-center mg-v-md">
            	<div class="col-xs-8 col-xs-offset-2">
            		<div class="row">
		                <div class="col-sm-4 col-sm-offset-2">
		                    <div class="team-member">
		                        <img src="images/chris.jpg" class="img-responsive img-circle bd-white bd-xl" alt="">
		                        <div class="h3 bodyfont heavyfont">Chris Jones</div>
		                        <p class="tx-gray bodyfont h4">Partner</p>
		                        <ul class="list-inline social-buttons">
		                            <li><a href="#"><span class="icon-twitter"></span></a>
		                            </li>
		                            <li><a href="#"><span class="icon-facebook4"></span></a>
		                            </li>
		                            <li><a href="#"><span class="icon-linkedin2"></span></a>
		                            </li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-sm-4">
		                    <div class="team-member">
		                        <img src="images/liz.jpg" class="img-responsive img-circle bd-white bd-xl" alt="">
		                        <div class="h3 bodyfont heavyfont ">Elizabeth Smith</div>
		                        <p class="tx-gray bodyfont h4">Partner</p>
		                        <ul class="list-inline social-buttons">
		                            <li><a href="#"><span class="icon-twitter"></span></a>
		                            </li>
		                            <li><a href="#"><span class="icon-facebook4"></span></a>
		                            </li>
		                            <li><a href="#"><span class="icon-linkedin2"></span></a>
		                            </li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
	            </div>
            </div>
        </div>
</section>

<section id="partners" class="bg-white mg-v-md">
	<div class="container">
<!--	
		<div class="row pd-v-sm">
            <div class="col-xs-8 col-xs-offset-2 text-center">
                <hr class="bd-lightgray">
            </div>
    	</div>
-->
        <div class="row pd-v-sm">
            <div class="col-lg-12 text-center">
                <h2 class="upperfont headfont">Our Partners</h2>
            </div>
    	</div>
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
    			<div class="row">
					<div class="row-same-height pd-v-md bodyfont upperfont text-center">
						<div class="col-md-2 col-xs-height col-middle  col-md-offset-2">
							<img src="images/dsg.png" class="img-responsive">
						</div>
						<div class="col-md-2 col-xs-height col-middle ">
							<img src="images/EMILYsList-1.jpg" class="img-responsive">
						</div>
						<div class="col-md-2 col-xs-height col-middle ">
							<img src="images/politemps.jpg" class="img-responsive">
						</div>
						<div class="col-md-2 col-xs-height col-middle ">
							<img src="images/ngpvan.png" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="row-same-height">
						<div class="col-md-2 col-xs-height col-middle col-md-offset-2">
							<img src="images/precision.jpeg" class="img-responsive">
						</div>
						<div class="col-md-2 col-xs-height col-middle ">
							<img src="images/media-matters-long.jpg" class="img-responsive">
						</div>
						<div class="col-md-2 col-xs-height col-middle ">
							<img src="images/270.png" class="img-responsive">
						</div>
						<div class="col-md-2 col-xs-height col-middle ">
							<img src="images/pp.jpg" class="img-responsive">
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>
</section>

<section id="pricing" class="bg-blue">
		<div class="container" style="max-width:750px;">
			<div class="row pd-v-md">
				<div class="col-md-12">
					<h3 class="text-center h3 upperfont bodyfont tx-white">Free trial. No contract. Cancel when you want.</h3>
					<p class="text-center upperfont bodyfont h5 tx-white">All plans include a 7-day free trial</p>
				</div>
			</div>
			<div class="row"><div class="row-same-height text-center">
				<div class="col-md-4 col-xs-height col-bottom">
					<div class="chart first">
						<div class="quantity">
							<span class="dollar">$</span>
							<span class="price">29</span>
							<span class="period">/month</span>
						</div>
						<div class="plan-name">Freelance</div>
						<div class="specs">
							<div class="spec">
								<span class="variable">5</span>
								team members
							</div>
							<div class="spec">
								<span class="variable">Digital</span>
								recurring billing
							</div>
							<div class="spec">
								<span class="variable">Virtual</span>
								online terminal
							</div>
							<div class="spec">
								<span class="variable">10</span>
								total products
							</div>
							<div class="spec">
								<span class="variable">1.0%</span>
								Transaction fee
							</div>
						</div>
						<a class="btn-signup button-clear bg-lightblue" href="signup.html">
							<span>Start free trial</span>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-xs-height col-bottom">
					<div class="chart featured">
						<div class="popular">Most popular</div>
						<div class="quantity">
							<span class="dollar">$</span>
							<span class="price">79</span>
							<span class="period">/month</span>
						</div>
						<div class="plan-name">Profesional</div>
						<div class="specs">
							<div class="spec">
								<span class="variable">15</span>
								team members
							</div>
							<div class="spec">
								<span class="variable">Digital</span>
								recurring billing
							</div>
							<div class="spec">
								<span class="variable">Virtual</span>
								online terminal
							</div>
							<div class="spec">
								<span class="variable">15</span>
								total products
							</div>
							<div class="spec">
								<span class="variable">0.5%</span>
								Transaction fee
							</div>
						</div>
						<a class="btn-signup button-clear" href="signup.html">
							<span>Start free trial</span>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-xs-height col-bottom">
					<div class="chart last">
						<div class="quantity">
							<span class="dollar">$</span>
							<span class="price">119</span>
							<span class="period">/month</span>
						</div>
						<div class="plan-name">Premium</div>
						<div class="specs">
							<div class="spec">
								<span class="variable">Unlimited</span>
								team members
							</div>
							<div class="spec">
								<span class="variable">Digital</span>
								recurring billing
							</div>
							<div class="spec">
								<span class="variable">Virtual</span>
								online terminal
							</div>
							<div class="spec">
								<span class="variable">25</span>
								total products
							</div>
							<div class="spec">
								<span class="variable">No</span>
								Transaction fee
							</div>
						</div>
						<a class="btn-signup button-clear" href="signup.html">
							<span>Start free trial</span>
						</a>
					</div>
				</div>
		</div>
		<div class="pd-v-md"></div>
	</div>
</section>


<section id="contact" class="bg-white" style="background-image: url('images/map.png');background-size: cover;background-position: center center;">
	
<div class="container">
            <div class="row mg-v-md">
                <div class="col-lg-12 text-center">
                    <h2 class="headfont heavyfont upperfont tx-black">Contact Us</h2>
                </div>
            </div>
            <div class="row mg-v-md">
                <div class="col-md-8 col-md-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row-same-height">
                            <div class="col-md-6 col-md-height">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-height">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."style="height:70px"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</section>



<footer class="bg-black tx-lightgray pd-v-sm" style="position:relative;">
<div class="container-mix">
<div class="row pd-v-sm">
<div class="col-md-offset-2 col-md-8">
Contact Us  |  Home  |  Copyright 2015, The People Project  |  Design by Prospero DC
</div>
</div>
</div>
</footer>


	<?php


echo $view->footer_scripts;



?>



<script src="js/lander.js"></script>
