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

<?php
	for($x=0;$x<count($res); $x++){ 
		if($x % 4 == 0){
			echo '<div class="row">';
		}
?>
	
					<div class="col-md-3 pd-sm">
						<img src="images/<?php echo $res[$x]['photo'];?>" class="img-responsive"/>
						<div class="text-center tx-lightblue h4"><?php echo $res[$x]['name'];?></div>
						<div class="text-center tx-black heavyfont h5"><?php echo $res[$x]['pos'];?></div>
						<div class="text-center tx-black h5"><?php echo $res[$x]['comp'];?></div>
						<div class="text-center tx-black h5"><?php echo $res[$x]['loc'];?></div>
						<div class="text-center tx-black h5"><?php echo $res[$x]['from'].' to '.$res[$x]['to'];?></div>
						<div class="text-center">
							<a href="" class="tx-no-dec dtran tx-hv-blue icon-envelop tx-lightblue pd-xs inline-b h5 " style=""></a>
							<a href="" class="tx-no-dec dtran tx-hv-blue icon-facebook3 tx-lightblue pd-xs inline-b h5 " style=""></a>
							<a href="" class="tx-no-dec dtran tx-hv-blue icon-twitter tx-lightblue pd-xs inline-b h5" style=""></a>
							<a href="" class="tx-no-dec dtran tx-hv-blue icon-linkedin2 tx-lightblue pd-xs inline-b h5 " style=""></a>
						</div>
					</div>
<? 
		if(($x%4 == 3) || ($x ==(count($res)-1))){
			echo '</div>';
		}
	} 
?>
			
				</div>
			</div>
		</div>
	</div>

<?php


echo $view->footer;
echo $view->footer_scripts;



?>