window.onload = function () {
        function initMap(){
            //google opbejct has finished leading  on my page
            var map = new google.maps.Map(document.getElementById("map"),
            {
                center:{
                    lat:51,
                    lng:-121
                },
                zoom:7
            }
        );
        

            var new_info = new google.maps.InfoWindow({
                content: "<img src='http://media.animevice.com/uploads/0/69/545801-default_image__earth_dragon_balls__object_page__large.png'>"
            });
        
            var info = new google.maps.InfoWindow({
                content:"hey girl"
            });
            //new_info.open(map,marker);
        }
               var  newMarker = function(lat,long){

            var new_mark = new google.maps.Marker({
              map:map,
                icon: {
                        url:"https://upload.wikimedia.org/wikipedia/en/e/ec/Soccer_ball.svg",
                        size:{
                            width:50,
                            height:50
                        },
                        scaledSize:{
                            width:50,
                            height:50
                        }
                      }
            });
                var marker = new google.maps.Marker({
                position:{
                    lat:lat,
                    lng: long
                },
                map: map,
                title: "my marker",
                icon: {
                        url:"https://upload.wikimedia.org/wikipedia/en/e/ec/Soccer_ball.svg",
                        size:{
                            width:250,
                            height:350
                        },
                        scaledSize:{
                            width:250,
                            height:350
                        }
                      }
            });}
"use strict";
//for icons
$('#time input:radio').addClass('input_hidden');
$('#budget input:radio').addClass('input_hidden');
$('#budget label').click(function(){
    $(this).addClass('selected').siblings().removeClass('selected');
});
          
var goBut = document.getElementById("goBut");

    goBut.onclick= function(){
                $("#arrowicons").css("display","block");
                $("#ResultSpan").css("display","block");
                $("#budget").css("display","none");
                $("#time").css("display","none");
                $("#goBut").css("display","none");
                $("#blank").css("display","none");
                $("#optLine").css("display","none");
                //$("#background").css("url","none");
                //$("#arrowicons").css("display", "inline-block");
        //to create div for result
        //to create div for result
    
        var budgetInput = document.querySelector("input[name='budget']:checked").value;
        console.log(budgetInput);
         var timeInput = document.querySelector("input[name='time']:checked").value;
        console.log(timeInput);
        //hard coded the activity ID under the company table
        //need to make it dynamic to match the user's inputs
        //var actID = 1;
        //for getting user inputs and posting results
        $.ajax({
				url:"resultsServer.php",
				dataType:"json",
				data:{
					time: timeInput,
                    budget: budgetInput,
                    mode:1
				},
				type:"post",
				success:function(resp){
                    console.log(resp);
                    var actDiv = $
                    var results = resp;
                    //console.log(results);                
                    for(var i in results)
                    {
                        var newID = results[i].compID;
                        
                        $("#grey").append(
                            
                            "<div class='activity' style='background:url("+results[i].imgSrc+");' id='"+newID+"'><h4>" + results[i].act_name + "</h4><p>Location: " + results[i].city + "<br>Budget: " + results[i].price_range + "<br>Time of Day: " + results[i].time_of_day + "</p></div>");
                        
                        
                        //$(".activity").css("background","linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2));");
                        //parseint when calling the id
                        //activity.attr("id", results[i].ID);
                        
                        //$(".activity").css("background-image","url('" + results[i].imgSrc + "')");
                        
                        //when appending the images
                        //$("#activityResults").html("<div class='activity'>" + resp + "</div>");
                    }
            
   
            $(".activity").click(function(){
                var actID= $(this).attr("id");
            
                var actualID = parseInt(actID);
                console.log(actualID);
                $("#ResultSpan").css("display","none");
                $(".activity").css("display","none");
                $("#infoResults").css("display","block");
               $.ajax({
                url:"resultsServer.php",
                dataType:"json",
                data:{
                    compID: actualID,
                    mode: 2
                },
                type:"post",
                success:function(company){
                    console.log(company);
                    
                    var company = company;
                    var lat = company[0].latitude;
                    var long = company[0].longitude;
                    console.log(lat, long);
                   newMarker(lat,long);
                    for(var i in company){
                            
                        $("#infoResults").append("<div class='companyinfo'><h3>"+company[i].company+"</h3><p>"+company[i].address+"<br>"+company[i].phone+"<br>"+company[i].website+"<br><br>"+company[i].description+"</p><img src='css/icon/save-star-before_icon.png'><div id='map'>ndfsln</div></div>");
                    }
               
                    //console.log(document.getElementById('map').val);
initMap();    

                
                }

                    });
                });           
                    }
     
});



    }; //end of button click function
var backBut = document.getElementById("return");
backBut.onclick = function(){
    //i know that i have to actually hide things but just bare with me here
    location.href="home.php";
}

};
   