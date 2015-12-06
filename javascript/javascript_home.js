window.onload = function() {
    "use strict";
    //for icons
    $('#time input:radio').addClass('input_hidden');
    $('#budget input:radio').addClass('input_hidden');
    $('#budget label').click(function() {

        $(this).addClass('selected').siblings().removeClass('selected');
    });

        
    var goBut = document.getElementById("goBut");

    goBut.onclick = function() {
        $("#arrowicons").fadeIn(500);
        
        $("#budget").fadeOut(500);
        $("#time").fadeOut(500);
        $("#goBut").fadeOut(500);
        $("#blank").fadeOut(500);
        $("#optLine").fadeOut(500);
        $(".span1").fadeOut(500);
        $(".span2").fadeOut(500);
        $(".span3").fadeOut(500);
        $(".span4").fadeOut(500);
        $(".span5").fadeOut(500);
        $(".span6").fadeOut(500);
        $(".span7").fadeOut(500);

		var size = document.getElementById("grey");
		size.style.height = "1vh";
        
        var budgetInput = document.querySelector("input[name='budget']:checked").value;
        console.log(budgetInput);
        var timeInput = document.querySelector("input[name='time']:checked").value;
        console.log(timeInput);

        //for getting user inputs and posting results
        $.ajax({
            url: "resultsServer.php",
            dataType: "json",
            data: {
                time: timeInput,
                budget: budgetInput,
                mode: 1
            },
            type: "post",
            success: function(resp) {
                console.log(resp);
                //var actDiv = $
                var results = resp;
                //console.log(results);
                
                //ERIKAS PART//
                $("#grey").append("<h1 class='resultsDesc'>Results For: "+timeInput+" and "+budgetInput+"</h1>");
                
                for (var i in results) {
                    var newID = results[i].compID;

                    $("#grey").append("<h2 id='head2'>" + results[i].act_name + "</h2><div class='activity' style='background:url(" + results[i].imgSrc + ");' id='" + newID + "'></div><div><p id='act2'>Location: " + results[i].city + "<br>Budget: " + results[i].price_range + "<br>Time of Day: " + results[i].time_of_day + "</p></div>");
                }
              //END OF ERIKAS PART//
                
            //MY PART//
                $(".activity").click(function() {
                    var actID = $(this).attr("id");

                    var actualID = parseInt(actID);
                    console.log(actualID);
                    $(".activity").hide();
                    $("h2").hide();
                    $("#grey").css("display","none");
                    
                    $.ajax({
                        url: "resultsServer.php",
                        dataType: "json",
                        data: {
                            compID: actualID,
                            mode: 2
                        },
                        type: "post",
                        success: function(company) {
                            console.log(company);

                            for (var i in company) {
                                $("#background").append("<div class='companyinfo2'><h1>" + company[i].company + "  <i id='save' class='fa fa-star-o fa-2x'></i></h1><hr><h2>" + company[i].description + "</h2></div><br><div class='companyinfo'>Address: " +company[i].address+ "<br>Phone Number: " + company[i].phone + "<br>Website: <a href='" + company[i].website + "' target=_blank>" + company[i].website + "</a><br><br></p><div id='map'></div><br><button id='back'>Back</button></div>");
                                 initMap();    
                                
                        //SAVE FUNCTION
                        var saveBut = document.getElementById('save');
                        saveBut.onclick = function() {
                            
                            $.ajax({
                                url: "resultsServer.php",
                                dataType: "json",
                                type: "post",
                                data:{
                                    mode: 3,
                                    compid: company[i].ID
                                },
                                success: function(save) {
                                    if (save == true){
                                    alert("You Have Successfully Saved This!");
                                    saveBut.className = "fa fa-star fa-2x";
                                } else{
                                    alert("You've Already Saved This!");
                                } 

                                }
                            });
                        };
                        
                        var backbut2 = document.getElementById('back');
                        backbut2.onclick = function(){
                            $(".activity").show();
                            $("h2").show();
                            $("#grey").css("display","block");
                            
                            $(".companyinfo2").css("display","none");
                            $(".companyinfo").css("display","none");
                            
                        };
                        
                        
                                //map is inside the company for loop
                                function initMap() {
                                    
                                    //INITMAP//
                                    var map = new google.maps.Map(document.getElementById("map"),
                                    {
                                        center: {
                                            lat: 51,
                                            lng: -121
                                        },
                                        zoom: 11
                                    });
                                    
                                    console.log(company[i]);
                                    //FOR GETTING COORDINATES FROM DB//
                                    var lata = parseFloat(company[i].latitude);
                                    var long = parseFloat(company[i].longitude);
                                    var latlng = {
                                        lat: lata, 
                                        lng: long
                                    };

                                    console.log(latlng);
                                    map.panTo(latlng);
                                    
                                    //MARKER FOR COORDINATES FROM DB//
                                    var marker = new google.maps.Marker({
                                        position: latlng,
                                        zoom: 13,
                                        map: map
                                    });
                                    
                                    console.log(marker.position);
                                    
                                    //GEOLOCATION//
                                    var infoWindow = new google.maps.InfoWindow({
                                        map: map
                                    });
                                    if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(function(position) {
                                            var pos = {
                                                lat: position.coords.latitude,
                                                lng: position.coords.longitude
                                            };

                                            infoWindow.setPosition(pos);
                                            infoWindow.setContent('Here You Are!');
                                            //map.setCenter(pos);
                                        }, function() {
                                            handleLocationError(true, infoWindow, map.getCenter());
                                        });
                                    } 
                                    else {
                                        handleLocationError(false, infoWindow, map.getCenter());
                                    }

                                }

                            }

                        }


                    });
                    
                });
            }
                
               
               });

     //BACK BUTTON CLICK OUTSIDE OF GO CLICK FUNCTION
    var backBut = document.getElementById("return");
    backBut.onclick = function() {
            //i know that i have to actually hide things but just bare with me here
            location.href = "home.php";
        }

}       
    }; //end of button click function
    

