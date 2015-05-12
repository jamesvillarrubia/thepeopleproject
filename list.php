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
<?php 
$res = array(
	array(
		'name'=>'Chris Jones',
		'pos'=>'Owner',
		'comp'=>'Politempts',
		'loc'=>'Washington, DC',
		'field'=>'Human Resources and Staffing',
		'from'=>'2006',
		'to'=>'Present',
		'photo'=>'chris.jpg'
	),
	array(
		'name'=>'Liz Sears Smith',
		'pos'=>'Managing Director',
		'comp'=>'Kent Strategies',
		'loc'=>'Washington, DC',
		'field'=>'Public Policy',
		'from'=>'2006',
		'to'=>'Present',
		'photo'=>'liz.jpg'
	),
	array(
		'name'=>'James Villarrubia',
		'pos'=>'Front End Developer',
		'comp'=>'Democratic National Committee',
		'loc'=>'Washington, DC',
		'field'=>'Political Organization',
		'from'=>'2014',
		'to'=>'Present',
		'photo'=>'james.jpg'
	),
	array(
		'name'=>'Bernard Prat',
		'pos'=>'Director of Product Management',
		'comp'=>'Recruitrics',
		'loc'=>'New York, New York',
		'field'=>'Computer Software',
		'from'=>'2014',
		'to'=>'Present',
		'photo'=>'bernie.jpg'
	),
	array(
		'name'=>'Jayne Cobb',
		'pos'=>'Public Relations Manager',
		'comp'=>'Canton Consulting',
		'loc'=>'Baltimore, MD',
		'field'=>'Human Resources and Staffing',
		'from'=>'2008',
		'to'=>'Present',
		'photo'=>'head1.jpg'
	),
	array(
		'name'=>'Ben Barker',
		'pos'=>'Artistic Director',
		'comp'=>'The Fleet Grp.',
		'loc'=>'Baltimore, MD',
		'field'=>'Arts Organization',
		'from'=>'2008',
		'to'=>'Present',
		'photo'=>'head2.jpg'
	),
	array(
		'name'=>'Alexis Sloane',
		'pos'=>'HR Director',
		'comp'=>'SGH Insurance',
		'loc'=>'Baltimore, MD',
		'field'=>'Human Resources and Staffing',
		'from'=>'2008',
		'to'=>'Present',
		'photo'=>'head3.jpg'
	),
	array(
		'name'=>'Kay Frye',
		'pos'=>'Chief Technology Officer',
		'comp'=>'Serenity Staff Solutions',
		'loc'=>'Baltimore, MD',
		'field'=>'Human Resources and Staffing',
		'from'=>'2008',
		'to'=>'Present',
		'photo'=>'head4.jpg'
	),
	array(
		'name'=>'Don Noble',
		'pos'=>'Owner',
		'comp'=>'Adipose Networking',
		'loc'=>'Baltimore, MD',
		'field'=>'Human Resources and Staffing',
		'from'=>'2008',
		'to'=>'Present',
		'photo'=>'head5.jpg'
	)


);
?>


<?php for($x=0;$x<count($res); $x++){ ?>

						<div class="row-same-height pd-v-sm pd-h-lg">
							<div class="col-md-6 col-md-height col-middle ">
								<div class="bodyfont upperfont tx-lightblue h3 mg-n"><?php echo $res[$x]['name']; ?></div>
								<div class="bodyfont tx-black heavyfont h6 mg-n"><?php echo $res[$x]['pos']; ?> at <?php echo $res[$x]['comp']; ?></div>
								<div clas="bodyfont tx-black"><?php echo $res[$x]['loc']; ?> | <?php echo $res[$x]['field']; ?></div>
								<div clas="bodyfont tx-black">From <?php echo $res[$x]['from']; ?> to <?php echo $res[$x]['to']; ?></div>
							</div>
						<div class="col-md-4 col-md-height col-middle text-right">
							<a href="" class="tx-no-dec dtran tx-hv-blue icon-envelop tx-lightblue pd-xs inline-b h4 " style=""></a>
							<a href="" class="tx-no-dec dtran tx-hv-blue icon-facebook3 tx-lightblue pd-xs inline-b h4 " style=""></a>
							<a href="" class="tx-no-dec dtran tx-hv-blue icon-twitter tx-lightblue pd-xs  inline-b h4 " style=""></a>
							<a href="" class="tx-no-dec dtran tx-hv-blue icon-linkedin2 tx-lightblue pd-xs inline-b h4 " style=""></a>
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
						<div class="row mg-v-vs">
							<div class="col-xs-10 col-xs-offset-1 bd-zero bd-bottom bd-sm bd-white"></div>
						</div>
<?php } ?>


					<div class="row pd-v-sm pd-h-lg">
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
<?php


echo $view->footer;
echo $view->footer_scripts;



?>