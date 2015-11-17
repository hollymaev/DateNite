window.onload = function(){
//console.log("hello");

    $.ajax({
        url:"resultsServer.php",
        dataType:"json",
        data:{},
        type:"post",
        success:function(resp){
            console.log(resp);
        }
    
    });
    
}