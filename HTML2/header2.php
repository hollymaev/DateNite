<DOCTYPE! HTML>
<html>
    <head>
        
        <title> Header.php </title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="slidebars/slidebars.css">
        <link rel="stylesheet" href="css/example-styles.css">
        
    </head>
    <body>

<!---------------- sidebar content  --------------->
       
        <div id= "c" class="sb-slidebar sb-left sb-style-overlay">
            <div class="s">WELCOME</div>
                <img class="profilepic" src="css/icons/profile_image/icon_icecream_renew.png">
              <br/>
           <span class="text"> USER ID </span>
              <br/><br/><br/>
              <br/><br/><br/>
    
                <div id="myplans">
                    <img class="side" src="css/icons/sidebar/icon_plan_resize.png">
                    <span><a class="text" href="plans.php"> MY PLANS </a></span>
                </div>
                
                    <br/><br/><br/>
    
                <div id="settings">
                <img class="side" src="css/icons/sidebar/icon_setting_resize.png">
                <span><a class="text" href="settings.php"> SETTINGS </a></span>
                </div>
           
                    <br/><br/><br/>
            
                 <div id="login">
                 <img class="side" src="css/icons/sidebar/icon_login_resize.png">
                 <span><a class="text" href=""> LOGIN </a></span>
                </div>
            </div>
        <div id="sb-site">
        
<!------------------- header ------------------->
        
        <div id="header">
                <ul>
                    <img src="css/icon/side-bar_icon.png" class="sb-toggle-left" id="menu">
                    <img src="css/images/logo-light.png" id="logo2" alt="LOGO">
                </ul> 
            
        </div>
        
            <div id="grad1"></div>
        
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