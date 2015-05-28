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
							<input type="text" placeholder="First Name" value="" name="firstname" class="form-control">
						</div>
						<div class="form-group col-sm-6">
							<input type="text" value="Jones"  placeholder="" name="firstname" class="form-control">
						</div>
						<div class="form-group col-sm-12">
							<input type="text" value="" placeholder="Email" name="firstname" class="form-control">
						</div>
						<div class="form-group col-sm-12">
							<input type="text" value="" placeholder="Location" name="firstname" class="form-control">
						</div>
						<div class="form-group col-sm-12">
							<select class="form-control">
								<option>--</option>
							</select>
						</div>							    
					</div>


					<div id="address" class='pd-v-md'>
						<div class="col-md-9 col-md-offset-3 h4 upperfont headfont pd-h-sm">Address</div>
						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="form-group col-sm-12">
								<input type="text" placeholder="Address Line 1" value=""name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-12">
								<input type="text"  value=""placeholder="Address Line 2" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-5">
								<input type="text" placeholder="City"  value="" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-3">
								<input type="text" placeholder="State"  value="" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" placeholder="Zip Code"  value="" name="firstname" class="form-control">
							</div>
							<hr class='pd-h-sm mg-h-sm bd-black tx-black '>		    
		
						</div>

					</div>




					<div class="col-md-9 col-md-offset-3 h4 upperfont headfont pd-h-sm">Summary</div>
					<div class="col-md-9 col-md-offset-3 pd-v-sm" id="summary">
							<textarea type="text" style="height:100px;" placeholder="Summary..." name="firstname" class="form-control">
							</textarea>
					</div>








					<div id="experience" class='pd-v-md'>
						<div class="col-md-9 col-md-offset-3 h4 upperfont headfont pd-h-sm">Positions</div>
						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="form-group col-sm-6">
								<input type="text" placeholder="Title" value=""name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-6">
								<input type="text"  value=""placeholder="Location" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" placeholder="Employer"  value="" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-8">
								<input type="text" placeholder="MM/DD/YYYY" value="" name="firstname" class="form-control" style="
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
								<input type="text" placeholder="XX/XX/XX" value="" name="firstname" class="form-control" style="
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

					</div>
					<div id="education" class="pd-v-md">
						<div class="col-md-9 col-md-offset-3 h4 upperfont headfont pd-h-sm">Education</div>
						<div class="col-md-9 col-md-offset-3 pd-h-n pd-v-sm">
							<div class="form-group col-sm-12">
								<input type="text" placeholder="Title" value="" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-4">
								<input type="text" placeholder="Employer"  value="" name="firstname" class="form-control">
							</div>
							<div class="form-group col-sm-8">
								<input type="text" placeholder="MM/DD/YYYY" value="" name="firstname" class="form-control" style="
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
								<input type="text" placeholder="MM/DD/YYYY" value="" name="firstname" class="form-control" style="
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
								<input type="text" placeholder="Skills." name="firstname" class="form-control" value=""> 
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