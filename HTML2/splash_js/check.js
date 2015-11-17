$(document).ready(
    function(){
        
        $("#splashSignup2").click(
            function(){
                
                var fn = $("#fname").val();
                var ln = $("#lname").val();
                var em = $("#email").val();
                var pass = $("#pass").val();
                var cpass = $("#cpass").val();
                
                if(fn==""||ln==""||em==""||pass==""||cpass==""){
                    $("#Msg1").html('<h1>Please fill in all blanks.</h1>');
                    $("#Msg1").css({"text-align":"center","margin-top":"1%", 'color':'orange'});
                    return false;
                }else if(user.length < 5){
                    $("#Msg1").html('Username need to be longer than 5 charecters.');
                    $("#Msg1").css({"text-align":"center","margin-top":"1%", 'color':'orange'});
                    return false;
                }

            }
        );
    ///////////////////
        
        
                function getUserProfileInfo() {

                $.ajax({
                    url: "get.php",
                    type: "GET",
                    dataType: "JSON",
                    //data: {}, // could use this to ask for specific pieces of information (e.g., user profile, friends list, etc)
                    success: function(resultData) {
                        //console.log("Session GET returned: ", resultData);

                        var status = resultData['status'];
                        if(status == 'success') {


                        /*    var userProfileText = "Welcome back ";

                            var userProfile = resultData['userProfile'];
                            //console.log(userProfile);

                            userProfileText += userProfile['firstName'] + ", "
                                + userProfile['lastName'] + " ("
                                + userProfile['login'] + ")";
                            /*for(var key in resultData) {
                                if(key != 'status') {
                                    userProfileData += key + ":" + resultData[key] + " ";
                                }
                            }*/


                       /*     $("#infoMsg").text(userProfileText);
                            $("#infoMsg").css("display", "block");
                            $("#errorMsg").css("display", "none");
                            $("#logoutForm").css("display", "block");
                            $("#loginForm").css("display", "none"); */
                             console.log("hey1");

                        } else {
                          /*  $("#logoutForm").css("display", "none");
                            $("#loginForm").css("display", "block"); */
                            console.log("hey");

                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR.statusText, textStatus);
                    }
                });

            }

            // from: http://www.developerdrive.com/2013/04/turning-a-form-element-into-json-and-submiting-it-via-jquery/
            function ConvertFormToJSON(form){
                var array = $(form).serializeArray();
                var json = {};

                jQuery.each(array, function() {
                    // don't send 'undefined'
                    json[this.name] = this.value || '';
                });
                return json;
            }
        
        /////////////
        function doLogin() {

                var formData = ConvertFormToJSON("#lg");
                console.log("Login data to send: ", formData);

                $.ajax({
                    url: "check.php",
                    type: "POST",
                    dataType: "JSON",
                    data: formData,
                    success: function(data) {
                        console.log("Login data returned: ", data);

                        var status = data['status'];
                        if(status == 'fail') {
                            //$("#errorMsg").html(data['msg']);
                            //$("#errorMsg").css("display", "block");
                        } else {
                            // get user data
                            getUserProfileInfo();
                            $('#lg').trigger("reset");

                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        //console.log(jqXHR.statusText, textStatus, errorThrown);
                        console.log(jqXHR.statusText, textStatus);
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
                
                /*
                $.ajax({
                        url: "check.php",
                        type: "POST",
                        dataType: "JSON",
                        data:{
                            fname: FName,
                            pass: Password
                        },
                        success: function(data){
                            console.log(data);
                            if(data.status === true){
                                window.location.replace("home.php");
                            }else{
                                alert("Try again please.");
                            }
                        }
                    });
                    */

                
            }
        );
      
    }    
      
);