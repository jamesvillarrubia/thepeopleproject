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
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n">Managing Partner</div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n">Washington, DC</div>
									<div class="clearfix"></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n">CapitolWorks</div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n text-right">
										<span class="tx-black">FROM </span>
										<span class="tx-lightblue">January 2006</span>
										<span class="tx-black">TO </span>
										<span class="tx-lightblue">Present</span>
									</div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
										<p>Chris is Managing Partner of CapitolWorks, a public affairs executive search firm in Washington, DC. </p>

										<p>CapitolWorks provides senior level recruiting services for the public affairs industry and its clients include top lobbying and law firms, Fortune 50 companies, and agenda-setting non-profits and trade associations. </p>

										<p>Jones counts among his clients a premier roster of the top political consultants, PR firms, associations, and non-profits in the DC area. </p>

										<p>Chris is also founder and CEO of PoliTemps, a temporary and permanent staffing agency focused on the political and public affairs industry. Since 1996, PoliTemps has tripled in size and has added several full-time staffers. The firm counts among its clients a premier roster of the top political consultants, PR firms, associations, and non-profits in the DC area. </p>

										<p>Prior to founding PoliTemps, Chris served in the U. S. Navy from 1984 to 1988, then worked as an intern for the House Judiciary Committee under Congressman Jack Brooks (D-TX) and later as a Staff Assistant for Congressman and Majority Whip David Bonior (D-MI). In 1994 he joined the Ann Richards for Governor campaign in Austin, Texas.</p>

										<p>Chris has been featured in numerous newspapers, on radio and TV, and in political resource guides and publications as a reliable source for news and information regarding politics, people, campaigns, and jobs. Chris is a member of American Association of Political Consultants, the American Staffing Association, and a Certified Staffing Professional.</p>
									</div>
								</div>
								<div class="col-xs-12 tx-white"><hr class="bd-sm"></div>
								<div class="pd-v-xs col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n">CEO</div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n">Washington, DC</div>
									<div class="clearfix"></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n">PoliTemps</div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n text-right">
										<span class="tx-black">FROM </span>
										<span class="tx-lightblue">October 1995</span>
										<span class="tx-black">TO </span>
										<span class="tx-lightblue">Present</span>
									</div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
									
										<p>As president and CEO, Chris oversees the business development, marketing, and management activities of the company.</p>

										<p>The firm counts among its clients a premier roster of the top political consultants, PR firms, associations, and non-profits in the D.C. area. </p>

										<p>PoliTemps has been featured in numerous newspapers, political resource guides, and publications as a reliable source for news and information regarding politics, people, campaigns and jobs. He is also a managing partner of CapitolWorks, a public affairs executive search firm.</p>

									</div>
								</div>
								<div class="col-xs-12 tx-white"><hr class="bd-sm"></div>
								<div class="pd-v-xs col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n">Operations/Staff Assistant</div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n">Austin, Texas</div>
									<div class="clearfix"></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n">Ann Richards for Governor Committee</div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n text-right">
										<span class="tx-black">FROM </span>
										<span class="tx-lightblue">1991</span>
										<span class="tx-black">TO </span>
										<span class="tx-lightblue">1993</span>
									</div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
									</div>
								</div>
								<div class="col-xs-12 tx-white"><hr class="bd-sm"></div>
								<div class="pd-v-xs col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n">Skills</div>
									<div class="clearfix"></div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
									Public Relations, Nonprofits, Recruting, Policy, Politics, Government, Business Development, Human Resources, Political Campaigns, Management, Political Consulting, Public Policy, Marketing, Fundraising, Strategic Planning, Strategic Communications, Policy Analysis, Grassroots Organizing, Management Consulting, Sourcing, Media Relations, Analysis, Strategy, Start-ups, Program Management, International Relations, Team Building, Legislative Relations, HR Consulting, ...
									</div>
								</div>
								<div class="col-xs-12 tx-white"><hr class="bd-sm"></div>
								<div class="pd-v-xs col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n">Texas Tech University</div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n">Austin, Texas</div>
									<div class="clearfix"></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n">BA, Political Science</div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n text-right">
										<span class="tx-black">FROM </span>
										<span class="tx-lightblue">1988</span>
										<span class="tx-black">TO </span>
										<span class="tx-lightblue">1991</span>
									</div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
									</div>
								</div>
							</div>
							<div class="col-md-12 pd-v-sm"></div>
						</div>
					</div>
					<div class="col-xs-10 col-xs-offset-1 pd-md bg-lightblue">
						<div class="row">
							<div class="col-md-2 col-sm-4 text-center">
							</div>
							<div class="col-md-10 col-sm-8 pd-v-n mg-v-n">
								<div class="pd-v-xs col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-white h4 mg-v-n">USER #78890</div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n"></div>
									<div class="clearfix"></div>
									<div class="col-sm-6 bodyfont upperfont tx-gray h5 pd-v-n mg-v-n">Former Employer</div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n text-right">
										<span class="tx-black"></span>
										<span class="tx-lightblue"></span>
										<span class="tx-black"></span>
										<span class="tx-lightblue"></span>
									</div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12 tx-white">
										<p>Lorem ipsum dolor sit amet, ex usu expetendis consectetuer. Corpora apeirian ad his, mea ex velit consulatu. Labores singulis splendide in nam. Cibo solet sanctus per no, cu per antiopam accusamus consetetur. Vidit labitur moderatius sed no, ea usu soleat officiis convenire, ea velit impedit rationibus usu.
										Id clita consetetur usu. Mel id similique deseruisse, phaedrum persequeris id sed. Timeam dolorem iracundia te ius, ei vidit tincidunt sea. Id nam ignota cotidieque persequeris, erat placerat sententiae nam ea, labore platonem disputationi ne quo. Mazim laudem id ius, te utroque maiorum dignissim est, repudiandae theophrastus cu per.

										Vix ex dicunt invidunt oporteat, dicam consul libris has ei, et has mazim aliquam adipiscing. Nusquam deleniti inciderint cum ex, per audiam accumsan et. Diam gloriatur pri ea. Quo ad suscipit persequeris. Oblique molestiae eam ut, cotidieque disputando id mei.

										Sed ad ponderum scriptorem, usu et graeco ornatus appareat, ea autem mentitum consulatu usu. Sea consul abhorreant ea. Amet percipitur cu duo, moderatius voluptatibus at pri. Sit ne denique commune.

										Ei vero feugait mandamus his, vix et commune menandri, has eu quot contentiones. Possit detracto mentitum pri te. Pro ex nostrud aliquando. Quot dicit liberavisse has id.</p>
									</div>
								</div>
							</div>
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