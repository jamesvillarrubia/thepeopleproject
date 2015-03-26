<?php
include_once('engine.php');
echo $view->header;
echo $view->navbar;
?>

		<div id="page-content-wrapper">
			<div class="container-mix">
				<div class="row">
					<div class="col-lg-12 pd-md"></div>
					<div class="col-lg-12 bg-lightblue text-right">
					<h4 class="inline-b bg-hv-blue mg-n tx-white pd-sm upperfont heavyfont boydfont">Search</h4>
					<h4 class="inline-b bg-hv-blue tx-white mg-n pd-sm upperfont heavyfont boydfont">Quick Results</h4>
					<h4 class="inline-b bg-hv-blue tx-white mg-n pd-sm upperfont heavyfont boydfont">Table Results</h4>
					<h4 class="inline-b bg-hv-blue tx-white mg-n pd-sm upperfont heavyfont boydfont">Geo Results</h4>
					</div>
					<div class="col-lg-12 pd-md bg-lightgray">
						<div id="builder-basic"></div>
					</div>
				</div>
			</div>
		</div>





<?php
echo $view->footer;
?>