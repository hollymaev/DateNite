<DOCTYPE! HTML>
<HTML>
<HEAD>
    <TITLE> DATENITE </TITLE>
    <SCRIPT SRC = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></SCRIPT>
    <SCRIPT SRC = "JQ/jquery.mobile.custom.js" TYPE="TEXT/JAVASCRIPT"></SCRIPT>
    <SCRIPT SRC = "JQ/jquery.mobile.custom.min.js" TYPE="TEXT/JAVASCRIPT"></SCRIPT>
    <SCRIPT SRC = "javascript/javascript_home.js" TYPE="TEXT/JAVASCRIPT"></SCRIPT>
    <LINK HREF = "css/style.css" REL="STYLESHEET">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        
        <title>Home</title>
</HEAD>

    <BODY>
        <div id="background"> 
            <?php
            
            include("header.php");

            ?>
            <div id="blank">
                <div class="box" id="box1"> TIME </div>
                <div class="box" id="box2"> BUDGET</div>
            </div>
            <br/>
            <br/>
            <div id="grey">
            
            <div id="ResultSpan">What Do You Think?</div>
        <div id="selectors">
            <div class="selectors" id="budget">
                <input type="radio" name="budget" id="low" value="Low">
                <label for="low"><img src="css/icons/budget/icon_budget_l_resize.png"/></label>
                <input type="radio" name="budget" id="Mid" value="Mid">
                <label for="Mid"><img src="css/icons/budget/icon_budget_m_resize.png"/></label>
                <input type="radio" name="budget" id="High" value="High">
                <label for="High"><img src="css/icons/budget/icon_budget_h_resize.png"/></label>
            </div>
            <div class="selectors" id="time">
               <input type="radio" name="time" id="Morning" value="Morning">
                <label for="Morning"><img src="css/icons/time/icon_time_m2_resize.png"/></label>
                <input type="radio" name="time" id="Afternoon" value="Afternoon">
                <label for="Afternoon"><img src="css/icons/time/icon_time_a2_resize.png"/></label>
                <input type="radio" name="time" id="Evening" value="Evening">
                <label for="Evening"><img src="css/icons/time/icon_time_e2_resize.png"/></label>
                <input type="radio" name="time" id="All" value="All">
                <label for="All"><img src="css/icons/time/icon_time_ad2_resize.png"/></label>
            </div>
        </div>
            

            <div>
                <button id="goBut" class="go"> GO</button>
            </div>
 
            </div>

        </div>

    </BODY>
    
</HTML>