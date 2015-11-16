window.onload = function () {

//for icons
$('#time input:radio').addClass('input_hidden');
$('#budget input:radio').addClass('input_hidden');
$('#budget label').click(function(){
    $(this).addClass('selected').siblings().removeClass('selected');
});
          
var goBut = document.getElementById("goBut");    
    goBut.onclick= function(){
                $("#ResultSpan").css("display","block");
                $("#budget").css("display","none");
                $("#time").css("display","none");
                $("#goBut").css("display","none");
                $("#blank").css("display","none");

        //to create div for result
    
        var budgetInput = document.querySelector("input[name='budget']:checked").value;
        console.log(budgetInput);
         var timeInput = document.querySelector("input[name='time']:checked").value;
        console.log(timeInput);
        //hard coded the activity ID under the company table
        //need to make it dynamic to match the user's inputs
        var actID = 1;
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
                    
                    
                    var results = resp;
                    //console.log(results);                
                    for(var i in results)
                    {
                        $("#grey").append(
                            
                            "<div class='activity'><h4>" + results[i].act_name + "</h4><p>" + results[i].city + "<br>" + results[i].price_range + "<br>" + results[i].time_of_day + "</p></div>");
                        
                        //when appending the images
                        //$("#grey").css("background-image", + results[i].img_src +);

                        //$("#activityResults").html("<div class='activity'>" + resp + "</div>");
                    }
                }
			});
        /*
        $.ajax({
                url:"homeServer.php",
                dataType:"json",
                data:{
                    activityID: actID,
                    mode: 2
                },
                type:"post",
                success:function(resp){
                    console.log(resp);
                }
        
            });*/

         
    };
};
