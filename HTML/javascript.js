window.onload = function () {
    var userSignup = document.getElementById ("splashSignup");
    var userLogin = document.getElementById("splashLogin");
    var guestLogin = document.getElementById("splashGuest");
    var buttons = document.getElementById("splashButton");
    
    var forms = [];
    
    
    userSignup.onclick = function () {
        /*var formInputs = {
            fName: fName.value,
            lName: lName.value,
            uName: uName.value,
            email: email.value,
            password: password.value,
            index: 0
        }
        
        forms.push(formInputs);
            console.log("it's working!!");
        */
        var formDiv = document.createElement("div");
        
            formDiv.style.marginLeft = "auto";
            formDiv.style.marginRight = "auto";
            formDiv.style.height = "1335px";
            formDiv.style.width = "755px";
            formDiv.style.position = "absolute";
            formDiv.style.bottom = "0";
            formDiv.style.top = "10px";
            formDiv.style.backgroundColor = "#fff";
        
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