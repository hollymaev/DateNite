<!doctype html>
<html>
	<head>
		<title>Left Slidebar Only Example</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Slidebars CSS -->
		<link rel="stylesheet" href="slidebars/slidebars.css">
		
		<!-- Example Styles -->
		<link rel="stylesheet" href="css/example-styles.css">
	</head>
	
	<body>	
        <div id="sb-site">
			<ul id="menubar">
				<img src="css/icon/side-bar_icon.png" class="sb-toggle-left">
			 <img src="css/images/logo-light.png" id="logo2" class ="sb-toggle-left" alt="LOGO">

            </ul>
        </div> 
		
		<div id= "c" class="sb-slidebar sb-left">
            <h2>SLIDEBAR</h2>
            <img src="css/icons/profile_image/icon_icecream_renew.png">
            <h5>User ID</h5>
            <ul>
                <li> MY PLANS </li>
                <br/>
                <li> SETTINGS </li>
            </ul>
		</div>
				
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
		<!-- Slidebars -->
		<script src="slidebars/slidebars.js"></script>
		<script>
			(function($) {
				$(document).ready(function() {
					$.slidebars();
				});
			}) (jQuery);
		</script>
	</body>
</html>