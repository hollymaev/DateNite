<DOCTYPE! html>
<html>  

<head>
    <meta charset="utf-8">
    <link href = "css/style3.css" rel="stylesheet"> 
    <link href="css/style2.css" rel="stylesheet">
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
                <button id="save" name="name">SAVE</button>
            </ul> 
        </div>
        
        <div id="grad1"></div>
        
           
        <!------------------- content ------------------->
        

        <div id='titSet' class="row">
            <div class="col-xs-4 col-md-4"></div>
            <div class="col-xs-4 col-md-4">
                <p class='pSe'>SETTING</p>
            </div>
            <div class="col-xs-4 col-md-4"></div>
        </div>

        <div id="Msg1"></div>
        
        <div id='proIcon' class="row ">
            <div class="col-xs-1 col-md-1"></div>
            <div class="col-xs-10 col-md-10">
                <img id='icecream' name='icecream' class='picon fa icon-rotate' src="css/icons/profile_image/icon_icecream_renew.png"/>
                <img id='pineapple' name='pineapple' class='picon fa' src="css/icons/profile_image/icon_pineapple_renew.png"/> 
                <img id='banana' name='banana' class='picon fa icon-rotate' src="css/icons/profile_image/icon_banana_renew.png"/>
                <img id='teaport' name='teaport' class='picon fa icon-rotate' src="css/icons/profile_image/icon_teaport_renew.png"/>
                <img id='milk' name='milk' class='picon fa icon-rotate' src="css/icons/profile_image/icon_milk_renew.png"/>
            </div>
            <div class="col-xs-1 col-md-1"></div>
        </div>
            
        <div class="col-xs-1 col-md-1"></div>
        <div class="col-xs-10 col-md-10">
            
            <!-- <form id='pro' method="get" action="profile_fun.php"> -->
                
                <div id='userInfo' class="row">
                    <input id='picon' name='picon' type='hidden' value=''/>
                    <input id='fname' name='fname' class="pinbox1 pin" type='type' placeholder='Username'/>
                    <input id='pass' name='pass' class="pinbox1 pin" type='password' placeholder='Password'/>
                    <input id='email' name='email' class="pinbox2 pin" type='email' placeholder='Email'/>
                </div>
            
            <div class='pnoti'>
                <div id='noti' class="row">
                    <div id='emNoti' class="pinbox1 pin">
                        <lable class='lnoti'>Email Notification</lable>
                        <div  class='rnoti'>
                            <div class="onoffswitch1">
                                <input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1" checked>
                                <label class="onoffswitch1-label" for="myonoffswitch1">
                                    <span class="onoffswitch1-inner"></span>
                                    <span class="onoffswitch1-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
            
                    <div id='puNoti' class="pinbox2 pin">
                        <lable class='lnoti'>Push Notification</lable>
                        <div  class='rnoti'>
                            <div class="onoffswitch2">
                                <input type="checkbox" name="onoffswitch2" class="onoffswitch2-checkbox" id="myonoffswitch2" checked>
                                <label class="onoffswitch2-label" for="myonoffswitch2">
                                    <span class="onoffswitch2-inner"></span>
                                    <span class="onoffswitch2-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-1 col-md-1"></div>

<button id='backbtnprof'>Back</button>
        
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
        <script src="javascript/profile.js"></script>
        <script src="javascript/check.js"></script>
        <script src="javascript/sb_log.js"></script>
        <script src="javascript/slidebars.js"></script>
</body>

</html>
