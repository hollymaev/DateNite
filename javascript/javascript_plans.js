window.onload = function(){
    "use strict";
    
    $.ajax({
        url: "showPrefs.php",
        dataType: "json",
        data:{
            mode: 4
        },
        type: "post",
        success: function(prefs){
            console.log(prefs);
            
            for(var i in prefs){
                $("#savedPlan").append("<hr><div id='"+prefs[i].ID+"' class='savedinfo'><h1>"+prefs[i].company+" <i id='deleter' class='fa fa-trash-o fa-1x'></i></h1><h2>"+prefs[i].description+"</h2><br><p class='saveComp'>Address: "+prefs[i].address+"<br>Phone Number: "+prefs[i].phone+"<br>Website: "+prefs[i].website+"</p></div>");
            }
                var deletebut = document.getElementById("deleter");
                deletebut.onclick = function(){
                    var compid = $(".savedinfo").attr("id");
                    console.log("wordsssdsdss");
                    $.ajax({
                        url: "showPrefs.php",
                        dataType: "json",
                        data:{
                            mode: 5,
                            compid: compid,
                        },
                        type: "post",
                        success: function(deleted){
                            if(deleted == true){
                                alert("You Have Successfully Deleted This! Refresh To Update Your Saved Plans.");
                            }else{
                                alert("Uh oh! something went wrong. Try again.");
                            }
                            console.log(deleted);
                        }
                    });
                }
        }
    });
};