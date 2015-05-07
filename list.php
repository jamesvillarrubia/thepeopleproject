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
	<div id="page-content-wrapper" class="image-bg">
		<div class="bg-colorizer white"></div>
		<div class="container-mix">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 pd-md"></div>
				<div class="col-sm-10 col-sm-offset-1 bg-lightblue text-right">
					<span class="tx-white pd-sm mg-n bodyfont heavyfont upperfont h4" style="float:left;padding: 15px 20px;">Search</span>
					<a href="search.php"><span class="search-button icon-search" style=""></span></a>
					<a href="grid.php"><span class="search-button icon-grid" style=""></span></a>
					<a href="list.php"><span class="search-button icon-list" style=""></span></a>
					<a href="map.php"><span class="search-button icon-map active" style=""></span></a>
					</div>
				<div class="col-sm-10 col-sm-offset-1 pd-v-lg bg-lightgray">
					<div class="col-md-10 col-md-offset-1">
						<div class="row-same-height pd-v-sm bd-zero bd-bottom bd-sm bd-white">			<div class="col-md-2 col-md-height col-middle pd-n mg-n text-center">
								<img src="images/chris.jpg" class="img-responsive bg-white pd-xs mg-n text-center" style="max-width: 100px;margin: auto;">
							</div>
							<div class="col-md-7 col-md-height col-middle ">
								<div class="bodyfont upperfont tx-lightblue h3 mg-n">Chris Jones</div>
								<div class="bodyfont tx-black heavyfont h6 mg-n">Owner at Politempts</div>
								<div clas="bodyfont tx-black">Washington, DC | Human Resources and Staffing</div>
							</div>
							<div class="col-md-2 col-md-height col-middle pd-h-n">
								<div style="text-align:right;">
									<a href="view.php" class="dtran block-set full-w text-left bg-lightblue tx-white bg-hv-white" style="margin:0px;">
										<span class="dtran bodyfont heavyfont upperfont">View</span>
										<span class="dtran text-center bg-blue icon-arrow-right-outline"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="row-same-height pd-v-sm bd-zero bd-bottom bd-sm bd-white">			<div class="col-md-2 col-md-height col-middle pd-n mg-n text-center">
								<img src="images/liz.jpg" class="img-responsive bg-white pd-xs mg-n text-center" style="max-width: 100px;margin: auto;">
							</div>
							<div class="col-md-7 col-md-height col-middle ">
								<div class="bodyfont upperfont tx-lightblue h3 mg-n">Liz Sears Smith</div>
								<div class="bodyfont tx-black heavyfont h6 mg-n">Managing Director Kent Strategies</div>
								<div clas="bodyfont tx-black">Washington, District Of Columbia | Public Policy</div>
							</div>
							<div class="col-md-2 col-md-height col-middle pd-h-n">
								<div style="text-align:right;">
									<a href="view.php" class="dtran block-set full-w text-left bg-lightblue tx-white bg-hv-white" style="margin:0px;">
										<span class="dtran bodyfont heavyfont upperfont">View</span>
										<span class="dtran text-center bg-blue icon-arrow-right-outline"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="row-same-height pd-v-sm bd-zero bd-bottom bd-sm bd-white">			<div class="col-md-2 col-md-height col-middle pd-n mg-n text-center">
								<img src="images/james.jpg" class="img-responsive bg-white pd-xs mg-n text-center" style="max-width: 100px;margin: auto;">
							</div>
							<div class="col-md-7 col-md-height col-middle ">
								<div class="bodyfont upperfont tx-lightblue h3 mg-n">James Villarrubia</div>
								<div class="bodyfont tx-black heavyfont h6 mg-n">Senior Front End Developer at Democratic National Committee</div>
								<div clas="bodyfont tx-black">Washington, DC | Political Organization</div>
							</div>
							<div class="col-md-2 col-md-height col-middle pd-h-n">
								<div style="text-align:right;">
									<a href="view.php" class="dtran block-set full-w text-left bg-lightblue tx-white bg-hv-white" style="margin:0px;">
										<span class="dtran bodyfont heavyfont upperfont">View</span>
										<span class="dtran text-center bg-blue icon-arrow-right-outline"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="row-same-height pd-v-sm bd-zero bd-bottom bd-sm bd-white">			<div class="col-md-2 col-md-height col-middle pd-n mg-n text-center">
								<img src="images/bernie.jpg" class="img-responsive bg-white pd-xs mg-n text-center" style="max-width: 100px;margin: auto;">
							</div>
							<div class="col-md-7 col-md-height col-middle ">
								<div class="bodyfont upperfont tx-lightblue h3 mg-n">Bernie Prat</div>
								<div class="bodyfont tx-black heavyfont h6 mg-n">Director, Product Management at Recruitics</div>
								<div clas="bodyfont tx-black">New York, New YorkComputer Software</div>
							</div>
							<div class="col-md-2 col-md-height col-middle pd-h-n">
								<div style="text-align:right;">
									<a href="view.php" class="dtran block-set full-w text-left bg-lightblue tx-white bg-hv-white" style="margin:0px;">
										<span class="dtran bodyfont heavyfont upperfont">View</span>
										<span class="dtran text-center bg-blue icon-arrow-right-outline"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="row pd-v-sm">
							<div class="col-sm-4 col-sm-offset-8">
								<div style="text-align:right;">
									<a href="" class="dtran block-set full-w text-left bg-lightblue tx-white bg-hv-white" style="margin:0px;">
										<span class="dtran bodyfont heavyfont upperfont">Display More</span>
										<span class="dtran text-center bg-blue icon-arrow-down-outline"></span>
									</a>
								</div>
							</div>
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