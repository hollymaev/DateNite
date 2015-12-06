$(document).ready(
    function(){
        
        $("#splashSignup2").click(
            function(){
                
                var fn = $("#fname").val();
                var em = $("#email").val();
                var pass = $("#pass").val();
                var cpass = $("#cpass").val();
                
                var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
                
                if(fn==""||em==""||pass==""||cpass==""){
                    $("#Msg1").html('<h1>Please fill in all blanks.</h1>');
                    $("#Msg1").css({"text-align":"center","margin-top":"1%", 'color':'orange'});
                    return false;
                }else if(pass.length < 5){
                    $("#Msg1").html('<h1>Password need to be longer than 5 characters.</h1>');
                    $("#Msg1").css({"text-align":"center","margin-top":"1%", 'color':'orange'});
                    return false;
                }else if(pass !== cpass){
                    $("#Msg1").html('<h1>Passwords do not match.</h1>');
                    $("#Msg1").css({"text-align":"center","margin-top":"1%", 'color':'orange'});
                    return false;
                }else if(!re.test(em)){
                   $("#Msg1").html('<h1>Email address is invalid.</h1>');
                   $("#Msg1").css({"text-align":"center","margin-top":"1%", 'color':'orange'});
                   return false;
                }

            }
        );
   
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        
        function getUserProfileInfo() {

            $.ajax({
                url: "get.php",
                type: "GET",
                dataType: "JSON", //data: {}, 
                // could use this to ask for specific pieces of information (e.g., user profile, friends list, etc)
                
                success: function(resultData) {
                    //console.log("Session GET returned: ", resultData);

                    var status = resultData['status'];
                    if(status == 'success') {
                        
                        
                        var userProfileText = "";
                        var userProfile = resultData['userProfile'];
                        
                        console.log(userProfile);
                        
                        for(var key in resultData) {
                            if(key != 'status') {
                                userProfileText += key + ":" + resultData[key] + " ";
                            }
                        }
                        
                        $("#Msg2").text(userProfileText);
                        
                        console.log("hey1");
                            
                        window.location.href="home.php";
                            
                    } else {
                        console.log("hey");

                    }

                },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
            });

        }

            function ConvertFormToJSON(form){
                var array = $(form).serializeArray();
                var json = {};

                jQuery.each(array, function() {
                    // don't send 'undefined'
                    json[this.name] = this.value || '';
                });
                return json;
            }
        
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        

        function doLogin() {
                var formData = ConvertFormToJSON("#lg");
                console.log("dologin");
                
                $.ajax({
                    url: "check.php",
                    type: "POST",
                    dataType: "JSON",
                    data: formData,
                    success: function(data) {
                        console.log("dologin ajax ");

                        var status = data['status'];
                        if(status == 'fail') {
                            
                            console.log("hi");
                            
                            $("#Msg2").html('<h1>Your username/password incorrect.</h1>').css;
                            $("#Msg2").css({"text-align":"center","margin-top":"1%", 'color':'orange'});
                            return false;  
                            
                        } else {
                            // get user data
                            getUserProfileInfo();
                            //$('#lg').trigger("reset");
                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log("lolol");
                    }
                });

        }
        
        $('#lg input').bind('keypress', function(e) {
                var code = e.keyCode || e.which;
                if(code == 13) {
                    // Pressed enter, invoke login
                    doLogin();
                }
        });
        
        $("#splashLogin3").click(
            function(){
                var FName = $("#FName").val();
                var Passwprd = $("#Password").val();
                
                if(FName==""||Password==""){
                    $("#Msg2").html('<h1>Please type in your firstname and password.</h1>').css;
                    $("#Msg2").css({"text-align":"center","margin-top":"1%", 'color':'orange'});
                    return false;
                }
                
                console.log("hi");
                
                doLogin();
                
            }
        );
        
        
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        $("#logout").click(
            function(){
                var sendData = {logout: "true"};
                console.log("Logout data to send: ", sendData);

                $.ajax({
                    url: "logout.php",
                    type: "POST",
                    dataType: "JSON",
                    data: sendData,
                    success: function(data) {
                        console.log("Logout data returned: ", data);
                        var status = data['status'];
                        if(status == 'fail') {
                            console.log("nope!");
                        } else {
                            window.location.href="index.php";
                        }
                    }
                });

            }
        );
        
        
        $("#m_login").click(
            function(){
                console.log("lol");
                window.location.href="index.php";
            }
        );


              
            

    }
);
        
      
        
    
      
