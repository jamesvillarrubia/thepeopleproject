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
				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 pd-md"></div>
				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 bg-lightblue text-right">
					<span class="tx-white pd-sm mg-n bodyfont heavyfont upperfont h4" style="float:left;padding: 15px 20px;">Search</span>
					<a href="search.php"><span class="search-button icon-search" style=""></span></a>
					<a href="grid.php"><span class="search-button icon-grid" style=""></span></a>
					<a href="list.php"><span class="search-button icon-list" style=""></span></a>
					<a href="map.php"><span class="search-button icon-map" style=""></span></a>
					</div>
				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 pd-md bg-lightgray">
					<div class="row">
					<div class="col-md-3 pd-sm">
						<img src="images/chris.jpg" class="img-responsive"/>
						<div class="text-center tx-lightblue h4">Chris Jones</div>
						<div class="text-center tx-black heavyfont h5">Owner</div>
						<div class="text-center tx-black h5">Politemps</div>
					</div>
					<div class="col-md-3 pd-sm">
						<img src="images/liz.jpg" class="img-responsive"/>
						<div class="text-center tx-lightblue h4">Liz Sears Smith</div>
						<div class="text-center tx-black heavyfont h5">Managing Director</div>
						<div class="text-center tx-black h5">Kent Strategies</div>
					</div>
					<div class="col-md-3 pd-sm">
						<img src="images/head1.jpg" class="img-responsive"/>
						<div class="text-center tx-lightblue h4">Jayne Cobb</div>
						<div class="text-center tx-black heavyfont h5">Public Relations Manager</div>
						<div class="text-center tx-black h5">Canton Consulting</div>
					</div>
					<div class="col-md-3 pd-sm">
						<img src="images/james.jpg" class="img-responsive"/>
						<div class="text-center tx-lightblue h4">James Villarrubia</div>
						<div class="text-center tx-black heavyfont h5">Senior Front End Developer</div>
						<div class="text-center tx-black h5">Democratic National Committee</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-3 pd-sm">
						<img src="images/bernie.jpg" class="img-responsive"/>
						<div class="text-center tx-lightblue h4">Bernie Prat</div>
						<div class="text-center tx-black heavyfont h5">Director, Product Management</div>
						<div class="text-center tx-black h5">Recruitics</div>
					</div>
					<div class="col-md-3 pd-sm">
						<img src="images/head2.jpg" class="img-responsive"/>
						<div class="text-center tx-lightblue h4">Ben Barker</div>
						<div class="text-center tx-black heavyfont h5">Artistic Director</div>
						<div class="text-center tx-black h5">The Fleet Grp.</div>
					</div>
					<div class="col-md-3 pd-sm">
						<img src="images/head3.jpg" class="img-responsive"/>
						<div class="text-center tx-lightblue h4">Alexis Sloane</div>
						<div class="text-center tx-black heavyfont h5">HR Director</div>
						<div class="text-center tx-black h5">SGH Insurance</div>
					</div>
					<div class="col-md-3 pd-sm">
						<img src="images/head5.jpg" class="img-responsive"/>
						<div class="text-center tx-lightblue h4">Kay Frye</div>
						<div class="text-center tx-black heavyfont h5">Chief Technology Officer</div>
						<div class="text-center tx-black h5">Serenity Staff Solutions</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-3 pd-sm">
						<img src="images/head4.jpg" class="img-responsive"/>
						<div class="text-center tx-lightblue h4">Don Noble</div>
						<div class="text-center tx-black heavyfont h5">Owner</div>
						<div class="text-center tx-black h5">Adipose Networking</div>
					</div>
					</div>

				</div>
			</div>
		</div>
	</div>

<?php


echo $view->footer;
echo $view->footer_scripts;



?>