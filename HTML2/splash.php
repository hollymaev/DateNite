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
            
        <div id='splash_page' class="row">
            
            <div class="row">
            <img id="tri1" src="css/icons/triangles/tra_1.png"/>
            <h2> CHOOSE YOUR BUDGET </h2>
            <div class="circle"> </div>
            <div class="circle"> </div>
            <div class="circle"> </div>
            </div>
            
            <div class="row">
            <img id="tri2" src="css/icons/triangles/tra_2-01.png"/>
            <h2> CHOOSE YOUR TIME </h2>
            <div class="circle"> </div>
            <div class="circle"> </div>
            <div class="circle"> </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <img id="logo" src="css/images/splashlogo.png" alt="logo"/>
                </div>
            <div class="col-xs-1"></div>
            </div>
            
            <div class="row">
            <div class="circle"> </div>
            <div class="circle"> </div>
            <div class="circle"> </div>
            <div class="circle"> </div>
            <div class="circle"> </div>
            <div class="circle"> </div>
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
        
        <div id='signup_page'>
            <div class="col-xs-1"></div>
            
            <div class="col-xs-10">
                <div class="row">
                    <img id="logo" src="css/images/logo-light.png" alt="logo"/>
                </div>
                

                    <div class="row">
                        <input id="fname" class="inbox in1" type="text" placeholder="Firstname"/>
                    </div>

                    <div class="row">
                        <input id="lname" class="inbox in2" type="text" placeholder="Lastname"/>
                    </div>

                    <div class="row">
                        <input id="email" class="inbox in3" type="email" placeholder="Email address"/>
                    </div>

                    <div class="row">
                        <input id="pass" class="inbox in4" type="password" max="8" placeholder="Password (less than 8 characters)"/>
                    </div>

                    <div class="row">
                        <input id="cpass" class="inbox in5" type="password" max="8" placeholder="Confirm password"/>
                    </div>

                    <div class="row">
                        <button id="splashSignup2" class="splashButton">SIGNUP</button>
                    </div>

                    <div class="row">
                        <button id="splashLogin2" class="splashbut2">LOGIN?</button>
                    </div>

                    <div class="row">
                        <button id="splashGuest2" class="splashbut2">SKIP</button>
                    </div>

                
            </div>
            
            <div class="col-xs-1"></div>
            
        </div>
        
        <div id='login_page' class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <div class="row">
                    <img id="logo" src="css/images/logo-light.png" alt="logo"/>
                </div>
                
                <div class="row">
                    <h1 class="h1">Welcome<h1>
                    <h3 class="h3">your DateNite app</h3>
                </div>
                        
                <div class="row">
                    <input id="userName" class="inbox in1" type="text" placeholder="User Name"/>
                </div>

                <div class="row">
                    <input id="Password" class="inbox in4" type="password" placeholder="Password"/>
                </div>

                <div class="row">
                    <button id="splashLogin3" class="splashButton">LOGIN</button>
                </div>

                <div class="row">
                    <button id="splashSignup3" class="splashbut2">SIGNUP?</button>
                </div>
                
            </div>
            <div class="col-xs-1"></div>
        </div>    

        <br/>
        <br/>
        <br/>
        <br/>     
    </div> 
    
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="splash_js/bootstrap.min.js"></script>
        <script src="splash_js/splash.js"></script>
        <SCRIPT SRC = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></SCRIPT>
    </BODY>
    
</HTML>