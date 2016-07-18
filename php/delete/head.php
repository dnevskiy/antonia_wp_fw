<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost:3000/wp-antonia/wp-content/themes/wp-antonia/css/main.css" type="text/css" media="all" />
	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css" type="text/css" media="all" /> -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>

<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
      var map;
 
       var oz = new google.maps.LatLng(39.3283543,-32.4716371);
      var MY_MAPTYPE_ID = 'custom_style';
      function initialize() {
 
       var featureOpts = [
							  {
							    "featureType": "water",
							    "elementType": "geometry",
							    "stylers": [
							      { "visibility": "on" },
							      { "color": "#f1f1f1" }
							    ]
							  },{
							    "featureType": "poi",
							    "stylers": [
							      { "color": "#ffffff" }
							    ]
							  }
							];
        var mapOptions = {
          zoom: 13,
          center: oz,
          mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
          },
          mapTypeId: MY_MAPTYPE_ID
        };
 
        map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
        var styledMapOptions = {
          name: 'Custom Style'
        };
        var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
        map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
      }
    </script> -->
	<!-- http://realfavicongenerator.net -->
	<?php wp_head(); ?>
		<!-- Safely using .ready() before including jQuery -->
		<!-- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/ -->
		<script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>