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
					<div class="col-lg-12 pd-md"></div>
					<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 bg-lightblue text-right">
						<span class="tx-white pd-sm mg-n bodyfont heavyfont upperfont h4" style="float:left;padding: 15px 20px;">Profile</span>	
					</div>
					<div class="col-xs-10 col-xs-offset-1 pd-md bg-lightgray">
						<div class="row">
							<div class="col-md-2 col-sm-4 text-center">
								<img src="images/chris.jpg" class='img-circle img-responsive'/>
							</div>
							<div class="col-md-10 col-sm-8 pd-v-n mg-v-n">
								<div class="col-md-12 h2 mg-v-n headfont upperfont tx-lightblue" style="font-size: 40px;">Chris Jones</div>
								<div class="col-md-12 bodyfont upperfont tx-black mg-v-sm h4">Chris.jones@GMAIL.COM</div>
								<div class="pd-v-sm col-md-12 mg-v-n"></div>
								




								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n">Summary</div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n"></div>
									<div class="clearfix"></div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
										<p>Entrepeneur with a background in politics, public affairs and government.  Businessman with a a vision toward bringing together people, politics and jobs.</p>

										<p>Specialties: Recruiting</p>
										<p>Executive Search </p>
										<p>Staffing</p>
										<p>Human Resources</p>
										<p>Political Consulting</p>
										<p>Business Development</p>
										<p>Marketing </p>
										<p>Public Relations </p>
										<p>Brand Management</p>
										<p>Operations</p>
									</div>
								</div>
								<div class="col-xs-12 tx-white"><hr class="bd-sm"></div>




<?
$pos = 
array(
	array(
		'title'=>'Managing Partner',
		'location'=>'Washington, DC',
		'company'=>'CapitolWorks',
		'from'=>'January 2006',
		'to'=>'Present',
		'desc'=>'<p>Chris is Managing Partner of CapitolWorks, a public affairs executive search firm in Washington, DC. </p><p>CapitolWorks provides senior level recruiting services for the public affairs industry and its clients include top lobbying and law firms, Fortune 50 companies, and agenda-setting non-profits and trade associations. </p><p>Jones counts among his clients a premier roster of the top political consultants, PR firms, associations, and non-profits in the DC area. </p><p>Chris is also founder and CEO of PoliTemps, a temporary and permanent staffing agency focused on the political and public affairs industry. Since 1996, PoliTemps has tripled in size and has added several full-time staffers. The firm counts among its clients a premier roster of the top political consultants, PR firms, associations, and non-profits in the DC area. </p><p>Prior to founding PoliTemps, Chris served in the U. S. Navy from 1984 to 1988, then worked as an intern for the House Judiciary Committee under Congressman Jack Brooks (D-TX) and later as a Staff Assistant for Congressman and Majority Whip David Bonior (D-MI). In 1994 he joined the Ann Richards for Governor campaign in Austin, Texas.</p><p>Chris has been featured in numerous newspapers, on radio and TV, and in political resource guides and publications as a reliable source for news and information regarding politics, people, campaigns, and jobs. Chris is a member of American Association of Political Consultants, the American Staffing Association, and a Certified Staffing Professional.</p>'
	),
	array(
		'title'=>'CEO',
		'location'=>'Washington, DC',
		'company'=>'PoliTemps',
		'from'=>'October 1995',
		'to'=>'Present',
		'desc'=>'<p>As president and CEO, Chris oversees the business development, marketing, and management activities of the company.</p><p>The firm counts among its clients a premier roster of the top political consultants, PR firms, associations, and non-profits in the D.C. area. </p><p>PoliTemps has been featured in numerous newspapers, political resource guides, and publications as a reliable source for news and information regarding politics, people, campaigns and jobs. He is also a managing partner of CapitolWorks, a public affairs executive search firm.</p>'
	),
	array(
		'title'=>'Operations/Staff Assistant',
		'location'=>'Austin, Texas',
		'company'=>'Ann Richards for Governor Committee',
		'from'=>'1993',
		'to'=>'1994',
		'desc'=>''
	),
	array(
		'title'=>'Staff Assistant/Office Manager',
		'location'=>'Washington D.C. Metro Area',
		'company'=>'Congressman David Bonior (D-MI)',
		'from'=>'1991',
		'to'=>'1993',
		'desc'=>'Staff Assistant/Office Manager for Majority Whip/Congressman David Bonior (D-MI)'
	),
	array(
		'title'=>'LBJ Intern',
		'location'=>'Washington D.C. Metro Area',
		'company'=>'Congressman Jack Brooks (House Judiciary Committee)',
		'from'=>'May 1991',
		'to'=>'August 1991',
		'desc'=>'LBJ Intern for the U.S. House Judiciary Committee'
	),
	array(
		'title'=>'Intelligence Specialist',
		'location'=>'Washington D.C. Metro Area',
		'company'=>'US Navy',
		'from'=>'1984',
		'to'=>'1988',
		'desc'=>'Provided Intelligence support and analysis on USS Blue Ridge, and later detached to Commander Sevent. Fleet Intelligence Department (N2).  Provided analysis, early warning reports to Officers and Staff. Briefed commanders on Soviet and third world surface, subsurface and air threats to Seventh Fleet AOR'
	)
);


$edu = 
array(
	array(
		'university'=>'Texas Tech University',
		'degree'=>'BA, Political Science',
		'location'=>'Austin, Texas',
		'from'=>'1988',
		'to'=>'1991',
		'desc'=>''
	)
);

?>

<?php for($x=0;$x<count($pos); $x++){ ?>
								<div class="pd-v-xs col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n"><?php echo $pos[$x]['title']; ?></div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n"><?php echo $pos[$x]['location']; ?></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n"><?php echo $pos[$x]['company']; ?></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n text-right">
										<span class="tx-black">FROM </span>
										<span class="tx-lightblue"><?php echo $pos[$x]['from']; ?></span>
										<span class="tx-black">TO </span>
										<span class="tx-lightblue"><?php echo $pos[$x]['to']; ?></span>
									</div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
										<?php echo $pos[$x]['desc']; ?>
									</div>
								</div>
								<div class="col-xs-12 tx-white"><hr class="bd-sm"></div>
<?php } ?>



								<div class="pd-v-xs col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n">Skills</div>
									<div class="clearfix"></div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
									Public Relations, Nonprofits, Recruting, Policy, Politics, Government, Business Development, Human Resources, Political Campaigns, Management, Political Consulting, Public Policy, Marketing, Fundraising, Strategic Planning, Strategic Communications, Policy Analysis, Grassroots Organizing, Management Consulting, Sourcing, Media Relations, Analysis, Strategy, Start-ups, Program Management, International Relations, Team Building, Legislative Relations, HR Consulting
									</div>
								</div>
								<div class="col-xs-12 tx-white"><hr class="bd-sm"></div>





<?php for($x=0;$x<count($edu); $x++){ ?>
								<div class="pd-v-xs col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n"><?php echo $edu[$x]['university']; ?></div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n"><?php echo $edu[$x]['location']; ?></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n"><?php echo $edu[$x]['degree']; ?></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n text-right">
										<span class="tx-black">FROM </span>
										<span class="tx-lightblue"><?php echo $edu[$x]['from']; ?></span>
										<span class="tx-black">TO </span>
										<span class="tx-lightblue"><?php echo $edu[$x]['to']; ?></span>
									</div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
										<?php echo $edu[$x]['desc']; ?>
									</div>
								</div>
<?php } ?>





							</div>
							<div class="col-md-12 pd-v-sm"></div>
						</div>
					</div>
					<div class="col-xs-10 col-xs-offset-1 pd-v-md pd-h-n">
						<a href="edit.php" id="user-toggle" class="dtran block-set text-left bg-lightblue tx-white bg-hv-white col-md-3 col-md-offset-9">
							<span class="dtran bodyfont heavyfont upperfont">EDIT PROFILE</span>
							<span class="dtran text-center icon-arrow-down-outline bg-blue"></span>
						</a>
					</div>
				</div>
			</div>
		</div>

<?php


echo $view->footer;
echo $view->footer_scripts;



?>