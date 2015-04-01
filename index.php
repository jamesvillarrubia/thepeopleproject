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
					<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 pd-md"></div>
					<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 bg-lightblue text-right">
						<span class="tx-white pd-sm mg-n bodyfont heavyfont upperfont h4" style="float:left;padding: 15px 20px;">Search</span>
						<a href="grid.php"><span class="search-button icon-grid" style=""></span></a>
						<a href="list.php"><span class="search-button icon-list" style=""></span></a>
						<a href="map.php"><span class="search-button icon-map" style=""></span></a>
						</div>
					<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 pd-md bg-lightgray">
						<div id="builder-basic"></div>
					</div>
				</div>
			</div>
		</div>

<?php


echo $view->footer;
echo $view->footer_scripts;



?>