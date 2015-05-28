


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

echo $view->header;?>
<body class="search"><div id="landing" class="bg-white">

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
                        <a class="page-scroll tx-white tx-hv-lightblue" href="landing.php#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll tx-white tx-hv-lightblue" href="landing.php#leaders">Leaders</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header class="pd-v-xl bg-black tx-white">
    	<div class="colorizer"></div>
        <div class="container pd-v-xl" style="
		    position: relative;
		    z-index: 1;
		">
        <div class="col-md-6 pd-v-sm logo-wrapper">
        	<img src="images/white_logo.png" class="img-responsive logo" style="">
        </div>
        <div class="col-md-6 pd-v-sm">
            <div class="intro-text text-center">
            	<div class="" style="padding: 3px 0px 0px 15px; text-transform: uppercase; font-size: 20px;">
            		Sign up to hear more:
            	</div>
	            <!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; }
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
				<form action="//peopleproject.us10.list-manage.com/subscribe/post?u=9d96f750e45ed0698a8bdd8fc&amp;id=87486be2a2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					
				<div class="mc-field-group">
					<input type="email" value="" placeholder="EMAIL" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;"><input type="text" name="b_9d96f750e45ed0698a8bdd8fc_87486be2a2" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
				</div>
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
			 </div>
        </div>
    </header>


<section id="pricing" class="bg-blue pd-v-lg">
		<div class="container">
			<div class="row pd-v-md">
				<div class="col-md-12">
					<h3 class="text-center h3 upperfont bodyfont tx-white">Free trial. No contract. Cancel when you want.</h3>
					<p class="text-center upperfont bodyfont h5 tx-white">All plans include a 7-day free trial</p>
				</div>
			</div>
			<div class="row"><div class="row-same-height text-center">
				<div class="col-md-2 col-md-1-offset col-xs-height col-bottom">
					<div class="chart first">
						<div class="quantity">
							<span class="dollar"></span>
							<span class="price">Free</span>
							<span class="period"></span>
						</div>
						<div class="plan-name">City Councilor</div>
						<div class="specs">
							<div class="spec">
								<span class="variable">1</span>
								Personal Profile
							</div>
							<div class="spec">
								<span class="variable">1</span>
								Shareable Resume
							</div>
							<div class="spec">
								<span class="variable">Links</span>
								to Major Social Media
							</div>
							<div class="spec">
								<span class="variable">Connect</span>
								with Friends and Colleagues
							</div>
						</div>
						<a class="btn-signup button-clear bg-lightblue" href="signup.html">
							<span>Start free trial</span>
						</a>
					</div>
				</div>
				<div class="col-md-2 col-xs-height col-bottom">
					<div class="chart featured">
						<div class="quantity">
							<span class="dollar">$</span>
							<span class="price">29</span>
							<span class="period">/month</span>
						</div>
						<div class="plan-name">Delegate</div>
						<div class="specs">
							<div class="spec">
								<span class="variable">1</span>
								Personal Profile
							</div>
							<div class="spec">
								<span class="variable">1</span>
								Shareable Resume
							</div>
							<div class="spec">
								<span class="variable">5</span>
								Targeted Searches / month
							</div>
							<div class="spec">
								<span class="variable">Connect</span>
								with Friends and Colleagues
							</div>
						</div>
						<a class="btn-signup button-clear" href="signup.html">
							<span>Start free trial</span>
						</a>
					</div>
				</div>
				<div class="col-md-2 col-xs-height col-bottom">
					<div class="chart">
						<div class="popular">Most popular</div>
						<div class="quantity">
							<span class="dollar">$</span>
							<span class="price">100</span>
							<span class="period">/month</span>
						</div>
						<div class="plan-name">Representative</div>
						<div class="specs">
							<div class="spec">
								<span class="variable">1</span>
								Personal Profile
							</div>
							<div class="spec">
								<span class="variable">1</span>
								Shareable Resume
							</div>
							<div class="spec">
								<span class="variable">Unlimited</span>
								Targeted Searches / month
							</div>
							<div class="spec">
								<span class="variable">Direct</span>
								Messaging to Applicants
							</div>
						</div>
						<a class="btn-signup button-clear" href="signup.html">
							<span>Start free trial</span>
						</a>
					</div>
				</div>
				<div class="col-md-2 col-xs-height col-bottom">
					<div class="chart">
						<div class="quantity">
							<span class="dollar">$</span>
							<span class="price">300</span>
							<span class="period">/month</span>
						</div>
						<div class="plan-name">Senator</div>
						<div class="specs">
							<div class="spec">
								<span class="variable">Team</span>
								Messaging and notations
							</div>
							<div class="spec">
								<span class="variable">Full</span>
								List Management
							</div>
							<div class="spec">
								<span class="variable">Unlimited</span>
								Targeted Searches / month
							</div>
							<div class="spec">
								<span class="variable">Direct</span>
								Messaging to Applicants
							</div>
						</div>
						<a class="btn-signup button-clear" href="signup.html">
							<span>Start free trial</span>
						</a>
					</div>
				</div>
				<div class="col-md-2 col-xs-height col-bottom">
					<div class="chart">
						<div class="quantity">
							<span class="dollar">$</span>
							<span class="price">750</span>
							<span class="period">/month</span>
						</div>
						<div class="plan-name">Madam President</div>
						<div class="specs">
							<div class="spec">
								<span class="variable">Full</span>
								Feature Access
							</div>
							<div class="spec">
								<span class="variable">Full</span>
								List Management
							</div>
							<div class="spec">
								<span class="variable">Team</span>
								Messaging and notations
							</div>
							<div class="spec">
								<span class="variable">On-Demand </span>
								Support from HR Professionals
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
