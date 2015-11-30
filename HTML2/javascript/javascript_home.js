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
        $("#arrowicons").css("display", "block");
        $("#ResultSpan").css("display", "block");
        $("#budget").css("display", "none");
        $("#time").css("display", "none");
        $("#goBut").css("display", "none");
        $("#blank").css("display", "none");
        $("#optLine").css("display", "none");


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
                
                $("#grey").append("<p>Results For: "+timeInput+" and "+budgetInput+"</p>");
                
                for (var i in results) {
                    var newID = results[i].compID;

                    $("#grey").append(

                        "<div class='activity' style='background:url(" + results[i].imgSrc + ");' id='" + newID + "'><h4>" + results[i].act_name + "</h4><p>Location: " + results[i].city + "<br>Budget: " + results[i].price_range + "<br>Time of Day: " + results[i].time_of_day + "</p></div>");
                
                }

                $(".activity").click(function() {
                    var actID = $(this).attr("id");
                    var actualID = parseInt(actID);

                    
                    console.log(actualID);
                    $("#ResultSpan").css("display", "none");
                    $(".activity").css("display", "none");
                    $("#infoResults").css("display", "block");
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

                                $("#infoResults").append(
                                    "<div class='companyinfo'><h3>" + company[i].company + "</h3><p>" +company[i].address+ "<br>" +company[i].phone+ "<br><a href='" +company[i].website+ "' target=_blank>" +company[i].website+ "</a><br><br>" +company[i].description+ "</p><div id='map'></div></div>"
                                );
                                
                                //Calling the initMap function
                                initMap();    
                                
                                //map is inside the company for loop
                                function initMap() {
                                    
                                    //INITMAP//
                                    var map = new google.maps.Map(document.getElementById("map"), {
                                        center: {
                                            lat: 51,
                                            lng: -121
                                        },
                                        zoom: 11
                                    });
                                    
                                    //FOR GETTING COORDINATES FROM DB//
                                    var lat = parseFloat(company[i].latitude);
                                    var long = parseFloat(company[i].longitude);
                                    var latlng = {
                                        lat: lat, 
                                        lng: long
                                    };

                                    console.log(latlng);
                                    
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
                                            map.setCenter(pos);
                                        }, function() {
                                            handleLocationError(true, infoWindow, map.getCenter());
                                        });
                                    } else {
                                        handleLocationError(false, infoWindow, map.getCenter());
                                    }

                                }

                            }

                        }


                    });
                    
                    //SAVE FUNCTION
                    var saveBut = document.getElementById('save');
                    saveBut.onclick = function() {
                        console.log('WORKS');
                        $.ajax({
                            url: "resultsServer.php",
                            dataType: "json",
                            data: {
                                mode: 3,
                                user_id: 2,
                                act_id: 1,
                                comp_id: 3
                            },
                            type: "post",
                            success: function(save) {
                                alert(save);
                            }


                        });
                    }

                });
            }
        });

    }; //end of button click function
    
    //BACK BUTTON CLICK OUTSIDE OF GO CLICK FUNCTION
    var backBut = document.getElementById("return");
    backBut.onclick = function() {
            //i know that i have to actually hide things but just bare with me here
            location.href = "home.php";
        }

};