<DOCTYPE! html>
<html>
    
<head>
    <title> DATENITE </title>

    <link href = "css/style1.css" rel="stylesheet">
    <link href = "css/bootstrap.min.css" rel="stylesheet">
        
</head>

<body>
    <div id="background" class=".container-fluid ">
        <br/>
        
        <!------------------- splash page ------------------->   
        
        <div id='splash_page' class="row">
            
            <div class="row">
                <div class="col-xs-3 col-md-3"></div>
                <div class="col-xs-6 col-md-6">
                    <img id="tri1" src="css/icons/triangles/tra_1.png"/>
                    <h2> CHOOSE YOUR TIME </h2>
                    <div class="circle"> </div>
                    <div class="circle"> </div>
                    <div class="circle"> </div>
                </div>
                <div class="col-xs-3 col-md-3"></div>
            </div>
            
            <div class="row">
                <div class="col-xs-3 col-md-3"></div>
                <div class="col-xs-6 col-md-6">
                    <img id="tri2" src="css/icons/triangles/tra_2-01.png"/>
                    <h2> CHOOSE YOUR BUDGET </h2>
                    <div class="circle"> </div>
                    <div class="circle"> </div>
                    <div class="circle"> </div>
                </div>
                <div class="col-xs-3 col-md-3"></div>
            </div>
            
            <div class="row">
            <div class="col-xs-1 col-md-1"></div>
                <div class="col-xs-10 col-md-10">
                    <img id="logo" src="css/images/splashlogo.png" alt="logo"/>
                </div>
            <div class="col-xs-1 col-md-1"></div>
            </div>
            
            <div class="row">
                <div class="col-xs-3 col-md-3"></div>
                <div class="col-xs-6 col-md-6">
                    <div class="circle2"> </div>
                    <div class="circle2"> </div>
                    <div class="circle2"> </div>
                    <div class="circle2"> </div>
                    <div class="circle2"> </div>
                    <div class="circle2"> </div>
                </div>
                <div class="col-xs-3 col-md-3"></div>
            </div>
            
            <br/>
            <br/>
            
            <div class="row">
                <button class="splashButton" id="splashLogin1">LOGIN</button> 
                <button class="splashButton" id="splashGuest1">GUEST</button>
            </div>
            
            <div class="row">
            <button class="splashbut2 sb2" id="splashSignup1">SIGNUP</button>
            </div>
        </div>
        
        
        <!------------------- signup page ------------------->
        
        <div id='signup_page'>
            <div class="col-xs-1 col-md-1"></div>
            
            <div class="col-xs-10 col-md-10">
                <div class="row">
                    <img id="slogo" src="css/images/logo-light.png" alt="logo"/>
                </div>
                
                <div id="Msg1"></div>
                
                <form id ="su" method="post" action="insert.php">
                    <div class="inb2">
                        <div class="row">
                            <input id="fname" name="fname" class="inbox in1" type="text" placeholder="Username"/>
                        </div>

                        <div class="row">
                            <input id="email" name="email" class="inbox in3" type="text" placeholder="Email address"/>
                        </div>

                        <div class="row">
                            <input id="pass" name="pass" class="inbox in4" type="password" max="8" placeholder="Password (more than 5 characters)"/>
                        </div>

                        <div class="row">
                            <input id="cpass" class="inbox in5" type="password" max="8" placeholder="Confirm password"/>
                        </div>
                    </div>
                
                
                    <div class="row">
                        <button id="splashSignup2" class="splashButton">SIGNUP</button>
                    </div>
                    </form>
                
                    <div class="row">
                        <button id="splashLogin2" class="splashbut2">Already Have An Account? Login.</button>
                    </div>

                    <div class="row">
                        <button id="splashGuest2" class="splashbut2">SKIP</button>
                    </div>
                
            </div>
            
            <div class="col-xs-1 col-md-1"></div>
            
        </div>
        
        
        <!------------------- login page ------------------->
        
        <div id='login_page' class="row">
            <div class="col-xs-1 col-md-1"></div>
            <div class="col-xs-10 col-md-10">
                <div class="row">
                    <img id="llogo" src="css/images/logo-light.png" alt="logo"/>
                </div>
                
                <div class="row">
                    <p class="p1">Welcome</p>
                    <p class="p2">your DateNite app</p>
                </div>
                
                <form id ="lg" method="post" action="check.php">
                    <div class="inb">
                        <div id="Msg2"></div>

                        <div class="row">
                            <input id="FName" name="lgfn" class="inbox in1" type="text" placeholder="Your Username"/>
                        </div>

                        <div class="row">
                            <input id="Password" name="lgpass" class="inbox in4" type="password" placeholder="Your Password"/>
                        </div>
                    </div>

                    <div class="row login3">
                        <inpbutton id="splashLogin3" name="slogin" class="splashButton">LOGIN</button>
                    </div>
                </form>
                
                <div class="row">
                    <button id="splashSignup3" class="splashbut2">Create An Account</button>
                </div>
                
            </div>
            <div class="col-xs-1 col-md-1"></div>
        </div>    

        <br/>
        <br/>
        <br/>
        <br/>     
    </div> 
    
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="splash_js/bootstrap.min.js"></script>
        <script src="splash_js/splash.js"></script>
        <script src="splash_js/check.js"></script>
    </BODY>
    
</HTML>