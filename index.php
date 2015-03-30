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
<body class="search"><div id="wrapper" class="bg-white">
<?

echo $view->navbar;
echo $view->sidebar_left;
echo $view->sidebar_right;
?>
		<div id="page-content-wrapper">
			<div class="container-mix">
				<div class="row">
					<div class="col-lg-12 pd-md"></div>
					<div class="col-lg-12 bg-lightblue text-right">
					<h4 class="inline-b bg-hv-blue mg-n tx-white pd-sm upperfont heavyfont boydfont">Search</h4>
					<h4 class="inline-b bg-hv-blue tx-white mg-n pd-sm upperfont heavyfont boydfont">Quick Results</h4>
					<h4 class="inline-b bg-hv-blue tx-white mg-n pd-sm upperfont heavyfont boydfont">Table Results</h4>
					<h4 class="inline-b bg-hv-blue tx-white mg-n pd-sm upperfont heavyfont boydfont">Geo Results</h4>
					</div>
					<div class="col-lg-12 pd-md bg-lightgray">
						<div id="builder-basic"></div>
					</div>
				</div>
			</div>
		</div>

<?php


echo $view->footer;
echo $view->footer_scripts;



?>