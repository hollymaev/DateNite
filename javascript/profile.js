$(document).ready(
    function(){
        $("#profile").click(
            function(){
                window.location.href="profile.php";
            }
        );
        
        $("#icecream").click(
            function(){
               //alert("hi");
                var s = document.getElementById("picon");
                s.value = "./css/icons/profile_image/icon_icecream_renew.png";
            }
        );
        
        $("#pineapple").click(
            function(){
               document.getElementById("picon").value = "css/icons/profile_image/icon_pineapple_renew.png";
            }
        );
        
        $("#banana").click(
            function(){
                document.getElementById("picon").value = "css/icons/profile_image/icon_banana_renew.png";
            }
        );
        
        $("#teaport").click(
            function(){
               document.getElementById("picon").value = "css/icons/profile_image/icon_teaport_renew.png";
            }
        );
        
        $("#milk").click(
            function(){
               document.getElementById("picon").value = "css/icons/profile_image/icon_milk_renew.png";
            }
        );
        
        
        
        $.ajax({
            url:"profile_func.php",
            dataType:"json",
            data:{},
            type:"get",
            success:function(resp){       
                console.log(resp);
                //loop through the package of info and grab their individual properties
                for(var i=0; i<resp.length; i++){
                    var unameInp = document.getElementById("fname");
                    var emailInp = document.getElementById("email");
                    var passInp = document.getElementById("pass");
                    var spiconInp = document.getElementById("s-picon");
                    var spunInp = document.getElementById("pusername");
                    
                    spunInp.innerHTML = resp[i].fname;
                    unameInp.value = resp[i].fname;
                    emailInp.value = resp[i].email;
                    spiconInp.src = resp[i].picon;
                    //passInp.value = resp[i].password;                   
                }
                
                $("#save").click(
                    function(){
                        console.log("hi");
                        
                        var fn = $("#fname").val();
                        var em = $("#email").val();
                        var pass = $("#pass").val();
                        var pi = $("#picon").val();
                        
                        var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;

                        if(pass.length < 5){
                            $("#Msg1").html('<h1>Password need to be longer than 5 characters.</h1>');
                            $("#Msg1").css({"text-align":"center","margin-top":"1%", 'color':'orange'});
                            return false;
                        }else if(!re.test(em)){
                            $("#Msg1").html('<h1>Email address is invalid.</h1>');
                            $("#Msg1").css({"text-align":"center","margin-top":"1%", 'color':'orange'});
                            return false;
                        }else {
                            
                            $.ajax({
	                           url: "profile_insert.php",
	                           type :"POST",
                                data:{
                                    picon:pi
                                },
                                dataType : "json",
                                success: function(edit){
                                    console.log(edit);
                                },
                                error: function(jqXHR, textStatus, errorThrown) {}
	                       });
                            
                            $.ajax({
	                           url: "profile_update.php",
	                           type :"POST",
                                data:{
                                    fname:fn,
                                    pass:pass,
                                    email:em,
                                    picon:pi
                                },
                                dataType : "json",
                                success: function(edit){
                                    console.log(edit);
                                },
                                error: function(jqXHR, textStatus, errorThrown) {}
	                       });
                            

                            
                        }
                    }
                );
  
            }
        });
        
        
        
       
    }
);



