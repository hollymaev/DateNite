<DOCTYPE! HTML>
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
            <br/>
            <br/>
            
            <h2>SETTINGS</h2>
            <br/>
            <br/>
            <br/>
            <div id="userIcons">
            </div>
            <br/>
            <div id="userInfoBox">
            First Name<input id="firstName"/>
            Last Name<input id="lastName"/>
            Email<input id="email"/>
            </div>
            <br/>
            <div id="userNamePass">
            User Name <input id="userName"/>
            Password <input id="Password"/>
            </div>
            <br/>
            <div id="userNotifications">
            Email Notifications 
            Push Noticfications 
            </div>
        </div> 

    </BODY>
    
</HTML>