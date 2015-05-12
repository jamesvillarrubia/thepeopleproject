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
<style>
.gm-style-iw {
   width: 240px !important;
   top: 0px !important;
   left: 0px !important;
   background-color: #fff;
   box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
   border: 1px solid rgba(72, 181, 233, 0.6);
   border-radius: 2px 2px 0 0;
}


</style>
	<div id="page-content-wrapper" class="image-bg">
		<div class="bg-colorizer white"></div>
		<div class="container-mix">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 pd-md"></div>
				<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 bg-lightblue text-right">
					<span class="tx-white pd-sm mg-n bodyfont heavyfont upperfont h4" style="float:left;padding: 15px 20px;">Search</span>
					<a href="search.php"><span class="search-button icon-search" style=""></span></a>
					<a href="grid.php"><span class="search-button icon-grid" style=""></span></a>
					<a href="list.php"><span class="search-button icon-list" style=""></span></a>
					<a href="map.php"><span class="search-button icon-map active" style=""></span></a>
					</div>
				<div class="col-sm-10 col-sm-offset-1 pd-n bg-lightgray">
					<div id="map" style="min-height: 600px;"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear-fix"></div>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script type="text/javascript">
			// When the window has finished loading create our google map below
			google.maps.event.addDomListener(window, 'load', init);
		
			function init() {
				// Basic options for a simple Google Map
				// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
				var mapOptions = {
					// How zoomed in you want the map to start at (always required)
					zoom: 12,

					// The latitude and longitude to center the map (always required)
					center: new google.maps.LatLng(38.8400, -77.08046), // New York

					// How you would like to style the map. 
					// This is where you would paste any style found on Snazzy Maps.
					styles: 
[{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]                };

				// Get the HTML DOM element that will contain your map 
				// We are using a div with id="map" seen below in the <body>
				var mapElement = document.getElementById('map');

				// Create the Google Map using our element and options defined above
				var map = new google.maps.Map(mapElement, mapOptions);

				// Let's also add a marker while we're at it
				  setMarkers(map, beaches);

			}
			/**
			 * Data for the markers consisting of a name, a LatLng and a zIndex for
			 * the order in which these markers should display on top of each
			 * other.
			 */
			var beaches = [
			  ['Bondi Beach', 38.853293, -77.05043, 4],
			  ['Coogee Beach', 38.843293, -77.09106, 5],
			  ['Cronulla Beach', 38.833293, -77.095056, 3],
			  ['Manly Beach', 38.863293, -77.08407, 2],
			  ['Maroubra Beach', 38.823293, -77.039246, 1]
			];

			function setMarkers(map, locations) {
				  // Add markers to the map

				  // Marker sizes are expressed as a Size of X,Y
				  // where the origin of the image (0,0) is located
				  // in the top left of the image.

				  // Origins, anchor positions and coordinates of the marker
				  // increase in the X direction to the right and in
				  // the Y direction down.
				  var image = {
					url: 'images/map-marker-512.png',
					// This marker is 20 pixels wide by 32 pixels tall.
					size: new google.maps.Size(32, 32),
					// The origin for this image is 0,0.
					origin: new google.maps.Point(0,0),
					// The anchor for this image is the base of the flagpole at 0,32.
					anchor: new google.maps.Point(16, 32)
				  };
				  // Shapes define the clickable region of the icon.
				  // The type defines an HTML &lt;area&gt; element 'poly' which
				  // traces out a polygon as a series of X,Y points. The final
				  // coordinate closes the poly by connecting to the first
				  // coordinate.
				  var shape = {
					  coords: [1, 1, 1, 20, 18, 20, 18 , 1],
					  type: 'poly'
				  };
				  var contentString = 
					'<div class="bg-white map-box dtran" style="">'+
						'<div style="max-width: 60px;margin: 7px;display: inline-block;">'+
							'<img src="images/chris.jpg" class="img-responsive">'+
						'</div>'+
						'<div style="display: inline-block;/* width: 60%; */vertical-align: top;margin-top: 7px;font-size:13px;" class="">'+
							'<div class="tx-blue h4">Chris Jones</div>'+
							'<div>Owner @ Politemps</div>'+
						'</div>'+
						'<div class="bg-lightblue" style="height: 25px;position: absolute;z-index: 1025;width: 100%;line-height: 17px;font-size: 16px;color: white;text-align: left;padding: 2px 10px;"><span class="icon-envelop tx-white" style=""></span><span class="icon-facebook3 tx-white" style=""></span><span class="icon-twitter tx-white" style=""></span><span class="icon-linkedin2 tx-white" style=""></span></div>'+
					'</div>';
/*
				  <div id="content">'+
	  '<div id="siteNotice">'+
	  '</div>'+
	  '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
	  '<div id="bodyContent">'+
	  '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
	  'sandstone rock formation in the southern part of the '+
	  'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
	  'south west of the nearest large town, Alice Springs; 450&#160;km '+
	  '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
	  'features of the Uluru - Kata Tjuta National Park. Uluru is '+
	  'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
	  'Aboriginal people of the area. It has many springs, waterholes, '+
	  'rock caves and ancient paintings. Uluru is listed as a World '+
	  'Heritage Site.</p>'+
	  '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
	  'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
	  '(last visited June 22, 2009).</p>'+
	  '</div>'+
	  '</div>';*/

				  var markers = [];
				  var infowindows =[];
				  for (var i = 0; i < locations.length; i++) {
					var beach = locations[i];
					var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
					markers[i] = new google.maps.Marker({
						position: myLatLng,
						map: map,
						icon: image,
						shape: shape,
						title: beach[0],
						zIndex: beach[3]
					});

					infowindows[i] = new google.maps.InfoWindow({
						content: contentString
					});
					google.maps.event.addListener(markers[i], 'click', function(innerkey) {
						//map.setZoom(12);
						return function(){
							infowindows[innerkey].open(map,markers[innerkey]);	
						}
						//$(".map-box").show();
					}(i));
				  }
				}
			   </script>
<?php


echo $view->footer;
echo $view->footer_scripts;



?>