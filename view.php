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
					<div class="col-xs-10 col-xs-offset-1 pd-md bg-lightgray">
						<div class="row">
							<div class="col-md-2 col-sm-4 text-center">
								<div class='img-circle inline-b bg-lightblue' style="height:85px; width:85px"></div>
							</div>
							<div class="col-md-10 col-sm-8 pd-v-n mg-v-n">
								<div class="col-md-12 h2 mg-v-n headfont upperfont tx-lightblue" style="font-size: 40px;">FIRST NAME LAST NAME</div>
								<div class="col-md-12 bodyfont upperfont tx-black mg-v-sm h4">FIRSTNAME.LASTNAME@GMAIL.COM</div>
								<div class="pd-v-sm col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n">Job Title</div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n">Washington, DC</div>
									<div class="clearfix"></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n">COMPANY TItle</div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n text-right">
										<span class="tx-black">FROM </span>
										<span class="tx-lightblue">XX/XX/XX </span>
										<span class="tx-black">TO </span>
										<span class="tx-lightblue">XX/XX/XX</span>
									</div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
										<p>
										Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
										</p><p>
										Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis.</p>
									</div>
								</div>
								<div class="col-xs-12 tx-white"><hr class="bd-sm"></div>
								<div class="pd-v-xs col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n">Job Title</div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n">Washington, DC</div>
									<div class="clearfix"></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n">COMPANY TItle</div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n text-right">
										<span class="tx-black">FROM </span>
										<span class="tx-lightblue">XX/XX/XX </span>
										<span class="tx-black">TO </span>
										<span class="tx-lightblue">XX/XX/XX</span>
									</div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
										<p>
										Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
										</p><p>
										Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis.</p>
									</div>
								</div>
								<div class="col-xs-12 tx-white"><hr class="bd-sm"></div>
								<div class="pd-v-xs col-md-12 mg-v-n"></div>
								<div class="mg-v-sm">
									<div class="col-sm-6 bodyfont upperfont tx-lightblue h4 mg-v-n">Job Title</div>
									<div class="col-sm-6 text-right bodyfont upperfont tx-black h5 pd-v-n mg-v-n">Washington, DC</div>
									<div class="clearfix"></div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n">COMPANY TItle</div>
									<div class="col-sm-6 bodyfont upperfont tx-black h5 pd-v-n mg-v-n text-right">
										<span class="tx-black">FROM </span>
										<span class="tx-lightblue">XX/XX/XX </span>
										<span class="tx-black">TO </span>
										<span class="tx-lightblue">XX/XX/XX</span>
									</div>
								</div>
								<div class="mg-v-sm size-md">
									<div class="col-sm-12">
										<p>
										Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
										</p><p>
										Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis.</p>
									</div>
								</div>
								<div class="col-xs-12 tx-white"><hr class="bd-sm"></div>
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