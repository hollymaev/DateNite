$(document).ready(
    function(){
        $("#signup_page").hide();
        $("#login_page").hide();
        
        $("#splashLogin1").click(
            function(){
                $("#splash_page").fadeOut();
                $("#signup_page").fadeOut();
                $("#login_page").fadeIn();
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
        
        $("#splashSignup2").click(
            function(){
                $("#splash_page").fadeOut();
                $("#login_page").fadeOut();
                $("#signup_page").fadeIn();
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

    }
);