<?php
include_once('class.template.php');
$view = new Template(); 
$view->header = $view->render('header.php'); 
$view->navbar = $view->render('navbar.php'); 
$view->footer = $view->render('footer.php'); 
$view->sidebar_left   = $view->render('sidebar-left.php'); 
$view->sidebar_right  = $view->render('sidebar-right.php'); 
$view->footer_scripts = $view->render('footer-scripts.php'); 

echo $view->header;
echo $view->navbar;
echo $view->sidebar_left;
echo $view->sidebar_right;


?>

		<div id="page-content-wrapper">
			<div class="container-mix">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 bg-black">
						<div class="row pd-v-sm">
							<div class="headfont heavyfont upperfont h1 tx-white text-center" style="font-size:48px">REGISTER</div>
							<div class="bg-black" style="position:absolute; opacity:0.8;"></div>
						    <form class="col-md-8 col-md-offset-2" id="register" _lpchecked="1">
							    <input type="text" placeholder="First Name" name="firstname" class="form-control">
							    <input type="text" placeholder="Last Name" name="lastname" class="form-control">
							    <input type="email" placeholder="Email" name="email" class="form-control">
							    <input type="password" placeholder="password" name="password" class="form-control" >
							    <input type="submit" value="SUBMIT" class="form-control text-left tx-white bg-blue">
							    <input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.
							    
							    <div class="clearfix"></div>
						    </form>
						 </div>
					</div>
				</div>
			</div>
		</div>

<?php


echo $view->footer;
echo $view->footer_scripts;



?>