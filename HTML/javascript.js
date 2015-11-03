window.onload = function () {
    var userSignup = document.getElementById ("splashSignup");
    var userLogin = document.getElementById("splashLogin");
    var guestLogin = document.getElementById("splashGuest");
    var buttons = document.getElementById("splashButton");
    
    userSignup.onclick = function () {
        var formDiv = document.createElement("div");
        
            formDiv.style.marginLeft = "150px";
            formDiv.style.marginRight = "150px";
            formDiv.style.height = "750px";
            formDiv.style.width = "auto";
            formDiv.style.position = "absolute";
            formDiv.style.right = "0";
            formDiv.style.left = "0";
            formDiv.style.top = "5%";
            formDiv.style.bottom = "0";
            formDiv.style.backgroundColor = "#fff";
            formDiv.style.boxShadow = "0 5px 15px black";
        
             document.body.appendChild(formDiv);
        
        var fnameInput = document.createElement("input");
            formDiv.appendChild(fnameInput);
        
        var lnameInput = document.createElement("input");
            formDiv.appendChild(lnameInput);
        
        var unameInput = document.createElement("input");
            formDiv.appendChild(unameInput);
        
        var emailInput = document.createElement("input");
            formDiv.appendChild(emailInput);
        
        var passInput = document.createElement("input");
            formDiv.appendChild(passInput);
        
        
               
    };
};