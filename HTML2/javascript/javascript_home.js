window.onload = function () {
        markers=[];
        function initMap(){
            //google opbejct has finished leading  on my page
            var map = new google.maps.Map(document.getElementById("map"),
            {
                center:{
                    lat:51,
                    lng:-121
                },
                zoom:15
            }); 
 //for Google Maps Marker
// set at a default lat and lng trying to make it dynamic from db
                var marker = new google.maps.Marker({
                    position:{
                        lat: 51,
                        lng: -121
                    },
                    zoom: 13,
                    map: map
                });
  
    var infoWindow = new google.maps.InfoWindow({map: map});

      if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude,
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Here You Are!');
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }

}

/*Maps*/

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
                    //var actDiv = $
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
                    var lnglat = long+", "+lat;
                    markers.push[long];
                    markers.push[lat];
                    
                    console.log(lnglat);
                    
                    
                    for(var i in company){
                            
                        $("#infoResults").append("<div class='companyinfo'><h3>"+company[i].company+"</h3><p>"+company[i].address+"<br>"+company[i].phone+"<br><a href='"+company[i].website+"' target=_blank>"+company[i].website+"</a><br><br>"+company[i].description+"</p><div id='map'></div></div>");
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
/*TO SAVE THE OPTION*/
var saveBut = document.getElementById('save');
saveBut.onclick = function(){
    $.ajax({
        url:"resultsServer.php",
        dataType: "json",
        data:{
            mode: 3
        },
        type:"get",
        success:function(save){
            console.log(save);
        }
    });
}

};
   