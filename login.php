<?php
include_once('class.template.php');
$view = new Template(); 
$view->header = $view->render('header.php'); 
$view->navbar = $view->render('navbar.php'); 
$view->footer = $view->render('footer.php'); 
$view->sidebar_left   = $view->render('sidebar-left.php'); 
$view->sidebar_right  = $view->render('sidebar-right.php'); 
$view->footer_scripts = $view->render('footer-scripts.php'); 

echo $view->header;?>
<body class="login"><div id="wrapper" class="bg-white">
<?

echo $view->navbar;
echo $view->sidebar_left;
echo $view->sidebar_right;
?>

		<div id="page-content-wrapper" class="image-bg">
			<div class="bg-colorizer"></div>
			<div class="container-mix">
				<div class="pd-v-sm"></div>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="row pd-v-sm">
							<div class="headfont heavyfont upperfont h1 tx-white text-center" style="font-size:48px; z-index:1000; position:relative;">LOGIN</div>
							<div class="bg-black" style="position:absolute; opacity:0.8; height: 100%; width:100%; top:0;"></div>
						    <form class="col-md-8 col-md-offset-2" id="register" _lpchecked="1">

							    <input type="email" placeholder="Email" name="email" class="form-control">
							    <input type="password" placeholder="password" name="password" class="form-control" >
							    <div class="full-w">
								    <a href="view.php" id="user-toggle" class="dtran block-set text-left bg-lightblue tx-white bg-hv-white" style="width:100%">
										<span class="dtran bodyfont heavyfont upperfont">LOGIN</span>
										<span class="dtran text-center icon-arrow-right-outline bg-blue"></span>
									</a>
								</div>
								<div class="pd-v-sm"><div style="
								    border: 4px solid #02b6e6;
								    width: 20px;
								    display: inline-block;
								    height: 20px;
								            "></div><div class="tx-white upperfont bodyfont h5" style="
								    display: inline-block;
								    padding-left: 15px;
								    margin-top: 4px;
								    vertical-align: top;
								">TERMS AND CONDITIONS</div>
								<div class="upperfont bodyfont tx-blue h5 text-right" style="
								    display: inline-block;
								    padding-left: 15px;
								    margin-top: 4px;
								    vertical-align: top;
								    text-align: right;
								    float: right;
								    "><a href="register.php">REGISTER</a></div>
								</div>
								<div class="full-w">
								    <a href="view.php" class="dtran block-set text-left bg-none bd-xs bd-white tx-white bg-hv-white" style="width:100%; height:42px;">
										<span class="dtran bodyfont heavyfont">Login with LinkedIn</span>
										<span class="dtran text-center icon-linkedin2 bd-white bd-xs bg-none bd-left bd-zero"></span>
									</a>
								</div>
								<div class="full-w mg-v-sm">
								    <a href="view.php" class="dtran block-set text-left bg-none bd-xs bd-white tx-white bg-hv-white" style="width:100%; height:42px;">
										<span class="dtran bodyfont heavyfont">Login with Facebook</span>
										<span class="dtran text-center icon-facebook3 bd-white bd-xs bg-none bd-left bd-zero" style="
										    text-align: left;
										    padding-left: 7px;
										    line-height: 40px;
										"></span>
									</a>
								</div>
								<div class="full-w mg-v-sm">
								    <a href="view.php" class="dtran block-set text-left bg-none bd-xs bd-white tx-white bg-hv-white" style="width:100%; height:42px;">
										<span class="dtran bodyfont heavyfont">Login with Twitter</span>
										<span class="dtran text-center icon-twitter bd-white bd-xs bg-none bd-left bd-zero"></span>
									</a>
								</div>
							    <div class="clearfix"></div>
						    </form>
						 </div>
					</div>
				</div>
			</div>
			<div class="pd-v-md"></div>
		</div>

<?php


echo $view->footer;
echo $view->footer_scripts;



?>