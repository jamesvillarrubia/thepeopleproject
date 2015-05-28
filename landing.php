


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
                        <a class="page-scroll tx-white tx-hv-lightblue" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll tx-white tx-hv-lightblue" href="#leaders">Leaders</a>
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


<section class="pd-v-md bg-gray" >
	<div class="container">                
        <div class="row text-center mg-v-md">
	    	<div class="col-md-12 h3 tx-white lightfont" style="line-height: 1.4em">
			The People Project is a database application for progressive and Democratic talent. This endeavor will enable organizations to track and manage the most important resource: <strong>people.</strong>
			</div>
		</div>
	</div>
</section>

<section id="about" class="pd-v-md bg-white pd-v-lg">
	<div class="container">                
	    <div class="row text-center mg-v-md">
		    <div class="col-lg-12 text-center">
		        <h2 class="upperfont headfont">About the People PRoject</h2>
	        </div>
	    	<div class="col-md-12 h3 tx-gray lightfont" style="line-height: 1.4em">
			Over the past 20 years, we’ve seen administrations, campaigns, and the political world adopt and fine-tune the latest private sector technology in many key areas — media buying, polling, big data, targeting, GOTV, volunteer activation, advertising — but not in talent management, the people side of the equation. Political parties, administrations, and campaigns generally don’t keep track of good people with regard to hiring, recruiting, sourcing, and maximizing career development.
			</div>
		</div>
	    <div class="row text-center mg-v-md">
	    	<div class="col-md-12 h3 tx-gray lightfont">
				<strong>Let’s change that.</strong>
			</div>
		</div>
</section>


<section id="bigquote" class="pd-v-xl bg-blue">
    <div class="container">
        <div class="text-center">
			<span class="bodyfont tx-lightblue">&#8221;</span>
			<span class="bodyfont tx-white">This is the tool the Progressive Movement has been waiting for.</span>
		</div>
	</div>
</section>







<section id="leaders" class="bg-white pd-v-lg">
        <div class="container">
        	<div class="row mg-v-md">
                <div class="col-lg-12 text-center">
	                <h2 class="upperfont headfont">Leadership</h2>
                </div>
            </div>
		    <div class="row mg-v-md h3 tx-gray bodyfont lightfont">
                <div class="col-md-4 col-md-offset-2 text-center">
	                Chris Jones
                </div>
                <div class="col-md-4 text-center">
	                Elizabeth Sears Smith
                </div>
            </div>

             <div class="row mg-v-md">
                <div class="col-lg-12 text-center">
	                <h2 class="upperfont headfont">Advisory Board</h2>
                </div>
            </div>
		    <div class="row mg-v-md h3 tx-gray bodyfont lightfont">
                <div class="col-md-4 col-md-offset-2 text-center">
	                Dean Aguillen<br>
					Jill Alper<br>
					Charles Baker III<br>
					David Brock<br>
					Irene Bueno<br>
					Maria Cardona<br>
					Aneesh Chopra<br>
					Shelly Kapoor Collins<br>
					Jen O’Malley Dillon<br>
					Karen Finney<br>
					Teddy Goff<br>
					Jon Haber<br>
					
				</div>
				<div class="col-md-4 text-center">
					Marc Lasry<br>
					Penny Lee<br>
					Tom Manatos<br>
					Lenny Mendonca<br>
					Arnie Miller<br>
					Nathaniel Pearlman<br>
					Cecile Richards<br>
					Steve Rosenthal<br>
					Stephanie Schriock<br>
					Mitch Stewart<br>
					Bryan Whitaker<br>
					Paul Zygielbaum
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
