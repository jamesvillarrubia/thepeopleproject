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
				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 pd-md"></div>
				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 bg-lightblue text-right">
					<span class="tx-white pd-sm mg-n bodyfont heavyfont upperfont h4" style="float:left;padding: 15px 20px;">Edit Profile</span>	
				</div>
				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 pd-sm bg-lightgray">
					<div class="col-md-3">
						<div class="bd-lightblue bd-md">
							<div class="col-xs-12 dtran pd-xs bd-zero bg-white bd-bottom bd-md bd-lightblue tx-lightblue tx-hv-white bg-hv-lightblue bodyfont upperfont headfont mg-n h5">Profile</div>
							<div class="col-xs-12 dtran pd-xs bd-zero bg-white bd-bottom bd-md bd-lightblue tx-lightblue tx-hv-white bg-hv-lightblue bodyfont upperfont headfont mg-n h5">SUMMARY</div>
							<div class="col-xs-12 dtran pd-xs bd-zero bg-white bd-bottom bd-md bd-lightblue tx-lightblue tx-hv-white bg-hv-lightblue bodyfont upperfont headfont mg-n h5">Experience</div>
							<div class="col-xs-12 dtran pd-xs bd-zero bg-white bd-bottom bd-md bd-lightblue tx-lightblue tx-hv-white bg-hv-lightblue bodyfont upperfont headfont mg-n h5">Skills</div>
							<div class="col-xs-12 dtran pd-xs bd-zero bg-white bd-md bd-lightblue tx-lightblue tx-hv-white bg-hv-lightblue bodyfont upperfont headfont mg-n h5">Portfolio</div>
							<div class='clearfix'></div>
						</div>
					</div>
					<div class="col-md-6 pd-h-n">
						<div class="form-group col-sm-6">
							<input type="text" placeholder="First Name" value="Chris" name="firstname" class="form-control">
						</div>
						<div class="form-group col-sm-6">
							<input type="text" value="Jones"  placeholder="Last Name" name="firstname" class="form-control">
						</div>
						<div class="form-group col-sm-12">
							<input type="text" value="chris@peopleproject.us" placeholder="Email" name="firstname" class="form-control">
						</div>
						<div class="form-group col-sm-12">
							<input type="text" value="Washington, DC" placeholder="Location" name="firstname" class="form-control">
						</div>
						<div class="form-group col-sm-12">
							<select class="form-control">
								<option>Human Resources</option>
							</select>
						</div>							    
					</div>
					<div class="col-md-3">
						<img src="images/chris.jpg" class="img-responsive" style="max-width: 155px;margin:auto;">
					</div>
					<div class="col-md-9 col-md-offset-3 h4 upperfont headfont pd-h-sm">Summary</div>
					<div class="col-md-9 col-md-offset-3 pd-v-sm" id="summary">
							<textarea type="text" style="height:100px;" placeholder="Summary..." name="firstname" class="form-control">

							Entrepeneur with a background in politics, public affairs and government.  Businessman with a a vision toward bringing together people, politics and jobs.

							Specialties: Recruiting
							Executive Search 
							Staffing
							Human Resources
							Political Consulting
							Business Development
							Marketing 
							Public Relations 
							Brand Management
							Operations
							</textarea>
					</div>


					<div id="experience" class='pd-v-md'>
						<div class="col-md-9 col-md-offset-3 h4 upperfont headfont pd-h-sm">Positions</div>
						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="form-group col-sm-6">
								<input type="text" placeholder="Title" value="Managing Partner"name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<input type="text"  value="Washington D.C. Metro Area"placeholder="Location" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" placeholder="Employer"  value="CapitolWorks, Inc." name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-8">
								<input type="text" placeholder="MM/DD/YYYY" value="01/01/2006" name="firstname" class="form-control" style="
								    width: 45%;
								    display: inline-block;
								">
								<span style="
								    width: 8%;
								    display: inline-block;
								    text-align: center;
								    text-transform: uppercase;
								    color: #00aef3;
								    font-size: 14px;
								">To</span>
								<input type="text" placeholder="XX/XX/XX" value="Present" name="firstname" class="form-control" style="
								    display: inline-block;
								    width: 45%;
								">
							</div>
							<div class="form-group col-sm-12" id="summary">
								<textarea type="text" style="height:100px;" placeholder="Summary..." name="firstname" class="form-control">Chris is Managing Partner of CapitolWorks, a public affairs executive search firm in Washington, DC. 

								CapitolWorks provides senior level recruiting services for the public affairs industry and its clients include top lobbying and law firms, Fortune 50 companies, and agenda-setting non-profits and trade associations. 

								Jones counts among his clients a premier roster of the top political consultants, PR firms, associations, and non-profits in the DC area. 

								Chris is also founder and CEO of PoliTemps, a temporary and permanent staffing agency focused on the political and public affairs industry. Since 1996, PoliTemps has tripled in size and has added several full-time staffers. The firm counts among its clients a premier roster of the top political consultants, PR firms, associations, and non-profits in the DC area. 

								Prior to founding PoliTemps, Chris served in the U. S. Navy from 1984 to 1988, then worked as an intern for the House Judiciary Committee under Congressman Jack Brooks (D-TX) and later as a Staff Assistant for Congressman and Majority Whip David Bonior (D-MI). In 1994 he joined the Ann Richards for Governor campaign in Austin, Texas.

								Chris has been featured in numerous newspapers, on radio and TV, and in political resource guides and publications as a reliable source for news and information regarding politics, people, campaigns, and jobs. Chris is a member of American Association of Political Consultants, the American Staffing Association, and a Certified Staffing Professional.
								</textarea>
							</div>	
							<hr class='pd-h-sm mg-h-sm bd-black tx-black '>		    
		
						</div>

						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="form-group col-sm-6">
								<input type="text" placeholder="Title" value="President/CEO"name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<input type="text"  value="Washington D.C. Metro Area"placeholder="Location" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" placeholder="Employer"  value="PoliTemps, Inc." name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-8">
								<input type="text" placeholder="MM/DD/YYYY" value="10/01/1985" name="firstname" class="form-control" style="
								    width: 45%;
								    display: inline-block;
								">
								<span style="
								    width: 8%;
								    display: inline-block;
								    text-align: center;
								    text-transform: uppercase;
								    color: #00aef3;
								    font-size: 14px;
								">To</span>
								<input type="text" placeholder="MM/DD/YYYY" value="Present" name="firstname" class="form-control" style="
								    display: inline-block;
								    width: 45%;
								">
							</div>
							<div class="form-group col-sm-12" id="summary">
								<textarea type="text" style="height:100px;" placeholder="Summary..." name="firstname" class="form-control">

								As president and CEO, Chris oversees the business development, marketing, and management activities of the company.

								The firm counts among its clients a premier roster of the top political consultants, PR firms, associations, and non-profits in the D.C. area. 

								PoliTemps has been featured in numerous newspapers, political resource guides, and publications as a reliable source for news and information regarding politics, people, campaigns and jobs. He is also a managing partner of CapitolWorks, a public affairs executive search firm.
								</textarea>
							</div>					    
							<hr class='pd-h-sm mg-h-sm bd-black tx-black '>		    
		
						</div>

						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="form-group col-sm-6">
								<input type="text" placeholder="Title" value="Operations/Staff Assistant" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<input type="text"  value="Austin, Texas Area"placeholder="Location" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" placeholder="Employer"  value="Ann Richards for Governor Committee" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-8">
								<input type="text" placeholder="MM/DD/YYYY" value="1993" name="firstname" class="form-control" style="
								    width: 45%;
								    display: inline-block;
								">
								<span style="
								    width: 8%;
								    display: inline-block;
								    text-align: center;
								    text-transform: uppercase;
								    color: #00aef3;
								    font-size: 14px;
								">To</span>
								<input type="text" placeholder="MM/DD/YYYY" value="1994" name="firstname" class="form-control" style="
								    display: inline-block;
								    width: 45%;
								">
							</div>
							<div class="form-group col-sm-12" id="summary">
								<textarea type="text" style="height:100px;" placeholder="Summary..." name="firstname" class="form-control">
								</textarea>
							</div>			
							<hr class='pd-h-sm mg-h-sm bd-black tx-black '>		    
		
						</div>

						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="form-group col-sm-6">
								<input type="text" placeholder="Title" value="Staff Assistant/Office Manager" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<input type="text"  value="Washington D.C. Metro Area"placeholder="Location" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" placeholder="Employer"  value="Congressman David Bonior (D-MI)" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-8">
								<input type="text" placeholder="MM/DD/YYYY" value="1991" name="firstname" class="form-control" style="
								    width: 45%;
								    display: inline-block;
								">
								<span style="
								    width: 8%;
								    display: inline-block;
								    text-align: center;
								    text-transform: uppercase;
								    color: #00aef3;
								    font-size: 14px;
								">To</span>
								<input type="text" placeholder="MM/DD/YYYY" value="1993" name="firstname" class="form-control" style="
								    display: inline-block;
								    width: 45%;
								">
							</div>
							<div class="form-group col-sm-12" id="summary">
								<textarea type="text" style="height:100px;" placeholder="Summary..." name="firstname" class="form-control">Staff Assistant/Office Manager for Majority Whip/Congressman David Bonior (D-MI)
								</textarea>
							</div>					    
							<hr class='pd-h-sm mg-h-sm bd-black tx-black '>		    
		
						</div>


						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="form-group col-sm-6">
								<input type="text" placeholder="Title" value="LBJ Intern" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<input type="text"  value="Washington D.C. Metro Area"placeholder="Location" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" placeholder="Employer"  value="Congressman Jack Brooks (House Judiciary Committee)" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-8">
								<input type="text" placeholder="MM/DD/YYYY" value="05/01/1991" name="firstname" class="form-control" style="
								    width: 45%;
								    display: inline-block;
								">
								<span style="
								    width: 8%;
								    display: inline-block;
								    text-align: center;
								    text-transform: uppercase;
								    color: #00aef3;
								    font-size: 14px;
								">To</span>
								<input type="text" placeholder="MM/DD/YYYY" value="08/01/1991" name="firstname" class="form-control" style="
								    display: inline-block;
								    width: 45%;
								">
							</div>
							<div class="form-group col-sm-12" id="summary">
								<textarea type="text" style="height:100px;" placeholder="Summary..." name="firstname" class="form-control">LBJ Intern for the U.S. House Judiciary Committee
								</textarea>
							</div>					    
							<hr class='pd-h-sm mg-h-sm bd-black tx-black '>		    
		
						</div>




						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="form-group col-sm-6">
								<input type="text" placeholder="Title" value="Intelligence Specialist" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<input type="text"  value="" placeholder="Location" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" placeholder="Employer"  value="US Navy" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-8">
								<input type="text" placeholder="MM/DD/YYYY" value="01/01/1984" name="firstname" class="form-control" style="
								    width: 45%;
								    display: inline-block;
								">
								<span style="
								    width: 8%;
								    display: inline-block;
								    text-align: center;
								    text-transform: uppercase;
								    color: #00aef3;
								    font-size: 14px;
								">To</span>
								<input type="text" placeholder="MM/DD/YYYY" value="03/01/1988" name="firstname" class="form-control" style="
								    display: inline-block;
								    width: 45%;
								">
							</div>
							<div class="form-group col-sm-12" id="summary">
								<textarea type="text" style="height:100px;" placeholder="Summary..." name="firstname" class="form-control">Provided Intelligence support and analysis on USS Blue Ridge, and later detached to Commander Seventh Fleet Intelligence Department (N2).  
								Provided analysis, early warning reports to Officers and Staff. 
								Briefed commanders on Soviet and third world surface, subsurface and air threats to Seventh Fleet AOR
								</textarea>
							</div>	
							<hr class='pd-h-sm mg-h-sm bd-black tx-black '>		    
							<div class="col-md-12 pd-v-n text-right">
								<a href="edit.php" id="user-toggle">
									<span class="dtran icon-plus tx-blue h4"></span>
								</a>
							</div>				    
		
						</div>
					</div>
					<div id="education" class="pd-v-md">
						<div class="col-md-9 col-md-offset-3 h4 upperfont headfont pd-h-sm">Education</div>
						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="form-group col-sm-12">
								<input type="text" placeholder="Title" value="Texas Tech University" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" placeholder="Employer"  value="BA, Political Science (minor in Pacific Rim)" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-8">
								<input type="text" placeholder="MM/DD/YYYY" value="1988" name="firstname" class="form-control" style="
								    width: 45%;
								    display: inline-block;
								">
								<span style="
								    width: 8%;
								    display: inline-block;
								    text-align: center;
								    text-transform: uppercase;
								    color: #00aef3;
								    font-size: 14px;
								">To</span>
								<input type="text" placeholder="MM/DD/YYYY" value="1991" name="firstname" class="form-control" style="
								    display: inline-block;
								    width: 45%;
								">
							</div>					    
							<hr class='pd-h-sm mg-h-sm bd-black tx-black '>		    
		
						</div>
						<div class="col-md-12 pd-v-n text-right">
							<a href="edit.php" id="user-toggle">
								<span class="dtran icon-plus tx-blue h4"></span>
							</a>
						</div>
					</div>

					<div id="skills" class="pd-v-md">
						<div class="col-md-9 col-md-offset-3 h4 upperfont headfont pd-h-sm">Skills</div>
						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="col-md-12">
								<input type="text" placeholder="Skills." name="firstname" class="form-control" value="Public Relations,Nonprofits,Recruiting,Policy,Politics,Government,Business Development,Human Resources,Political Campaigns,Management,Political Consulting ,Public Policy ,Marketing, Fundraising ,Strategic Communications ,Strategic Planning ,Policy Analysis ,Grassroots Organizing ,Management Consulting ,Sourcing ,Media Relations ,Analysis ,Strategy ,Start-ups ,Program Management ,International Relations ,Team Building ,Executive Management ,Public Affairs ,Leadership,Legislative Relations,HR Consulting,Non-profits"> 
							</div>
						</div>	
					</div>

					<div id="portfolio" class="pd-v-md">
						<div class="col-md-9 col-md-offset-3 h4 upperfont headfont pd-h-sm">Portfolio</div>
						<div class="col-md-9 col-md-offset-3 pd-h-n">
							<div class="form-group col-sm-12">
								<input type="text" placeholder="Add link here..." name="firstname" class="form-control">
							</div>
						</div>
						<div class="col-md-12 pd-v-n text-right">
							<a href="edit.php" id="user-toggle">
								<span class="dtran icon-plus tx-blue h4"></span>
							</a>
						</div>	
					</div>
					<div class="col-md-10 col-md-offset-2 col-sm-11 col-sm-offset-1 pd-v-md pd-h-sm">
						<a href="edit.php" id="user-toggle" class="dtran block-set text-left bg-lightblue tx-white bg-hv-white col-md-2 col-md-offset-6">
							<span class="bodyfont heavyfont upperfont">Save</span>
							<span class="text-center icon-arrow-down-outline bg-blue"></span>
						</a>
						<a href="view.php" id="user-toggle" class="dtran block-set text-left bg-lightblue tx-white bg-hv-white col-md-3 col-md-offset-1">
							<span class="dtran bodyfont heavyfont upperfont">Save and View</span>
							<span class="dtran text-center icon-arrow-down-outline bg-blue"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php


echo $view->footer;
echo $view->footer_scripts;



?>