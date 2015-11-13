window.onload = function () {

//for icons
$('#time input:radio').addClass('input_hidden');
$('#budget input:radio').addClass('input_hidden');
$('#budget label').click(function(){
    $(this).addClass('selected').siblings().removeClass('selected');
});
          
var goBut = document.getElementById("goBut");    
    goBut.onclick= function(){
        
        //to create div for results
        var resultDiv = document.createElement("div");
        document.body.appendChild(resultDiv);
        resultDiv.style.width="500px";
        resultDiv.style.height="500px";
        resultDiv.style.backgroundColor="red";
        resultDiv.style.zIndex="5";
    
        var budgetInput = document.querySelector("input[name='budget']:checked").value;
        console.log(budgetInput);
         var timeInput = document.querySelector("input[name='time']:checked").value;
        console.log(timeInput);
        //hard coded the activity ID under the company table
        //need to make it dynamic to match the user's inputs
        var actID = 1;
        //for getting user inputs and posting results
        $.ajax({
				url:"homeServer.php",
				dataType:"json",
				data:{
					time: timeInput,
                    budget: budgetInput,
                    mode:1
				},
				type:"post",
				success:function(resp){
                    //$(resultDiv).append("<div>.resp.</div>");
					console.log(resp);
				}
			});
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
        
            });

         
    };
};
