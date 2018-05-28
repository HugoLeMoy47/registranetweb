<!DOCTYPE html>
<html>
<head>
	<title>Brochure</title>
	<!-- Flipbook StyleSheet -->
		<link href="css/dflip.css" rel="stylesheet" type="text/css">
		<link href="css/themify-icons.css?ts=<?=time()?>&quot;" rel="stylesheet" type="text/css">
</head>
<body>
<div id="flipbookContainer"></div>
<!-- jQuery 1.9.1 or above -->
                <script src="js/libs/jquery.min.js" type="text/javascript"></script>
<!-- Flipbook main Js file -->
    	<script src="js/dflip.js" type="text/javascript"></script>

    	<script>

    //  if dflip assets location are not in current folder, relative or absolute link to the folder is required
    //  for current example not required
    //  var dFlipLocation = "examples/";

    var flipBook;
    jQuery(document).ready(function () {

        //make sure this file is hosted in localhost or any other server
        var pdf = 'brochure.pdf';

        var options = {
        	webgl: true,
        	transparent: true,
        	// set to true to show outline on open (true|false)
			// if enable sound at start (true|false)
			soundEnable: true,
        	height: 800,
            
};

        /**
         * Syntax:
         *
         *  options.links[ PAGE_NUMBER ]=[ PAGE_WIDTH, PAGE_HEIGHT,
         *  [ SPOT_X_POS, SPOT_Y_POS, SPOT_WIDTH, SPOT_HEIGHT, DESTINATION ],
         *  [ SPOT2_X_POS, SPOT2_Y_POS, SPOT2_WIDTH, SPOT2_HEIGHT, DESTINATION2 ]
         *  ];
         *
         */
         


//        options.html[3] = "this is a dummy html. Totally beta for now and works properly only in CSS mode";

flipBook = $("#flipbookContainer").flipBook(pdf, options);
});

    </script>
</body>
</html>