<DOCTYPE! HTML>
<HTML>
<head>
    <title> DATENITE </title>
    
    <link href="css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons/font-awesome-4.4.0/css/font-awesome.css">
    <link rel="stylesheet" href="slidebars/slidebars.css">
    <link rel="stylesheet" href="css/example-styles.css">
    <link href = "css/bootstrap.min.css" rel="stylesheet">
        
</head>

<body>
    <div id="background" class=".container-fluid "> 
        
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
                <div class="title" id="Choose"><p>  Choose Your  </p></div>
                <div class="box" id="box1"><p> TIME </p></div>
                <div class="box" id="box2"><p> BUDGET</p></div>
            </div>
            
            <div id="grey" class="row">
                
                <img id="optLine" class="col-xs-6 col-md-6" src="css/icon/options-line.png">
        
                <div class="row">
                
                    <div class="col-xs-3 col-md-3"></div>

                    <div class="col-xs-1 col-md-1" id="time">
                        <div class="row">
                            <p class="row">Morning</p>
                        <input type="radio" name="time" id="Morning" value="Morning">
                        <label for="Morning"><img  class="timeicon1" src="css/icons/time/icon_time_m2_resize.png"/></label>
                        </div>

                        <div class="row">
                            <p class="row">Afternoon</p>
                        <input type="radio" name="time" id="Afternoon" value="Afternoon">
                        <label for="Afternoon"><img  class="timeicon2" src="css/icons/time/icon_time_a2_resize.png"/></label>
                        </div>

                        <div class="row">
                            <p class="row">Evening</p>
                        <input type="radio" name="time" id="Evening" value="Evening">
                        <label for="Evening"><img  class="timeicon3" src="css/icons/time/icon_time_e2_resize.png"/></label>
                        </div>

                        <div class="row">
                            <p class="row">All Day</p>
                        <input type="radio" name="time" id="All" value="All">
                        <label for="All"><img  class="timeicon4" src="css/icons/time/icon_time_ad2_resize.png"/></label>
                        </div>
                    </div>

                    <div class="col-xs-4 col-md-4"></div>   

                    <div class="col-xs-1 col-md-1" id="budget">
                        <div class="row">
                            <p class="row">$0-$15</p>
                        <input type="radio" name="budget" id="Low" value="Low">
                        <label for="Low"><img class="budicon1" src="css/icons/budget/icon_budget_l_resize.png"/></label>
                        </div>

                        <div class="row">
                            <p class="row">$16-$30</p>
                        <input type="radio" name="budget" id="Mid"   value="Mid">
                        <label for="Mid"><img class="budicon2" src="css/icons/budget/icon_budget_m_resize.png"/></label>
                        </div>

                        <div class="row">
                            <p class="homeInputs2">$31-$++</p>
                        <input type="radio" name="budget" id="High" value="High">
                        <label for="High"><img class="budicon3" src="css/icons/budget/icon_budget_h_resize.png"/></label>
                        </div>

                    </div>

                    <div class="col-xs-3 col-md-3"></div>
                    
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
    <SCRIPT SRC = "javascript/javascript_home.js" TYPE="TEXT/JAVASCRIPT"></SCRIPT>
    <script src="slidebars/slidebars.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?"></script>
<script>

</body>
        
    
    
</HTML>