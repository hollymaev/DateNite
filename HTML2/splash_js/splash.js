$(document).ready(
    function(){
        
        $("#signup_page").hide();
        $("#login_page").hide();
        
        
        /****** Splash Page ******/
        
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
        
        $("#splashGuest1").click(
            function(){
                location.href = "home.php";
            }
        );
        
        
        /****** Login Page ******/
        
        $("#splashLogin2").click(
            function(){
                $("#splash_page").fadeOut();
                $("#signup_page").fadeOut();
                $("#login_page").fadeIn();
            }
        );
        
        $("#splashSignup2").click(
            function(){
                $.post(
                    //$("#su").attr("action"),
                    //$("#su:input").serializeArray(),
                );
            }
        );
        
        $("#splashGuest2").click(
            function(){
                location.href = "home.php";
            }
        );
        
                
        /****** Signup Page ******/
                
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
                
    }
);