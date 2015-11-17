$(document).ready(
    function(){
        $("#signup_page").hide();
        $("#login_page").hide();
        
        $("#splashLogin1").click(
            function(){
                $("#splash_page").fadeOut(300);
                $("#signup_page").fadeOut(300);
                $("#login_page").fadeIn(500);
            }
        );
        
        $("#splashSignup1").click(
            function(){
                $("#splash_page").fadeOut();
                $("#login_page").fadeOut();
                $("#signup_page").fadeIn();
            }
        );
        
        $("#splashLogin2").click(
            function(){
                $("#splash_page").fadeOut();
                $("#signup_page").fadeOut();
                $("#login_page").fadeIn();
            }
        );
        
        $("#splashLogin3").click(
            function(){
                $("#splash_page").fadeOut();
                $("#signup_page").fadeOut();
                $("#login_page").fadeIn();
            }
        );
        
        $("#splashSignup3").click(
            function(){
                $("#splash_page").fadeOut();
                $("#login_page").fadeOut();
                $("#signup_page").fadeIn();
            }
        );
        
        $("#splashGuest1").click(
            function(){
                location.href = "home.php";
            }
        );
        
         $("#splashGuest2").click(
            function(){
                location.href = "home.php";
            }
        );
        
        $("#splashSignup2").click(
            function(){
                $.post($("#su").attr("action"),
                    $("#su:input").serializeArray(),
                    function(info){
                        $("#errMsg").innerHTML(info);
                        $("#errMsg").css({"text-align":"center","margin-top":"1%", 'color':'white'});
                    }
                    
                    /*
                    $.ajax({
                        url: "check.php",
                        type: "POST",
                        dataType: "JSON",
                        data:{
                            fname: fname,
                            pass: pass,
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
                
                );
            }
        );
        
        

    }
);