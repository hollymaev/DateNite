<DOCTYPE! HTML>
<HTML>
<head>
    <title> DATENITE </title>
    
    <link href="css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons/font-awesome-4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/slidebars.css">
    <link rel="stylesheet" href="css/example-styles.css">
    <link href = "css/bootstrap.min.css" rel="stylesheet">
        
</head>

<body>
    <div id="background" class=".container-fluid "> 

<!---------------- sidebar content  --------------->
       
        <div id= "c" class="sb-slidebar sb-left sb-style-overlay">
            <br/><br/><br/>
            <div class="s">WELCOME</div>
                <img id='s-picon' name='s-picon' class="profilepic" src="css/icons/profile_image/icon_icecream_renew.png">
              <br/>
            <span id='pusername' name='pusername' class="text"> USER ID </span>

              <br/><br/><br/>
    
                <div id="myplans">
                    <img class="side" src="css/icons/sidebar/icon_plan_resize.png">
                    <span><a class="text" href="plans.php"> MY PLANS </a></span>
                </div>
                
                    <br/><br/><br/>
    
                <div id="settings">
                    <img class="side" src="css/icons/sidebar/icon_setting_resize.png">
                    <button id='profile' name='profile' class='text'>SETTINGS</button>
                </div>
           
                    <br/><br/><br/>
            
                <div id="login">
                     <img class="side" src="css/icons/sidebar/icon_login_resize.png">
                     <button id='m_login' name='m_login' class="text"> LOGIN </button>
                </div>
            
                <div id="m_logout">
                     <img class="side" src="css/icons/sidebar/icon_logout_resize.png">
                    <button id='logout' name='logout' class="text"> LOGOUT </button>
                </div>
            
            </div>
        <div id="sb-site">
        
        <!------------------- header ------------------->
        
        <div id="header" class="row">
                <ul>
                    <img src="css/icon/side-bar_icon.png" class="sb-toggle-left" id="menu">
                     <a href="home.php"><img src="css/images/logo-light.png" id="logo2" alt="LOGO"></a>
                </ul> 
        </div>
        
        <div id="grad1"></div>
        
            
            <!---- content ---->
    <div id="plans" class="row">
     
            <div class="row">
                <div class="title">  MY PLANS </div>
            </div>
        
        <div id="savedPlan" class="row">
        </div>

               
            
    </div>
    
            
            
<!--- script --->
    <script SRC = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script SRC = "javascript/javascript_plans.js"></script>
    <script src="javascript/slidebars.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?"></script>
    <!-- this is what i add for setting button link to profile page -->
    <script src="javascript/profile.js"></script>
    <!-- this is for menu login&out -->
    <script src="javascript/sb_log.js" type="TEXT/JAVASCRIPT"></script>
    <!-- this is for logout -->
    <script src="javascript/check.js" type="TEXT/JAVASCRIPT"></script>


</body>
        
    
    
</HTML>