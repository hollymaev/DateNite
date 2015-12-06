$(document).ready(
    function(){
        console.log("hi");  
        $.ajax({
            url:"menu_func.php",
            dataType:"json",
            data:{},
            type:"post",
            success:function(resp){       
                console.log(resp);
//loop through the package of info and grab their individual properties
                if(resp.status == "success"){
                    $("#login").css({"display":"none"});
                }else{
                    $("#m_logout").css({"display":"none"});
                }
            },
            error: function(resp){
                $("#m_logout").css({"display":"none"});
            }
        });      
    }
);


