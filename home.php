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
                
                <!--profile icon-->
                <img id='picon' name='picon' class="profilepic" src="css/icons/profile_image/icon_icecream_renew.png">
              <br/>
            <span id='pusername' name='pusername' class="text"> USER ID </span>

              <br/><br/><br/>
    
                <div id="myplans">
                    <img class="side" src="css/icons/sidebar/icon_plan_resize.png">
                    <a class="text" href="plans.php"> MY PLANS </a>
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
                <img src="css/images/logo-light.png" id="logo2" alt="LOGO">
            </ul> 
        </div>
        
        <div id="grad1"></div>
        
        
        <!------------------- content ------------------->
        
<!--        <div id="sb-site">          -->
            
            <div id="blank" class="row">
                <div class="title" id="Choose">  Choose Your  </div>
                 <div class="box" id="box1"> TIME </div>
                <div class="box" id="box2"> BUDGET</div>
            </div>
            
            <div id="grey" class="row">
                
                <img id="optLine" src="css/icon/options-line.png">
        
                <div class="row">
                
                    <div class="col-xs-2 col-md-2 glowButtons">
                        <span class="span1">MORNING</span>
                        <span class="span2">AFTERNOON</span>
                        <span class="span3">EVENING</span>
                        <span class="span4">ALL DAY</span>
                    </div>

                    <div class="col-xs-1 col-md-1" id="time">
               
                        <div class="glowButtons">         
                            <div class="row">   
                                <button>
                                    </br>
                                    </br>
                                    <label for="Morning">
                                        <img class="timeicon1" src="css/icons/time/icon_time_m2_resize.png"/>
                                    </label> 
                                    <input type="radio" name="time" id="Morning" value="Morning">  
                                </button>
                            </div>
                        </div>    

                        <div class="glowButtons">
                            <div class="row">
                                <button>
                                <input type="radio" name="time" id="Afternoon" value="Afternoon">
                                </br>
                                </br>
                                </br>
                                <label for="Afternoon">
                                    <img class="timeicon2" src="css/icons/time/icon_time_a2_resize.png"/>
                                </label>
                                </button>
                            </div>
                        </div>

            <div class="glowButtons">
                        <div class="row">
                            <button>
                            <input type="radio" name="time" id="Evening" value="Evening">
                            </br>
                            </br>
                            </br>
                            <label for="Evening">
                                <img class="timeicon3" src="css/icons/time/icon_time_e2_resize.png"/>
                            </label>
                </button>
                        </div>
            </div>

                <div class="glowButtons">
                        <div class="row">
                    <button>
                            <input type="radio" name="time" id="All" value="All">
                        </br>
                            </br>
                            </br>
                            <label for="All">
                                <img class="timeicon4" src="css/icons/time/icon_time_ad2_resize.png"/>
                            </label>
                        </button>        
                    </div>
                    </div>
</div>
                    <div class="col-xs-4 col-md-4 glowButtons">
                        <span class="span5"> ~ $50 </span>
                        <span class="span6"> ~$50~$100 </span>
                        <span class="span7"> ~ $100 </span>
                            </div>   

                    <div class="col-xs-1 col-md-1" id="budget">
                       
                        <div class="glowButtons2">
                        <div class="row">
                            <button>
                            <input type="radio" name="budget" id="Low" value="Low">
                            </br>
                            </br>
                            </br>
                                <label for="Low">
                                <img class="budicon1" src="css/icons/budget/icon_budget_l_resize.png"/>
                            </label>
                        </button>    
                    </div>
                           </div>

                        
    <div class="glowButtons2">
        <div class="row"><button>
                            <input type="radio" name="budget" id="Mid" value="Mid">
                            </br>
                            </br>
                            </br>
                            <label for="Mid">
                                <img class="budicon2" src="css/icons/budget/icon_budget_m_resize.png"/>
                            </label></button>
                    </div>
                        </div>

        <div class="glowButtons2">
                        <div class="row">
                            <button> 
                            <input type="radio" name="budget" id="High" value="High">
                                </br>
                            </br>
                            <label for="High">
                                <img class="budicon3" src="css/icons/budget/icon_budget_h_resize.png"/>
                            </label>
                                </button>
                        </div>
</div>
                    </div>

                    <div class="col-xs-2 col-md-2"></div>
                    
                </div>
                
                <div class="row">
                    <div class="col-xs-5 col-md-5"></div>
                    <button id="goBut" class="go col-xs-2 col-md-2"> GO </button>
                    <div class="col-xs-5 col-md-5"></div>
                </div>
                
                <div id="arrowicons">
                    <i id="return" class="fa fa-angle-left fa-4x"></i>
                </div>
                
                
                <div class="span"id="infoResults">
                </div>
                
            </div>
            
        </div>
        
<!--    </div>    -->
    
    
    <SCRIPT SRC = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></SCRIPT>
    <SCRIPT SRC = "javascript/javascript_home.js"></SCRIPT>
    <script src="javascript/slidebars.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?"></script>
    <!-- this is for menu login&out -->
    <script src="javascript/sb_log.js"></script>
    <!-- this is for logout -->
    <script src="javascript/check.js"></script>
    <script src="javascript/profile.js"></script>

</body>
        
    
    
</HTML>